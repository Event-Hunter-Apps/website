<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\Event;
use App\Models\Kategori;

class TiketController extends Controller
{
    /**
     * Restu Aditya Rachman - 1301190433 
     * Menampilkan data list tiket yang dimiliki oleh event_id = @param $event_id 
     * ke tampilan admin daftar event
     * 
     * @param $event_id adalah id dari event
     * @return Mengirimkan data list tiket ke tampilan admin2.tikets
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
     * Restu Aditya Rachman - 1301190433 
     * Menampilkan form untuk menambakan ticket
     * 
     * @param int $eid adalah id dari event 
     * @return Mengirimkan data untuk post ke tampilan admin2.formTiket
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
     * Restu Aditya Rachman - 1301190433 
     * Menyimpan data tiket pada database
     *
     * @param   $request adalah data tiket yang akan disimpan
     *          int $eid adalah int $eid adalah id event dari ticket yang ingin ditambahkan
     * @return  jika berhasil, redirect ke admin/events/$eid/tikets
     *          jika gagal, tidak terjadi apa apa
     */
    public function store(Request $request, $eid)
    {
        $validator = $request->validate([
            "kategori" => 'required',
            "nama" => 'required', 
            "deskripsi" => 'required',
            "harga" => 'required|integer'
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
     * Restu Aditya Rachman - 1301190433 
     * Menampilkan tiket yang tertentu.
     *
     * @param  int  $id adalah id tiket yang ingin ditampilkan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Restu Aditya Rachman - 1301190433 
     * Menampilkan form untuk edit ticket
     * 
     * @param   int $eid adalah id dari event
     *          int $ticket_id adalah id dari tiket 
     * @return Mengirimkan data untuk put ke tampilan admin2.formTiket
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
     * Restu Aditya Rachman - 1301190433 
     * Memperbarui data yang ditentukan tiket pada database
     *
     * @param   $request adalah data tiket yang akan disimpan
     *          int $eid adalah id event dari ticket
     *          int $ticket_id adalah id ticket yang ingin di update
     * @return  jika berhasil, redirect ke admin/events/$eid/tikets
     *          jika gagal, tidak terjadi apa apa
     */
    public function update(Request $request, $event_id, $tiket_id)
    {

        $tiket = Tiket::find($tiket_id);
        // dd($request->all());
        $tiket->update($request->all());
        return redirect("/admin/events/$event_id/tikets")->with('msg', 'berhasil');
    }

    /**
     * Restu Aditya Rachman - 1301190433 
     * Menghapus ticket yang ditentukan pada database
     *
     * @param   int $event_id adalah id dari event yang ingin dihapus
     *          int $ticket_id adalah id dari tiket yang ingin dihapus
     * 
     * @return redirect ke /admin/events/$event_id/tikets dengan message
     */
    public function destroy($event_id, $tiket_id)
    {
        $tiket = Tiket::find($tiket_id);

        $tiket->delete();

        return redirect("/admin/events/$event_id/tikets")->with('msg', 'Delete Berhasil');
    }
}
