<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Patient;
use App\Models\TestBooking;
use App\Models\TestCategory;
use App\Models\TestCenter;
use App\Models\Document;
use App\Models\TestType;

class FrontendController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

}
