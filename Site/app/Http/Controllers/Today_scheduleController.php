<?php

namespace App\Http\Controllers;

use App\Today_schedule;
use Illuminate\Http\Request;

class Today_scheduleController extends Controller
{
    //
    public function index(Today_schedule $schedule){
        return $schedule->get();
    }
    
}
