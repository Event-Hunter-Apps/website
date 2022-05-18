<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
class UserController extends Controller
{
    /**
     * Restu Aditya Rachman - 1301190433 
     * Menampilkan data list user yang memiliki role id 2, 3 
     * (eo dan customer) ke tampilan daftar user
     * 
     * @return Mengirimkan data list user ke tampilan admin2.users
     */
    public function index()
    {
        $users = User::whereIn('role_id', [2,3])->get();
        // dd($users);
        return view('admin2.users', [
            'users' => $users,
        ]);
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
        //
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Restu Aditya Rachman - 1301190433 
     * Menghapus user yang memiliki id = $id pada database .
     *
     * @param  int  $id adalah id dari user
     * @return melakukan redirect ke /admin/users dengan msg
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/users')->with('msg', 'Delete Berhasil');
    }
}
