@extends('pengurus.main')
  <!-- container -->
  @section('pengurus')
  <!-- Navbar -->
  @include('pengurus.navbar')
  <!-- Sidebar -->
  @include('pengurus.sidebar')
  <main id="main" class="main">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-default-light text-white me-2">
            <i class="fas fa-arrow-circle-left"></i>
        </span> Akun Saya
      </h3>
    </div>
    <div class="content-wrapper">

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> Account</h4>

                  <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form action="{{ route('akun-saya.update', $akun->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                        <input type="hidden" name="old_image" value="{{$akun->foto}}">
                        <div class="mb-3">
                          <label for="foto" class="form-label">Gambar</label>
                          <input type="file" name="foto" id="foto" class="form-control @error('foto') is-invalid @enderror" required>
                          <img src="{{ URL::to('/')}}/profil/{{ $akun->foto }}" class="img-thumbnail" height="10%" width="50%"></img>
                          <input type="hidden" class="form-control-file mt-3" name="old_image" value="{{auth()->user()->foto}}">
                        </div>
                          <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input class="form-control" type="text" id="name" name="name" value="{{auth()->user()->name}}" autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="username" class="form-label">NIS</label>
                            <input class="form-control" type="text" name="username" id="username" value="{{auth()->user()->username}}" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="level" class="form-label">Level</label>
                            <input class="form-control" name="level" type="text" id="level" value="{{auth()->user()->level}}" readonly/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="text" id="email" name="email" value="{{auth()->user()->email}}"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Kelas</label>
                            <input class="form-control" name="kelas" type="text" id="kelas" value="{{auth()->user()->kelas}}" readonly/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Tanggal Lahir</label>
                            <input class="form-control" name="tgl_lahir" type="date" id="tgl_lahir" value="{{auth()->user()->tgl_lahir}}"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Alamat</label>
                            <input class="form-control" name="alamat" type="text" id="alamat" value="{{auth()->user()->alamat}}"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Telepon</label>
                            <input class="form-control" name="no_hp" type="text" id="no_hp" value="{{auth()->user()->no_hp}}"/>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Update</button>
                          <button type="reset" class="btn btn-outline-secondary">Batal</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>

                  @if(Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ Session::get('success') }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  @endif

                  @if(Session::get('failed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{ Session::get('failed') }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  @endif

                  <div class="card">
                    <h5 class="card-header">Ubah Password</h5>
                    <div class="card-body">
                      <form action="{{ route('password-pengurus', $akun->id)}}" method="POST">
                        @method('PUT')  
                        @csrf
                        <div class="row">
                        <div class="mb-3 col-md-6">
                          <label for="password_lama">Password Lama</label>
                        <input type="password" name="old_password" class="form-control" id="old_password" placeholder="Masukan Password Lama">
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="password_baru">Password Baru</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukan Password Baru">
                        @error('password') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="password_baru">Konfirmasi Password Baru</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Masukan Password Baru">
                        </div>
                      </div>
                    </div>
                        <button type="submit" class="btn btn-primary deactivate-account">Ubah Password</button>
                      </form>
                  </div>
            </div>
        </div>
  </div>
</div>
  @include('pengurus.footer')
  @endsection

        