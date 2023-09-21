<?php

namespace App\Controllers;


class Home extends BaseController
{

    public function index(): string
    {
        return view('login');
    }
    public function login(): string
    {
        require_once(APPPATH . '/Libraries/vendor/autoload.php');

        $client = new Google\Client();
        $Credentials->setAuthConfig($oauth_credentials);
        $client->setRedirectUri($redirect_uri);

        $service = new Google\Service\Drive($client);

        return view('login');
    }
    public function dashboard(): string
    {
        return view('dashboard');
    }
}
