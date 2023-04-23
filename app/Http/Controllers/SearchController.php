<?php

namespace App\Http\Controllers;

use App\Services\PlatformFactory;
use Illuminate\Http\Request;

class SearchController
{
    public function home()
    {
        return view('welcome');
    }

    public function people(Request $request)
    {
        $type = $request->input('type');
        $query = $request->input('query');

        $platform = PlatformFactory::factory($type);
        $people = $platform->getPeople($query);

        return response()->json($people);
    }
}
