<?php

namespace Config;

use App\Services\GenerateRandomPassword;
use App\Services\SendEmailService;
use CodeIgniter\Config\BaseService;
use App\Services\GenerateUHIDService;
use App\Services\GenerateEncounterNumberService;


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

    public static function generateUHID($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('generateUHID');
        }

        return new GenerateUHIDService();
    }

    public static function generateEncounterNumber($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('generateEncounterNumber');
        }

        return new GenerateEncounterNumberService();
    }

    public static function initiatePayment($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('initiatePayment');
        }

        return new PaymentService();
    }
}
