<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Models\City;
use App\Models\Checkout;
class HomePageController extends Controller
{
    public function homepage() {
        $events = Event::take(10)->get();
    
        return view('landingPage', [
            "events" => $events
        ]);
    }

    public function homepageAdmin() {
        return view('admin2.landingpageadmin', [
            'event' => Event::all()->count(),
            'user' => User::where('role_id','!=',1)->count(),
            'city' => City::all()->count(),
            'checkout' => Checkout::all()->count()
        ]);
    }
}
