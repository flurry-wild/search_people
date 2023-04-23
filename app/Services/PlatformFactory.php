<?php

namespace App\Services;

use Exception;

class PlatformFactory
{
    public static function factory($type)
    {
        if ($type === 'vk') {
            return new VkPlatform();
        } else if ($type === 'ok') {
            return new OdnoklassnikiPlatform();
        }

        throw new Exception();
    }
}
