<?php

namespace App\Library;

use Session;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class Rest
{
   public static function post($url, $params)
    {
        try{
            $headers = [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer '.Session::get('token')
            ];
            $client = new Client([
                'headers' => $headers,
                'base_uri' => $url,
                'verify' => false,
            ]);

            $response = $client->post(
                $url,
                ['json' => $params, 'http_errors' => false]
            );
            // echo "11".Session::get('token');die;
            // var_dump($response->getStatusCode());die;
            // echo "saaa";die;
            if ($response->getStatusCode() == 401) {         
                return redirect('logout');
            }
            // echo "s";die;var_dump($response->getBody());die;
            $rs = json_decode($response->getBody(), true);

            // if ($response->getStatusCode() != 200) {         
                // return back()->with('msgError', $rs['message']);
            // }

            return $rs;
        } catch (RequestException $exc) {
            echo "s";die;
            return view('errors.503'); 
        }
    }

    public static function get($url)
    {
        try{
            $headers = [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer '.Session::get('token')
            ];
            $client = new Client([
                'headers' => $headers,
                'base_uri' => $url,
                'verify' => false,
            ]);

            $response = $client->post(
                $url,
                ['json' => array(), 'http_errors' => false]
            );
            // echo "11".Session::get('token');die;
            // var_dump($response->getStatusCode());die;
            // echo "saaa";die;
            if ($response->getStatusCode() == 401) {         
                return redirect('logout');
            }
            // echo "s";die;var_dump($response->getBody());die;
            $rs = json_decode($response->getBody(), true);

            // if ($response->getStatusCode() != 200) {         
                // return back()->with('msgError', $rs['message']);
            // }

            return $rs;
        } catch (RequestException $exc) {
            echo "s";die;
            return view('errors.503'); 
        }
    }
}