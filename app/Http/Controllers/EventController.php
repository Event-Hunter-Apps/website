<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\City;
use App\Models\Kategori;
use App\Models\Tiket;
use Illuminate\Http\File;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        if(request('search')) {
            $events->where('title','like','%'.request('search').'%');
        }
        if ($events->isEmpty()) {
            
        }
        $cities = City::all();
        return view('events', [
            'events'=> $events,
            'cities'=>$cities,
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
        $categories = Kategori::all();
        if ($cities->isEmpty()) {

        }
        return view('admin2.formAddEvent', [
            "method" => "POST",
            "action" => "admin/events/create",
            "cities" => $cities,
            "categories" => $categories
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
            'jam_buka' => 'required',
            'jam_tutup' => 'required',
            'lokasi' => 'required',
            'kota' => 'required',
            'harga' => 'required',
            // 'image_upload' => 'required',
            'kategori_id' => 'required',
            'nama_tiket' => 'required',
            'harga_tiket' => 'required',
            'deskripsi_tiket' => 'required',
            'image_upload' => 'required|image|mimes:jpeg,jpg,png',
        ]);
        // dd("test");
        if($request->hasFile('image_upload')) {
            $validator["image_upload"] = $request->file('image_upload')->store('images');

            // dd($dest_path, $path);
        }

        // dd($lokasi);
        $event = Event::create([
            'user_id'=> auth()->user()->id,
            'nama'=> $validator['nama'],
            'deskripsi' => $validator['deskripsi'],
            'tanggal_mulai' => $validator['tanggal_mulai'],
            'tanggal_berakhir' => $validator['tanggal_berakhir'],
            'jam_buka' => $validator['jam_buka'],
            'jam_tutup' => $validator['jam_tutup'],
            'lokasi' => $validator['lokasi'],
            'kota' => $validator['kota'],
            'harga' => $validator['harga'],
            'image' => $validator["image_upload"]
        ]);
        
        $tiket = Tiket::create([
            'event_id' => $event->id,
            'kategori_id' => $validator['kategori_id'],
            'nama' => $validator['nama_tiket'],
            'deskripsi' => $validator['deskripsi_tiket'],
            'harga' => $validator['harga_tiket'],
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
        
        $event = Event::find($id);
   
        return view('detailevent2', [
            "event" => $event
        ]);
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
        
        $cities = City::all();
        return view('admin2.formEditEvent', [
            "method" => "PUT",
            "action" => "admin/events/$id",
            "event" => $event,
            "cities" => $cities
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
        $validator = $request->validate([
            'nama'=>'required|string',
            'deskripsi' => 'required|string',
            'tanggal_mulai' => 'required',
            'tanggal_berakhir' => 'required',
            'jam_buka' => 'required',
            'jam_tutup' => 'required',
            'lokasi' => 'required',
            'kota' => 'required',
            'harga' => 'required',
            'image_upload' => 'required|image|mimes:jpeg,jpg,png',
        ]);
        $event->update($request->all());
        return redirect('/admin/events')->with('msg', 'berhasil');
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

        $event->delete();

        return redirect('/admin/events')->with('msg', 'Delete Berhasil');
    }
}
