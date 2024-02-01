<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    function index(){
        $events = Event::all();

        return view("welcome", ['events' => $events]);
    }

    function createEvent(){
        return view("welcome");
    }
}
