<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http as BaseHttp;

class Http
{
    public static function withToken($token)
    {
        return BaseHttp::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ]);
    }
}