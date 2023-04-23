<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Exception;

abstract class PlatformAbstract
{
    public function getPeople($search)
    {
        try {
            return $this->getPeopleSearch($search);
        } catch (Exception $e) {
            $message = $e->getMessage();
            $class = self::class;

            Log::error("$search $class $message");
        }
    }
}
