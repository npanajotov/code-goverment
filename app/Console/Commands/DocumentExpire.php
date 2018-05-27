<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Twilio\Rest\Client;

class DocumentExpire extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'document:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Posalji informacije ljudima kojima istice dokument!';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        $sid = "AC6a52ee98ed0e8992f1aaa26902c9b6b9"; // Your Account SID from www.twilio.com/console
        $token = "01a6808009096ab2641a7427078fe3da"; // Your Auth Token from www.twilio.com/console
        //15045027186
        $client = new Client($sid, $token);
        $numbers = [
            '+381628448816','+381645637112', '+381616202214', '+381644513163', '+381644343897', '+381607636111',
            '+381652695209', '+381601662661', '+381656076774', '+381643757525', '+381698893110', '+381655419360', '+381642970767'
        ];

        $numbers = ['+381691014959'];


        $client->account->calls->create(
            '+381691014959',
            '15045027186',
            array(
                "url" => "https://mikicaivosevic.info/voice.xml"
            )
        );


        collect($numbers)->each(function($broj) use ($client) {
            $message = $client->messages->create(
                $broj, // Text this number
                array(
                    'from' => '15045027186', // From a valid Twilio number
                    'body' => 'Zdravo Konislave!'
                )
            );
        });


//        $call = $client->calls->create(
//            '+381691014959', // Call this number
//            '15045027186', // From a valid Twilio number
//            array(
//                'url' => 'https://twimlets.com/holdmusic?Bucket=com.twilio.music.ambient'
//            )
//        );
    }
}
