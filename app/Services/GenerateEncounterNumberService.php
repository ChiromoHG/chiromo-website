<?php

namespace App\Services;
use CodeIgniter\Config\BaseService;

class GenerateEncounterNumberService extends BaseService{

    function generateEncounterNumber() {
        $dateTime = new \DateTime();
        return $dateTime->format('mdYHi');
    }

}