<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function viewBookingStatus(){
        return view('user.booking-status');
    }

    public function viewHistory(){
        return view('user.history-booking');
    }
}
