<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        return view('payment.index');
    }
    function verify(Request $request){
        $curl=curl_init();
        curl_setopt_array($curl,array(

            CURLOPT_URL=>"https://api.flutterwave.com/v3/transactions/{$request->transaction_id}/verify",
            CURLOPT_RETURNTRANSFER=>true,
            CURLOPT_ENCODING=>"",
            CURLOPT_MAXREDIRS=>10,
            CURLOPT_TIMEOUT=>0,
            CURLOPT_FOLLOWLOCATION=>true,
            CURLOPT_HTTP_VERSION=>CURLOPT_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST=>"GET",
            CURLOPT_HTTPHRADER=>array(
                "Content-Type:application/json",
                "Authorization:Bearer FLWSECK-31f0d6cc0ec02b443771d615b64c977e-X"
            )
            ));
            $response=curl_exec();
            curl_close($curl);
            $res=json_decode($request);
            return [$res];

    }

}
