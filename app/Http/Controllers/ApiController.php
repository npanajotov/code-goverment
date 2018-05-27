<?php

namespace App\Http\Controllers;

use App\Models\Local\RequestAddress;
use App\Models\Local\Subscribe;
use App\Models\Local\SubscribeNotifications;
use App\Models\User;
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

    public function changeNotificationService(Request $request)
    {

        $subscribe = SubscribeNotifications::where('user_id', $request->user_id)->first();
        $subscribe->selected_telekom = $request->selected_telekom;
        $subscribe->selected_eps = $request->selected_eps;
        $subscribe->selected_vodovod = $request->selected_vodovod;
        $subscribe->update();

        return response()->json(['message' => 'Uspesno izmenjeni servisi za obavestenja!', 200]);

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

    public function userById($id)
    {
        $user = User::where('id', $id)->with('requestAddress', 'subscribed', 'marriageBook', 'address', 'driverLicence', 'passport', 'employment', 'birthBook', 'identityCard')->first();
        return response()->json(['user' => $user], 200);
    }

    public function auth(Request $request)
    {
        $user = User::where('KorisnickoIme', $request->username)->with('requestAddress', 'subscribed', 'marriageBook', 'address', 'driverLicence', 'passport', 'employment', 'birthBook', 'identityCard')->first();
        return response()->json(['user' => $user], 200);

    }

    public function notifications()
    {
        $notification = [];
        return response()->json(['notifications' => $notification], 200);
    }

    public function news()
    {
        $news = [];
        return response()->json(['news' => $news], 200);
    }
}
