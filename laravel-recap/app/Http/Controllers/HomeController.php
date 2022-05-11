<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Client;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $services = Service::all();
        $banner = Banner::all();
        return view('front/pages/welcome', compact('clients', 'services', 'banner'));
    }
}
