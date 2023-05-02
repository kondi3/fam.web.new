<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;

class MainSiteController extends Controller
{
    public function index() : Response
    {
        return inertia('Main/Index');
    }

    public function about() : Response
    {
        return inertia('Main/About');
    }

    public function programmes() : Response
    {
        return inertia('Main/Programmes');
    }

    public function gbv() : Response
    {
        return inertia('Main/GBV');
    }

    public function policies() : Response
    {
        return inertia('Main/Policies');
    }

    public function contacts() : Response
    {
        return inertia('Main/Contacts');
    }
}
