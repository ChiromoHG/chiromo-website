<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        return view('welcome_message');
    }
    public function dashboard()
    {
        return view('main/dashboard');
    }

    public function home()
    {
        return view('main/home');
    }

    public function login()
    {
        return view('main/auth/client_login');
    }

    public function signUp()
    {
        return view('main/auth/client_sign_up');
    }

    public function blog(){
        return view('main/blog-content');
    }

    public function giftMember(){
        return view('main/gift-member');
    }

    public function choosePackages(){
        return view('main/choose-packages');
    }

    public function paymentKYC(){
        return view('main/payment-kyc');
    }

    public function aboutUs(){
        return view('main/about-us');
    }

    public function treatments(){
        return view('main/treatments');
    }
}
