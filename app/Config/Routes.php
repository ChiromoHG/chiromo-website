<?php

namespace Config;


$routes = Services::routes();


$routes->setDefaultNamespace('App\Controllers');
$routes->setTranslateURIDashes(false);
$routes->set404Override();


$routes->get('/', 'Home::home');

$routes->get("/customer/sign-in", "Home::login");
$routes->get("/customer/sign-up", "Home::signUp");
$routes->get("/our-blog", "Home::blog");
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

$routes->post("api/verify_email", "Api::verifyEmail");
$routes->post("api/register-patient", "Api::registerPatient");
$routes->post("api/patient_login", "Api::login");
$routes->get("api/patient_logout", "Api::logout");
$routes->post("api/save_feedback", "Api::saveFeedback");
$routes->post("api/save_booked_appointment_payment", "Api::saveBookedAppointmentPayment");

//google sitemap url

$routes->get("sitemap.xml", "Home::sitemap");


$routes->match(['get', 'post'], "/appointment_bookings", "Appointment::appointmentBookings");
$routes->post("api/get_doctors", "Api::getDoctorsByType");
$routes->post("api/get_doctor_date_time_slots", "Api::getDoctorDateTimeSlots");
$routes->post("api/save_booked_appointment", "Api::saveBookedAppointment");
$routes->post("api/get_patient_appointments", "Api::getPatientAppointments");
$routes->post("api/cancel_appointment", "Api::cancelAppointment");
$routes->get("api/get_get_display_appointments", "Api::getGetDisplayAppointments");


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
