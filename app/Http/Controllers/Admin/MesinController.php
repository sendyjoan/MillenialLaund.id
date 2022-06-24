<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\mesinlaundry;
use Illuminate\Http\Request;

class MesinController extends Controller
{
    public function index()
    {
        $data = mesinlaundry::all();
        return view('admin.mesinlaundry.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mesinlaundry.create');
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
            'nama' => 'required',
            'cabang_id' => 'required',
            'kapasitas' => 'required',
            'kode' => 'required',
            'harga' => 'required',
            'status' => 'required',
        ]);

        mesinlaundry::create([
            'nama' => $request->nama,
            'cabang_id' => $request->cabang_id,
            'kapasitas' => $request->kapasitas,
            'kode' => $request->kode,
            'harga' => $request->harga,
            'status' => $request->status
        ]);

        return redirect('/mesin')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = mesinlaundry::where('id', $id)->first();
        return view('admin.mesinlaundry.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = mesinlaundry::where('id', $id)->first();
        return view('admin.mesinlaundry.edit', compact('data'));
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
            'nama' => 'required',
            'cabang_id' => 'required',
            'kapasitas' => 'required',
            'kode' => 'required',
            'harga' => 'required',
            'status' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        mesinlaundry::where('id', $id)->update([
            'nama' => $request->nama,
            'cabang_id' => $request->cabang_id,
            'kapasitas' => $request->kapasitas,
            'kode' => $request->kode,
            'harga' => $request->harga,
            'status' => $request->status
        ]);

        return redirect('/mesin')->with('success', 'Data berhasil diubah!');
    }

    public function tersedia(Request $request, $id)
    {
        mesinlaundry::where('id', $id)->update([
            'status' => 'tidak tersedia'
        ]);

        return redirect('/mesin')->with('success', 'Data berhasil diubah!');
    }

    public function untersedia(Request $request, $id)
    {
        mesinlaundry::where('id', $id)->update([
            'status' => 'tersedia'
        ]);

        return redirect('/mesin')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mesinlaundry::where('id', $id)->delete();
        return redirect('/cabang')
                    ->with('success', 'Data Berhasil dihapus!');
    }
}
