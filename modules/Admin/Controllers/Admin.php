<?php

namespace  Modules\Admin\Controllers;
use App\Controllers\BaseController;

use Modules\Admin\Models\ManageDoctorModel;

class Admin extends BaseController
{

    private $doctorModel;
    public function __construct(){
        $this->doctorModel = model(ManageDoctorModel::class);
    }
    public function dashboard()
    {
        return view('Modules\Admin\Views\main\dashboard');
    }

    public function login()
    {
        return view('Modules\Admin\Views\main\login');
    }

    public function timeSlots(){
        return view('Modules\Admin\Views\main\time-slots');
    }

    public function appointments(){
        return view('Modules\Admin\Views\main\appointments');
    }

    public function patients(){
        return view('Modules\Admin\Views\main\patients');
    }

    public function appointment($appointment_uuid){
        $getAppointment = $this->doctorModel->getPatientAppointment($appointment_uuid);
        return view('Modules\Admin\Views\main\appointment', ['appointment' => $getAppointment]);
    }

    public function patientsPatient()
    {
        $patient_uuid = $this->request->getVar('uuid');
        $getPatient = $this->doctorModel->getAdmittedPatientDetails($patient_uuid);
        if(!$getPatient){
            session()->setFlashdata('error', 'Patient with the unique identifier ' . ' ' . $patient_uuid . ' ' . 'not found in the records or not admitted');
            return redirect()->back();
        }
        return view('Modules\Admin\Views\main\patients-patient', ['patient' => $getPatient]);
    }

    public function patientHistory()
    {
        return view('Modules\Admin\Views\main\patients-patient-history');
    }

    public function patientExamination()
    {
        return view('Modules\Admin\Views\main\patients-patient-examination');
    }

    public function patientDiagnosis()
    {
        return view('Modules\Admin\Views\main\patients-patient-diagnosis');
    }

    public function patientServices()
    {
       return view('Modules\Admin\Views\main\patients-patient-services');
    }

    public function patientPrescription()
    {
        return view('Modules\Admin\Views\main\patients-patient-prescription');
    }

    public function patientConsultation()
    {
        return view('Modules\Admin\Views\main\patients-patient-consultation');
    }

    public function patientReferral()
    {
        return view('Modules\Admin\Views\main\patients-patient-referral');
    }

    public function patientBill()
    {
        return view('Modules\Admin\Views\main\patients-patient-bill');
    }
    public function patientCheckout()
    {
        return view('Modules\Admin\Views\main\patients-patient-checkout');
    }

    public function master()
    {
        return view('Modules\Admin\Views\main\master');
    }

    public function createRoles()
    {
        return view('Modules\Admin\Views\main\create-roles');
    }

    public function departments()
    {
        return view('Modules\Admin\Views\main\departments');
    }
}