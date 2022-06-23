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
        <a href="/booking"
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
          <form class="form-horizontal form-material mx-2" method="POST" action="/booking">
            @csrf
            <div class="form-group">
              <label class="col-md-12 mb-0">BOOKING</label>
              <div class="col-md-12">
                <input type="text" name="booking" placeholder="booking"
                  class="form-control ps-0 form-control-line @error('booking') is-invalid @enderror" value="{{ old('booking') }}">

                @error('booking')
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