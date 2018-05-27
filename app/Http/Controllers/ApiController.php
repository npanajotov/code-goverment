<?php

namespace App\Http\Controllers;

use App\Models\Local\Obavestenja;
use App\Models\Local\RequestAddress;
use App\Models\Local\Subscribe;
use App\Models\Local\SubscribeNotifications;
use App\Models\Local\Vesti;
use App\Models\User;
use GuzzleHttp\RequestOptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        $notification = Obavestenja::all();
        return response()->json($notification, 200);
    }

    public function news()
    {
        $news = [];
        return response()->json(['news' => $news], 200);
    }

    public function addNoty(Request $request)
    {
        Obavestenja::create($request->all());
        Log::error($request->all());

        $client = new \GuzzleHttp\Client();
        $res = $client->post('https://exp.host/--/api/v2/push/send', [
            RequestOptions::JSON => [
                "to" => "ExponentPushToken[XUuvRNGPV1HlQRpuZdhmkZ]",
                "title" => $request->title,
                "body" => $request->message,
                "data" => ["title" => $request->title, "content" => $request->title]
            ]
        ]);

        return response()->json($request->all());
    }

    public function addNews(Request $request)
    {
        Vesti::create($request->all());
        $client = new \GuzzleHttp\Client();
        $res = $client->post('https://exp.host/--/api/v2/push/send', [
            RequestOptions::JSON => [
                "to" => "ExponentPushToken[XUuvRNGPV1HlQRpuZdhmkZ]",
                "title" => $request->title,
                "body" => $request->message,
                "data" => ["title" => $request->title, "content" => $request->title]
            ]
        ]);


        return response()->json($request->all());
    }
}
