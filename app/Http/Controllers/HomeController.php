<?php

namespace App\Http\Controllers;

use App\Models\Local\Subscribe;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function help()
    {
        return view('pages.help');
    }


//
//    public function setsubscribe()
//    {
//        $users = User::all();
//        foreach ($users as $user):
//            $subscribe = new Subscribe();
//            $subscribe->user_id = $user->id;
//            $subscribe->save();
//        endforeach;
//    }
}
