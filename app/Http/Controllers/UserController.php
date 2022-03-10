<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class UserController extends Controller
{
    public function index(Request $request)
    {
        /* $ip = $request->ip(); Dynamic IP address  u                                    */
        // $ip = request()->ip();
        // $ip = '180.254.90.10'; /* Static IP address */
        // $ip_address = $_SERVER["REMOTE_ADDR"];
        // $currentUserInfo = Location::get($ip_address);
        // $ipaddress = $_SERVER['REMOTE_ADDR'];
  
        // get location 
        // $url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=/*userapikey*/
        // // you can get your api key form http://ipinfodb.com/
        // ip=".$_SERVER['REMOTE_ADDR']."&format=json"));
        
        //mengambil data lokasi user
        $url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=02d06daff139466bba306d936a7f55f6aefc3f43b8a121ce0775db5b16b6beb3"."&format=json"));

        //mengubah latitude dan longitude ke alamat jalan
        // $urls = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($lat).','.trim($lng).'&sensor=false';
        // $json = @file_get_contents($urls);
        // $data=json_decode($json);
        // $status = $data->status;
        // return $status;
        // if($status=="OK")
        // {
        //   return $data->results[0]->formatted_address;
        // }
        // else
        // {
        //   return ('error');
        // }

        return view('user', compact('url'));
    }

}
