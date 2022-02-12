<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function aboutUs()
    {
        return view('about');
    }

    public function getContact()
    {
        return view('contact');
    }

    public function setContact()
    {
    }

    public function getReservation()
    {
        return view('reservation');
    }

    public function setReservation()
    {
    }

    public function getVehicles()
    {
        return view('vehicles');
    }

    public function setVehicles()
    {
    }
}
