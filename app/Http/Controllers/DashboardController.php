<?php

namespace App\Http\Controllers;


class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard');
    }

    public function whoIam()
    {
        return view('pages.who-i-am');
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function calendar()
    {
        return view('pages.calendar');
    }

    public function news()
    {
        return view('pages.news');
    }

    public function notifications()
    {
        return view('pages.notification');
    }

    public function changeLocation()
    {
        return view('pages.change-location');
    }
}
