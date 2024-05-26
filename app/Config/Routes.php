<?php

namespace Config;


$routes = Services::routes();


$routes->setDefaultNamespace('App\Controllers');
$routes->setTranslateURIDashes(false);
$routes->set404Override(function (){
    return view('404/error_404');
});


$routes->get('/', 'Home::home');
$routes->get('/our-partners', 'Home::partners');

$routes->get("/our-blog", "Home::blog");

$routes->get('/our-blog/healing-the-mind', 'Home::healingTheMind');
$routes->get('/our-blog/bustani-launch', 'Home::BustaniLaunch');
$routes->get('/our-blog/nps-trainings', 'Home::npsTrainings');
$routes->get('/our-blog/mental-health', 'Home::mentalHealth');
$routes->get('/our-blog/eating-disorder', 'Home::eatingDisorder');
$routes->get('/our-blog/adolescent', 'Home::adolescent');

$routes->get('/treatments/anxiety', 'Home::anxiety');
$routes->get('/treatments/ptsd', 'Home::ptsd');
$routes->get('/treatments/bipolar', 'Home::bipolar');
$routes->get('/treatments/schizophrenia', 'Home::schizophrenia');
$routes->get('/treatments/burnout', 'Home::burnout');
$routes->get('/treatments/depression', 'Home::depression');
$routes->get('/treatments/substance-use', 'Home::substanceUse');

$routes->get("/gift-member", "Home::giftMember");
$routes->get("/gift-member/choose-packages", "Home::choosePackages");
$routes->get("/gift-member/payment-kyc", "Home::paymentKYC");
$routes->get("/about-us", "Home::aboutUs");
$routes->get("/careers", "Home::careers");
$routes->get('/careers/job_description', "Home::jobDescription");
$routes->get('/careers/job_description_1', "Home::jobDescription1");
$routes->get("/treatments", "Home::treatments");
$routes->get("/assessments", "Assessment::assessment");
$routes->get("/book-appointment/online-therapy", "Appointment::onlineTherapy");
$routes->match(['get', 'post'], "/patient-details", "Appointment::patientDetails");
$routes->get("/review-and-pay", "Appointment::reviewAndPay");
$routes->match(['get', 'post'], 'payment/payment_callback', 'Appointment::paymentCallback');

$routes->post("api/verify_email", "Api::verifyEmail");
$routes->post("api/register-patient", "Api::registerPatient");
$routes->post("api/patient_login", "Api::login");
$routes->get("api/patient_logout", "Api::logout");
$routes->post("api/save_feedback", "Api::saveFeedback");
$routes->post("api/save_booked_appointment_payment", "Api::saveBookedAppointmentPayment");

//google sitemap url

$routes->match(['get', 'post'], "/appointment_bookings", "Appointment::appointmentBookings");
$routes->post("api/get_doctors", "Api::getDoctorsByType");
$routes->post("api/get_doctor_date_time_slots", "Api::getDoctorDateTimeSlots");
$routes->post("api/save_booked_appointment", "Api::saveBookedAppointment");
$routes->post("api/get_patient_appointments", "Api::getPatientAppointments");
$routes->post("api/cancel_appointment", "Api::cancelAppointment");
$routes->get("api/get_get_display_appointments", "Api::getGetDisplayAppointments");
$routes->get("api/offer/get_all_offers", "Api::getAllOffers");


//, ['filter' => 'isPatientLoginFilter']
$routes->group('', ['filter' => 'isPatientLoginFilter'], function ($routes){
    //book appointment

    $routes->get('/patient/dashboard', 'Home::dashboard');
    $routes->get("/patient-appointment", "Appointment::patientAppointment");
    $routes->get("/patient-prescription", "Appointment::patientPrescription");
    $routes->get("/patient-payment", "Appointment::patientPayment");
    $routes->get("/patient-prescription", "Appointment::patientPrescription");
    $routes->get("/my-appointments", "Appointment::myAppointments");
    $routes->get("/patient-profile", "Appointment::patientSettings");

//API's routes;
    $routes->get("api/get_patient_information", "Api::getPatientInformation");
    $routes->get("api/get_doctor_assigned", "Api::getDoctorAssigned");
    $routes->post("api/save_edit_general_information", "Api::saveEditGeneralInformation");
    $routes->post("api/save_edit_additional_information", "Api::saveEditAdditionalInformation");
    $routes->get("api/get_patient_additional_information", "Api::getPatientAdditionalInformation");
});



if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
