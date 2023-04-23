<?php

namespace App\Services;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Cookie\CookieJar;

class OdnoklassnikiPlatform extends PlatformAbstract implements PlatformInterface
{
    public function getPeopleSearch($search)
    {
        $guzzle = new Guzzle();
        $url = "https://ok.ru/web-api/v2/search/toolbar?query=$search&limit=5";

        $cookieJar = CookieJar::fromArray([
            'AUTHCODE' => env('OK_RU_AUTH_CODE'),
        ], 'ok.ru');

        $response = $guzzle->request('GET', $url, ['cookies' => $cookieJar]);

        $data = json_decode($response->getBody()->getContents());

        $people = [];
        foreach ($data->result->results[0]->items as $human) {
            $humanData = $human->user->info;

            $people['data'][] = [
                'link' => 'https://ok.ru/'.$humanData->shortLink,
                'first_name' => $humanData->firstName,
                'last_name' => $humanData->lastName,
                'photo' => $humanData->imageUrl
            ];
        }

        return $people;
    }
}
