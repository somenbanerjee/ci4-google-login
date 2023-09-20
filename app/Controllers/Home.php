<?php

namespace App\Controllers;

use Google\Service\ChromeManagement\GoogleTypeDate;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }
    public function login(): string
    {
        $client = new GoogleTypeDate;
        $client->setApplicationName("Client_Library_Examples");
        $client->setDeveloperKey("YOUR_APP_KEY");
        return view('login');
    }
    public function dashboard(): string
    {
        return view('dashboard');
    }
}
