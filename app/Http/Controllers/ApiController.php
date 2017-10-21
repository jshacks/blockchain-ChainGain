<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    protected $url ='https://api.coinhive.com';
    public $credentials;
    public $httpClientHandler;

    public function __construct()
    {
        $this->credentials = [
            // 'public_token' => 'FxmLPIrkVw9w9UP460GZkyPzfqfoHX6d',
            'secret' => 'ljO0R5aCsaYsUEmQuTFFhl4nBaC9Xzc8'
        ];
        $this->httpClientHandler = new Client([
            'base_uri' => $this->url,
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    public function balance(Request $request)
    {
        $user = $request->input('user');

        $url = "/user/balance";
        $body = [
            'name' => $user,
            'secret' => 'ljO0R5aCsaYsUEmQuTFFhl4nBaC9Xzc8'
        ];
        try{
            $response = $this->httpClientHandler->request('GET', $url, [
                'query' => $body,
            ]);
            $response = json_decode($response->getBody(), true);
        }catch (Exception $e){
            $response = $e->getResponse();
        }

        return $response;

    }

}
