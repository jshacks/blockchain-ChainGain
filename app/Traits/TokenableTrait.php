<?php

namespace App\Traits;

use App\Token;

trait TokenableTrait {

    public function tokens()
    {
        return $this->morphMany(Token::class, 'tokenable');
    }

    public function generateToken()
    {
        $value = str_random(32);
        return $this->tokens()->create(['value' => $value]);
    }

    public function getTokenAttribute()
    {
        $token = '';
        $firstToken = $this->tokens()->latest()->first();
        if($firstToken){
            $token = $firstToken->value;
        }
        return $token;
    }

    public function getCodeAttribute()
    {
        $token = $this->token;
        return view('script-template', ['token' => $token]);
    }

    public function getCoinhiveUser()
    {
        // return "chain_gain_site_{id}";
    }
}