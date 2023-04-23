<?php

namespace App\Services;

use GuzzleHttp\Client as Guzzle;

class VkPlatform implements PlatformInterface
{
    public function getPeople($search)
    {
        $guzzle = new Guzzle();
        $url = 'https://api.vkontakte.ru/method/users.search?access_token='.env('VK_TOKEN')."&v=5.141&q=$search&fields=photo_100&count=5";
        $response = $guzzle->request('GET', $url);

        $data = json_decode($response->getBody()->getContents());

        $people = [];
        foreach ($data->response->items as $human) {
            $people['data'][] = [
                'id' => $human->id,
                'link' => 'https://vk.com/id'.$human->id,
                'first_name' => $human->first_name,
                'last_name' => $human->last_name,
                'photo' => $human->photo_100
            ];
        }

        return $people;
    }
}
