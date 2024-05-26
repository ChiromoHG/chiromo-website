<?php

namespace App\Controllers;
use App\Models\ApiModel;
use DateTime;
use DateTimeZone;
use Exception;

class Home extends BaseController
{
    private $apiModel;

    public function __construct()
    {
        $this->apiModel = model(ApiModel::class);
    }
    public function home()
    {
        return view('main/home');
    }
    public function index()
    {
        return view('welcome_message');
    }
    public function dashboard()
    {
        return view('main/dashboard');
    }

    public function careers()
    {
        return view('main/careers');
    }

    public function jobDescription()
    {
       return view('main/job-description');
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

    public function jobDescription1()
    {
        return view('main/job-description-1');
    }


    public function healingTheMind(){
        return view('blogs/healing-the-mind');
    }

    public function BustaniLaunch(){
        return view('blogs/bustani-launch');
    }

    public function npsTrainings(){
        return view('blogs/npsTraining');
    }

    public function eatingDisorder(){
        return view('blogs/eating-disorder');
    }

    public function mentalHealth(){
        return view('blogs/mental-health');
    }

    public function adolescent(){
        return view('blogs/adolescent');
    }

    public function anxiety(){
        return view('treatments/anxiety');
    }

    public function ptsd(){
        return view('treatments/ptsd');
    }

    public function bipolar(){
        return view('treatments/bipolar');
    }

    public function schizophrenia(){
        return view('treatments/schizophrenia');
    }

    public function burnout(){
        return view('treatments/burnout');
    }

    public function depression(){
        return view('treatments/depression');
    }

    public function substanceUse(){
        return view('treatments/substance-use');
    }

    public function partners(){
        return view('main/partners');
    }
}
