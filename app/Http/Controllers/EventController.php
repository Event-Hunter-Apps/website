<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\City;
use App\Models\Kategori;
use App\Models\Tiket;
use Illuminate\Http\File;
use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Exception\FirebaseException;
use Goggle\Cloud\Firestore\FirestoreClient;
use Session;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {   
        $events = Event::latest()->filter(request(['nama', 'kota']))->get();
        return view('events', [
            'events'=> $events,
            'cities'=> City::all(),
        ]);
    }

    public function indexAdmin()
    {
        $events = Event::all();
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
            'kategori_id' => 'required',
            'nama_tiket' => 'required',
            'harga_tiket' => 'required',
            'deskripsi_tiket' => 'required',
            'image_upload' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);
    
        if($request->hasFile('image_upload')) {
            $image = $request->file('image_upload'); //image file from frontend
            $firebase_storage_path = 'Events/';
            $localfolder = public_path('firebase') .'/';
            $extension = $image->getClientOriginalExtension();
            $file      = time(). '.' . $extension;
            if ($image->move($localfolder, $file)) {
                $uploadedfile = fopen($localfolder.$file, 'r');
                app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
                unlink($localfolder . $file);
            }
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
            'image' => $firebase_storage_path . $file
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
        if ($event != null) {
            return view('detailEvent', [
                "title" => $event->nama,
                "event" => $event
            ]);
        }
        return redirect('events');
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
            'image_upload' => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if($request->hasFile('image_upload')) {
            $image = $request->file('image_upload'); //image file from frontend
            $firebase_storage_path = 'Events/';
            $localfolder = public_path('firebase') .'/';
            $extension = $image->getClientOriginalExtension();
            $file      = time(). '.' . $extension;
            if ($image->move($localfolder, $file)) {
                $uploadedfile = fopen($localfolder.$file, 'r');
                app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
                unlink($localfolder . $file);
            }
        }
        $event->nama = $validator["nama"];
        $event->deskripsi = $validator["deskripsi"];
        $event->tanggal_mulai = $validator["tanggal_mulai"];
        $event->tanggal_berakhir = $validator["tanggal_berakhir"];
        $event->jam_buka = $validator["jam_buka"];
        $event->jam_tutup = $validator["jam_tutup"];
        $event->lokasi = $validator["lokasi"];
        $event->kota = $validator["kota"];
        $event->harga = $validator["harga"];
        $event->image = $firebase_storage_path . $file;
        $event->save();
        
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
    
    public function tiket($id) {
        $tikets = Tiket::where('event_id', $id)->get();
        $event = Event::find($id);
        return view('eventTikets', [
            "tikets" => $tikets,
            "event" => $event
        ]);
    }

    
}
