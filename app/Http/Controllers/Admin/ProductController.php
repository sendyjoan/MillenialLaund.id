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
        $cabang = cabang::all();
        return view('admin.product.create',['cabang'=>$cabang]);
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
            'Name'=>'required',
            'jumlah'=>'required',
            'harga'=>'required',
         
        ]);

        if($request->file('foto')){
            $image_name=$request->file('Image')->store('images','public');
        }

        $product = new perlengkapan();
        $product->name = $request->get('Name');
        $product->jumlah = $request->get('jumlah');
        $product->harga = $request->get('harga');
        $product->image = $image_name;
        //fungsi eloquent untuk menambahkan data
        $cabang = new cabang();
        $cabang->id = $request->get('cabang');

        $product->cabang()->associate($cabang);
        $product->save();
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('admin.product.index')
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
        return view('admin.product.index', compact('item'));
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
        $category = cabang::all();
        return view('admin.product.edit', compact('item','cabang'));
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
            'Name'=>'required',
            'jumlah'=>'required',
            'harga'=>'required',
           
        ]);

        if($request->image && file_exists(storage_path('app/public/'. $request->image))) {
            Storage::delete('public/' . $request->image);
        }

        $name_image = null;

        if($request->file('foto')){
            $name_foto = $request->file('foto')->store('foto','public');
        }

        perlengkapan::where('id', $id)->update([
            'name' => $request->Name,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'foto' => $name_image
        ]);
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->to('/admin/product')
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
        return redirect()->route('admin.product.index')
                    ->with('success', 'Berhasi menghapus');
    }
}
