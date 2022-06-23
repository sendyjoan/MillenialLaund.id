<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }
    public function update_profile(Request $request){
        // ddd($request->all());
        $request->validate([
            'username' => 'required',
            'name' => 'required',
            'email' => 'required',
            'role_id' => 'required',
            'password' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'nomer_hp' => 'required',
        ]);

        User::where('id', auth()->user()->id)
            ->update([
                'username' => $request->username,
                'name' => $request->name,
                'role_id' => $request->role_id,
                'password' => $request->password,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'nomer_hp' => $request->nomer_hp,
            ]);

        return redirect()->back()
                         ->with('success', 'Profile successfully changed at '. Carbon::now());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_password(Request $request){
        $request->validate([
            'password' => 'required|min:6',
            'password_confirmation' => 'same:password|min:6'
        ]);
        
        User::where('id', auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);
        
        return redirect('/admin/home')->with('success', 'Password successfully changed at '.Carbon::now());
    }
    
}
