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
        // dd('ok');
        $request->validate([
            'name' => 'required',
            'alamat' => 'required',
        ]);

        User::where('id', auth()->user()->id)
            ->update([
                'name' => $request->name,
                'alamat' => $request->alamat,
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
        
        return redirect('/home')->with('success', 'Password successfully changed at '.Carbon::now());
    }
    
}
