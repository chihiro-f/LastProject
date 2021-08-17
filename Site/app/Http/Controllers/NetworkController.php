<?php

namespace App\Http\Controllers;

use App\Network;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    //
    public function index(Network $network){
        return $network->get();
    }
}
