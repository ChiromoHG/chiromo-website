<?php

namespace Config;

use App\Services\GenerateRandomPassword;
use App\Services\SendEmailService;
use CodeIgniter\Config\BaseService;

class Services extends BaseService
{
    public static function generateRandomPassword($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('generateRandomPassword');
        }

        return new GenerateRandomPassword();
    }

    public static function send_email($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('send_email');
        }

        return new SendEmailService();
    }
}
