<?php

namespace Config;


$routes = Services::routes();


$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();



$routes->get('/home', 'Home::index');
$routes->get('/', 'Home::home');
$routes->get("/auth/login", "Auth::login");

$routes->get("/customer/sign-in", "Home::login");
$routes->get("/customer/sign-up", "Home::signUp");
$routes->get("/our-blog", "Home::blog");
$routes->get("/gift-member", "Home::giftMember");
$routes->get("gift-member/choose-packages", "Home::choosePackages");
$routes->get("gift-member/payment-kyc", "Home::paymentKYC");
$routes->get("about-us", "Home::aboutUs");
$routes->get("treatments", "Home::treatments");


$routes->post("users/auth/loginUser", "Auth::loginUser");
$routes->get("users/auth/logoutUser", "Auth::logoutUser");


//book appointment

$routes->get("/book-appointment", "Appointment::appointment");
$routes->get("/book-appointment/online-therapy", "Appointment::onlineTherapy");


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
