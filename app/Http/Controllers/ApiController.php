<?php

namespace App\Http\Controllers;

use App\Models\Local\RequestAddress;
use App\Models\Local\Subscribe;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function changeNotification(Request $request)
    {
        $subscribe = Subscribe::where('user_id', $request->user_id)->first();
        $subscribe->selected_email = $request->selected_email;
        $subscribe->selected_phone = $request->selected_phone;
        $subscribe->selected_ios = $request->selected_ios;
        $subscribe->update();

        return response()->json(['message' => 'Uspesno izmenjena obavestenja!', 200]);
    }

    public function requestAddress(Request $request)
    {

        $address = new RequestAddress();
        $address->user_id = $request->user_id;
        $address->street = $request->street;
        $address->num = $request->num;
        $address->place = $request->place;
        $address->city = $request->city;
        $address->created_at = date('Y-m-d');
        $address->save();

        return response()->json(['message' => 'Uspesno izmenjena obavestenja!', 200]);
    }
}
