@extends('admin.layouts.main')
@section('content')
<div class="page-breadcrumb">
  <div class="row align-items-center">
    <div class="col-md-6 col-8 align-self-center">
      <h3 class="page-title mb-0 p-0">Table</h3>
      <div class="d-flex align-items-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Table</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="col-md-6 col-4 align-self-center">
      <div class="text-end upgrade-btn">
        <a href="/mesin/create"
          class="btn btn-success d-none d-md-inline-block text-white">Tambah Data</a>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">

  @if(session('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
  @endif
  @if(session('danger'))
    <div class="alert alert-danger">
      {{session('danger')}}
    </div>
  @endif

  <div class="row">
    <!-- column -->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Basic Table</h4>
          <h6 class="card-subtitle">Add class <code>.table</code></h6>
          <div class="table-responsive">
            <table class="table user-table no-wrap">
              <thead>
                <tr>
                  <th class="border-top-0">No</th>
                  <th class="border-top-0">Nama</th>
                  <th class="border-top-0">Cabang ID</th>
                  <th class="border-top-0">Kapasitas</th>
                  <th class="border-top-0">Kode</th>
                  <th class="border-top-0">Harga</th>
                  <th class="border-top-0">Status</th>
                  <th class="border-top-0">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                  <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->cabang_id }}</td>
                    <td>{{ $item->kapasitas }}</td>
                    <td>{{ $item->kode }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                      @if ($item->status == 'tersedia')
                        <form action="/mesin/{{ $item->id }}/tersedia" onsubmit="return confirm('Apakah anda yakin akan mengubah data?')" method="POSt">
                          @csrf
                          @method('PUT')

                          {{-- <a href="/mesin/{{ $item->id }}/edit" class="btn btn-info btn-sm text-light">Edit</a> --}}
                          <button type="submit" class="btn btn-success btn-sm text-light">{{ $item->status }}</button>
                        </form>
                      @else
                        <form action="/mesin/{{ $item->id }}/untersedia" onsubmit="return confirm('Apakah anda yakin akan mengubah data?')" method="POSt">
                          @csrf
                          @method('PUT')

                          {{-- <a href="/mesin/{{ $item->id }}/edit" class="btn btn-info btn-sm text-light">Edit</a> --}}
                          <button type="submit" class="btn btn-warning btn-sm text-light">{{ $item->status }}</button>
                        </form>
                      @endif
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection