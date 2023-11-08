<?php

namespace Config;


$routes = Services::routes();


$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();



$routes->get('/home', 'Home::index');

$routes->get('/patient/dashboard', 'Home::dashboard');
$routes->get('/', 'Home::home');

$routes->get("/customer/sign-in", "Home::login");
$routes->get("/customer/sign-up", "Home::signUp");
$routes->get("/our-blog", "Home::blog");
$routes->get("/gift-member", "Home::giftMember");
$routes->get("/gift-member/choose-packages", "Home::choosePackages");
$routes->get("/gift-member/payment-kyc", "Home::paymentKYC");
$routes->get("/about-us", "Home::aboutUs");
$routes->get("/treatments", "Home::treatments");


//book appointment

$routes->get("/book-appointment", "Appointment::appointment");
$routes->get("/book-appointment/online-therapy", "Appointment::onlineTherapy");
$routes->get("/patient-appointment", "Appointment::patientAppointment");
$routes->get("/patient-prescription", "Appointment::patientPrescription");
$routes->get("/patient-payment", "Appointment::patientPayment");
$routes->get("/patient-prescription", "Appointment::patientPrescription");
$routes->get("/patient-payment", "Appointment::patientPayment");
$routes->get("/patient-profile", "Appointment::patientSettings");

//API's routes
$routes->post("api/register-patient", "Api::registerPatient");
$routes->post("api/patient_login", "Api::login");
$routes->get("api/patient_logout", "Api::logout");


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
