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
        <a href="/mesin"
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
          <form class="form-horizontal form-material mx-2" method="POST" action="/mesin">
            @csrf
            <div class="form-group">
              <label class="col-md-12 mb-0">Nama</label>
              <div class="col-md-12">
                <input type="text" name="nama" placeholder="nama"
                  class="form-control ps-0 form-control-line @error('nama') is-invalid @enderror" value="{{ old('nama') }}">

                @error('nama')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-12 mb-0">Cabang ID</label>
              <div class="col-md-12">
                <input type="text" name="cabang_id" placeholder="cabang_id"
                  class="form-control ps-0 form-control-line @error('cabang_id') is-invalid @enderror" value="{{ old('cabang_id') }}">

                @error('cabang_id')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12 mb-0">Kapasitas</label>
              <div class="col-md-12">
                <input type="text" name="kapasitas" placeholder="kapasitas"
                  class="form-control ps-0 form-control-line @error('kapasitas') is-invalid @enderror" value="{{ old('kapasitas') }}">

                @error('kapasitas')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12 mb-0">Kode</label>
              <div class="col-md-12">
                <input type="text" name="kode" placeholder="kode"
                  class="form-control ps-0 form-control-line @error('kode') is-invalid @enderror" value="{{ old('kode') }}">

                @error('kode')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12 mb-0">Harga</label>
              <div class="col-md-12">
                <input type="text" name="harga" placeholder="harga"
                  class="form-control ps-0 form-control-line @error('harga') is-invalid @enderror" value="{{ old('harga') }}">

                @error('harga')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12 mb-0">Status</label>
              <div class="col-md-12">
                <input type="text" name="status" placeholder="status"
                  class="form-control ps-0 form-control-line @error('status') is-invalid @enderror" value="{{ old('status') }}">

                @error('status')
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