<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Appointment extends BaseController
{
    public function appointment()
    {
        return view('main/appointment');
    }

    public function onlineTherapy(){
        return view('main/online-therapy');
    }

    public function patientAppointment(){
        return view('main/patient-appointment');
    }
    public function patientPrescription(){
        return view('main/patient-prescription');
    }
    public function patientPayment(){
        return view('main/patient-payment');
    }

    public function patientSettings(){
        return view('main/patient-settings');
    }
}
