@extends('admin.layouts.main')

@section('content')
<div class="page-breadcrumb">
  <div class="row align-items-center">
    <div class="col-md-6 col-8 align-self-center">
      <h3 class="page-title mb-0 p-0">Profile</h3>
      <div class="d-flex align-items-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="col-md-6 col-4 align-self-center">
      <div class="text-end upgrade-btn">
        <a href="/product"
          class="btn btn-success d-none d-md-inline-block text-white">Kembali</a>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <!-- Row -->
  <div class="row">
    <!-- Column -->
    <div class="col-lg-12 col-xlg-9 col-md-7">
      <div class="card">
        <div class="card-body">
          <form class="form-horizontal form-material mx-2" method="POST" enctype="multipart/form-data" action="/product/{{ $item->id }}">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label class="col-md-12 mb-0">Nama</label>
              <div class="col-md-12">
                <input type="text" name="name" placeholder="name" 
                  class="form-control ps-0 form-control-line @error('name') is-invalid @enderror" value="{{ $item->nama }}">

                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-12 mb-0">Jumlah</label>
              <div class="col-md-12">
                <input type="number" name="jumlah" placeholder="jumlah"
                  class="form-control ps-0 form-control-line @error('jumlah') is-invalid @enderror" value="{{ $item->jumlah }}">

                @error('jumlah')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12 mb-0">Harga</label>
              <div class="col-md-12">
                <input type="number" name="harga" placeholder="harga"
                  class="form-control ps-0 form-control-line @error('harga') is-invalid @enderror" value="{{ $item->harga }}">

                @error('harga')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12 mb-0">Foto</label>
              <div class="col-md-12">
                <input type="file" name="foto" placeholder="foto"
                  class="form-control ps-0 form-control-line @error('foto') is-invalid @enderror" value="{{ $item->foto }}">

                @error('foto')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-12 d-flex">
                <button type="submit" class="btn btn-success mx-auto mx-md-0 text-white">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Column -->
  </div>
</div>
@endsection