<?php

namespace App\Services;
use CodeIgniter\Config\BaseService;

class GenerateUHIDService extends BaseService
{
    public function generateUHID()
    {
        $prefix = '10';
        $randomPart = $this->generateRandomString(5);

        return  $prefix . $randomPart;
    }

    private function generateRandomString($length)
    {
        $characters = '0123456789';
        $randomString = '';

        $charCount = strlen($characters);

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[mt_rand(0, $charCount - 1)];
        }

        return $randomString;
    }
}