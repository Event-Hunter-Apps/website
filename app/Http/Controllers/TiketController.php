<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\Event;
use App\Models\Kategori;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($event_id)
    {
        $event = Event::find($event_id);
        $tikets = Tiket::where('event_id','=' ,$event_id)->get();
        // dd($tikets);
        return view("admin2.tikets", [
            "tikets" => $tikets,
            "event" => $event,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($eid)
    {
        $event = Event::find($eid);

        $categories = Kategori::all();
        $kategoriname = Kategori::all();

        return view("admin2.formTiket", [
            'title' => 'Form Tambah Tiket',
            'action' => "admin/events/$eid/tikets/create",
            'method' => 'POST',
            'categories' => $categories,
            'event' => $event
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $eid)
    {
      

        $validator = $request->validate([
            "kategori" => 'required',
            "nama" => 'required', 
            "deskripsi" => 'required',
            "harga" => 'required'
        ]);

        $tiket = Tiket::Create([
            'event_id' => $eid,
            'kategori_id' => $validator['kategori'],
            'nama' => $validator['nama'],
            'deskripsi' => $validator['deskripsi'],
            'harga' => $validator['harga']
        ]);

        return redirect("admin/events/$eid/tikets");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($eid, $tiket_id)
    {
        $event = Event::find($eid);
        $tiket = Tiket::find($tiket_id);

        $categories = Kategori::all();
        $kategoriname = Kategori::find($tiket->kategori_id);
        $tiket->kategori_id = $kategoriname->nama;

        return view("admin2.formTiket", [
            'title' => 'Form Edit Tiket',
            'action' => "admin/events/$eid/tikets/$tiket_id",
            'method' => 'PUT',
            'categories' => $categories,
            'tiket' => $tiket,
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $event_id, $tiket_id)
    {

        $tiket = Tiket::find($tiket_id);
        $tiket->update($request->all());
        return redirect("/admin/events/$event_id/tikets")->with('msg', 'berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($event_id, $tiket_id)
    {
        $tiket = Tiket::find($tiket_id);

        $tiket->delete();

        return redirect("/admin/events/$event_id/tikets")->with('msg', 'Delete Berhasil');
    }
}
