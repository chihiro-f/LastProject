<?php

namespace App\Http\Controllers;

use App\Monthly_schedule;
use Illuminate\Http\Request;

class Monthly_scheduleController extends Controller
{
    //
    public function index(Monthly_schedule $schedule){
        return $schedule->get();
    }
}
