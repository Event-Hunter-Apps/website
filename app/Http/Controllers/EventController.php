<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\City;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::all();
        if ($event->isEmpty()) {
            
        }
        return view('event', [
            'events'=> $event,
        ]);
    }

    public function indexAdmin()
    {
        $events = Event::all();
        if ($events->isEmpty()) {
          
        }
        return view('admin2.events', [
            'events'=> $events,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cities = City::all();
        if ($cities->isEmpty()) {

        }
        return view('admin2.formEvent', [
            "method" => "POST",
            "action" => "admin/events/create",
            "cities" => $cities
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $validator = $request->validate([
            'nama'=>'required|string',
            'deskripsi' => 'required|string',
            'tanggal_mulai' => 'required',
            'tanggal_berakhir' => 'required',
            'waktu_event' => 'required|string',
            'lokasi' => 'required',
            'kota' => 'required'
        ]);

        $lokasi = $validator['lokasi'].", ".$validator['kota'];

        // dd($lokasi);
        $event = Event::create([
            'user_id'=>3,
            'nama'=>$validator['nama'],
            'deskripsi' => $validator['deskripsi'],
            'tanggal_mulai' => $validator['tanggal_mulai'],
            'tanggal_berakhir' => $validator['tanggal_berakhir'],
            'waktu_event' => $validator['waktu_event'],
            'lokasi' => $lokasi
        ]);
        
        return redirect('admin/events')->with('msg', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        if ($event->isEmpty()) {
            redirect('/admin/events')->with('msg', 'invalid id');
        }
        return view('tambahwisata2', [
            "method" => "PUT",
            "action" => "admin/events/$id/edit",
            "event" => $event
        ]);
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
        if ($event->isEmpty()) {
            redirect('/admin/events')->with('msg', 'invalid id');
        }
        $event->update($request->all());
        rediect('/admin/events')->with('msg', 'berhasil');
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
        if ($event->isEmpty()) {
            redirect('/admin/events')->with('msg', 'invalid id');
        }
        $event->delete();

        return redirect('/admin/events')->with('msg', 'Delete Berhasil');
    }
}
