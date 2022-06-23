<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = User::all();
        return view('admin.user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = role::all();
        return view('admin.users.create',['role'=>$role]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'email'=>'required',
            'role_id'=>'required',
            'password'=>'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
            'nomer_hp'=>'required',
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => $request->password,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomer_hp' => $request->nomer_hp
        ]);
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('admin.user.index')
        ->with('success','Pelanggan Berhasil Ditambahakan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::where('id', $id)->first();
        return view('admin.user.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::where('id', $id)->first();
        return view('admin.user.edit', compact('data'));
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
        $request->validate([
            'username'=>'required',
            'email'=>'required',
            'role_id'=>'required',
            'password'=>'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
            'nomer_hp'=>'required',
        ]);

        User::where('id', $id)->update([
            'username' => $request->username,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => $request->password,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomer_hp' => $request->nomer_hp
        ]);
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('admin.user.index')
        ->with('success','Pelanggan Berhasil Ditambahakan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect('/admin/user')
                    ->with('success', 'Data Berhasil dihapus!');
    }
}
