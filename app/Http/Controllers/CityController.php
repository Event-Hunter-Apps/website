<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        if ($cities->isEmpty()) {
            
        }
        return view('admin2.cities', [
            'cities'=> $cities,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin2.formCity', [
            "title" => "Create",
            "method" => "POST",
            "action" => "admin/cities/create"
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
            'name'=> 'required|string|unique:cities'
        ]);

        $city = City::create([
            'name'=>$validator['name'],
        ]);
        
        return redirect('admin/cities')->with('msg', 'success');
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
        $city = City::find($id);
       
        return view('admin2.formCity', [
            "title" => "Edit",
            "method" => "PUT",
            "action" => "admin/cities/$id",
            "city" => $city,
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
        $city = City::find($id);
        // if ($city->isEmpty()) {
        //     redirect('/admin/cities')->with('msg', 'invalid id');
        // }
        $city->update($request->all());
        return redirect('/admin/cities')->with('msg', 'berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::find($id);
      
        $city->delete();

        return redirect('/admin/cities')->with('msg', 'Deleted');
    }
}
