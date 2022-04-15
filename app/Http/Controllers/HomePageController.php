<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class HomePageController extends Controller
{
    public function homepage() {
        $events = Event::take(10)->get();

        return view('landingPage', [
            "events" => $events
        ]);
    }
}
