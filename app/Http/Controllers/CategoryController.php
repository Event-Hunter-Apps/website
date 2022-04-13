<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $req) {
        $validator = $request->validate([
            'nama'=>'required|string',
        ]);

        // dd($lokasi);
        $event = Event::create([
            'nama'=> $validator['nama'],
        ]);
        
        return redirect('admin/events/create')->with('msg', 'success');
    }
}
