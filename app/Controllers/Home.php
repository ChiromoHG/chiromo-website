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


    /**
     * @throws Exception
     */
    public function sitemap()
    {

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">';


        $urls = [
            [
                'url' => base_url('careers'),
                'lastmod' => $this->getLastModifiedDate('careers'),
            ],
            [
                'url' => base_url('appointment_bookings'),
                'lastmod' => $this->getLastModifiedDate('appointment_bookings'),
            ],
            [
                'url' => base_url('treatments'),
                'lastmod' => $this->getLastModifiedDate('treatments'),
            ],
            [
                'url' => base_url('assessment'),
                'lastmod' => $this->getLastModifiedDate('assessment'),
            ],
            [
                'url' => base_url('our-blog'),
                'lastmod' => $this->getLastModifiedDate('our-blog'),
            ],
            [
                'url' => base_url('about-us'),
                'lastmod' => $this->getLastModifiedDate('about-us'),
            ],
            [
                'url' => base_url('gift-member'),
                'lastmod' => $this->getLastModifiedDate('gift-member'),
            ]

        ];


        foreach ($urls as $data) {
            $xml .= '<url>';
            $xml .= '<loc>' . htmlspecialchars($data['url'], ENT_QUOTES, 'UTF-8') . '</loc>';
            $xml .= '<lastmod>' . htmlspecialchars($data['lastmod'], ENT_QUOTES, 'UTF-8') . '</lastmod>'; // Include lastmod
            $xml .= '<changefreq>weekly</changefreq>'; // You can set the change frequency
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        header('Content-type: application/xml');

        $sitemapPath = WRITEPATH . 'sitemap.xml'; // Path to the sitemap file
        file_put_contents($sitemapPath, $xml);

    }

    /**
     * @throws Exception
     */
    public function getLastModifiedDate($url)
    {
        $now = new DateTime('now', new DateTimeZone('UTC'));
        return $now->format('Y-m-d');
    }
    public function home()
    {
        $data =[];
        try{
            $data['carousel'] = $this->apiModel->getCarousel();
        }catch(Exception $e){
            log_message('error', $e->getMessage());
        }
        return view('main/home', $data);
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
}
