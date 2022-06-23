<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\cabang;
use App\Models\perlengkapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = perlengkapan::all();
        return view('admin.perlengkapan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.perlengkapan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd($request->all());
        $request->validate([
            'name'=>'required',
            'jumlah'=>'required',
            'harga'=>'required',
            'foto' => 'required'
        ]);

        if($request->file('foto')){
            $image_name=$request->file('foto')->store('foto','public');
        }

        $product = new perlengkapan();
        $product->nama = $request->get('name');
        $product->jumlah = $request->get('jumlah');
        $product->harga = $request->get('harga');
        $product->foto = $image_name;
        $product->save();
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->to('/product')
        ->with('success','Produk Berhasil Ditambahakan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = perlengkapan::where('id', $id)->first();
        return view('admin.perlengkapan.index', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = perlengkapan::where('id', $id)->first();
        return view('admin.perlengkapan.edit', compact('item'));
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
            'name'=>'required',
            'jumlah'=>'required',
            'harga'=>'required',
            'foto' => 'required'
        ]);

        if($request->image && file_exists(storage_path('app/public/'. $request->image))) {
            Storage::delete('public/' . $request->image);
        }

        $name_foto = null;

        if($request->file('foto')){
            $name_foto = $request->file('foto')->store('foto','public');
        }

        perlengkapan::where('id', $id)->update([
            'nama' => $request->name,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'foto' => $name_foto
        ]);
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->to('/product')
        ->with('success','Product Berhasil Ditambahakan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        perlengkapan::where('id', $id)->delete();
        return redirect()->to('/product')
                    ->with('success', 'Berhasi menghapus');
    }
}
