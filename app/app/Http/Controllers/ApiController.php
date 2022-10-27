<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    function all_clients(){
        $clients = Client::all();

        return json_encode($clients ,JSON_UNESCAPED_UNICODE);
    }
}
