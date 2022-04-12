<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Event;
class ApiEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return response([
            "message"=>"success get all events",
            "events"=>$events,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = Event::create($request->all());
        return response([
            "message"=>"success create event",
            "event" => $event,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        if (!$event) {
            return response([
                "message"=>"invalid id",
            ], 400);
        }
        return response([
            "message"=>"sucess get event",
            "event"=>$event,
        ], 200);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        if (!$event) {
            return response([
                "message"=>"invalid id",
            ], 400);
        }
        $event->update($request->all());
        return response([
            "message"=>"success update event",
            "event"=> $event,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        if (!$event) {
            return response([
                "message"=>"invalid id",
            ], 400);
        }
        $event->delete();
        return response([
            "message"=>"success delete event",
            "event"=>$event,
        ], 200);
    }
}
