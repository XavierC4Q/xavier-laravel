<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MonsterController extends Controller
{
    public function all_monsters(Request $request)
    {
        return Http::get('https://api.osrsbox.com/monsters')->json();
    }
}
