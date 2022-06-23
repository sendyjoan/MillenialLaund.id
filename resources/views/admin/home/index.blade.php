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
  <!-- Row -->
  <div class="row">
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-12 col-xlg-9 col-md-7">
      <div class="card">
        <div class="card-body">
          <form class="form-horizontal form-material mx-2" method="POST" action="/update_profile" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label class="col-md-12 mb-0">Name</label>
              <div class="col-md-12">
                <input type="text" name="name" value="{{ Auth::user()->name }}" placeholder="Johnathan Doe"
                  class="form-control ps-0 form-control-line @error('name') is-invalid @enderror">
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-md-12">Email</label>
              <div class="col-md-12">
                <input type="email" readonly value="{{ Auth::user()->email }}"  placeholder="johnathan@admin.com"
                  class="form-control ps-0 form-control-line" name="email"
                  id="email">
              </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-md-12">Role</label>
                <div class="col-md-12">
                  <input type="email" readonly value="{{ Auth::user()->role->role }}" placeholder="johnathan@admin.com"
                    class="form-control ps-0 form-control-line" name="email"
                    id="email">
                </div>
            </div>
            

            <div class="form-group">
              <label class="col-md-12 mb-0">Alamat</label>
              <div class="col-md-12">
                <input type="text" name="alamat" value="{{ Auth::user()->alamat }}" 
                  class="form-control ps-0 form-control-line @error('alamat') is-invalid @enderror">
                  @error('alamat')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-12 mb-0">Jenis Kelamin</label>
              <div class="col-md-12">
                <input type="email" readonly value="{{ Auth::user()->jenis_kelamin }}" placeholder="johnathan@admin.com"
                    class="form-control ps-0 form-control-line" name="email"
                    id="email">

                @error('jenis_kelamin')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          
            <div class="form-group">
              <div class="col-sm-12 d-flex">
                <button type="submit" class="btn btn-success mx-auto mx-md-0 text-white">Update
                Profile </button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <form class="form-horizontal form-material mx-2" method="POST" action="/update_password" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label class="col-md-12 mb-0">Password Baru</label>
              <div class="col-md-12">
                <input type="password" name="password" placeholder="Password"
                  class="form-control ps-0 form-control-line @error('password') is-invalid @enderror">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12 mb-0">Password Konfirmasi</label>
              <div class="col-md-12">
                <input type="password" name="password_confirmation" placeholder="Password confirmation"
                  class="form-control ps-0 form-control-line @error('password_confirmation') is-invalid @enderror">
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-12 d-flex">
                <button type="submit" class="btn btn-primary mx-auto mx-md-0 text-white">Update
                Password </button>
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