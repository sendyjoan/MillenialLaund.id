<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $data = booking::all();
        return view('admin.booking.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.booking.create');
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
            'user_id' => 'required',
            'perlengkapan_id' => 'required',
            'mesin_id' => 'required',
            'tgl_booking' => 'required',
            'total_transaksi' => 'required',
        ]);

        booking::create([
            'user_id' => $request->user_id,
            'perlengkapan_id' => $request->perlengkapan_id,
            'mesin_id' => $request->mesin_id,
            'tgl_booking' => $request->tgl_booking,
            'total_transaksi' => $request->total_transaksi
        ]);

        return redirect('/admin/booking')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = booking::where('id', $id)->first();
        return view('admin.booking.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = booking::where('id', $id)->first();
        return view('admin.booking.edit', compact('data'));
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
            'user_id' => 'required',
            'perlengkapan_id' => 'required',
            'mesin_id' => 'required',
            'tgl_booking' => 'required',
            'total_transaksi' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        booking::where('id', $id)->update([
            'user_id' => $request->user_id,
            'perlengkapan_id' => $request->perlengkapan_id,
            'mesin_id' => $request->mesin_id,
            'tgl_booking' => $request->tgl_booking,
            'total_transaksi' => $request->total_transaksi
        ]);

        return redirect('/admin/booking')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        booking::where('id', $id)->delete();
        return redirect('/admin/booking')
                    ->with('success', 'Data Berhasil dihapus!');
    }
}
