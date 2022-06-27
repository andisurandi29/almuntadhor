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
          <section class="section profile">
              <div class="card">
                <div class="card-body">
                  <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <img src="{{ asset('NiceAdmin/') }}/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                    <h5>{{ auth()->user()->name }}</h5>
                    <h5>{{ auth()->user()->username }}</h5>
                </div>
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">
    
                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Detail</button>
                  </li>
    
                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                  </li>
    
                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                  </li>
    
                </ul>
                <div class="tab-content pt-2">
    
                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
    
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><b>Nomor Induk Santri</b><br/>{{auth()->user()->username}}</li>
                      <li class="list-group-item"><b>Nama Lengkap</b><br/>{{auth()->user()->name}}</li>
                      <li class="list-group-item"><b>Tempat, Tanggal Lahir</b><br/> - </li>
                      <li class="list-group-item"><b>Alamat</b><br/> - </li>
                      <li class="list-group-item"><b>Angkatan</b><br/> - </li>
                      
                    </ul>
    
                  </div>
    
                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
    
                    <!-- Profile Edit Form -->
                    <form method="POST" action="{{route('profil-pengurus.update', $content->id)}}" enctype="multipart/form-data">
                      @method('PUT')
                      @csrf
                      <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Photo Profil</label>
                        <div class="col-md-8 col-lg-9">
                          <img src="{{ asset('NiceAdmin/') }}/assets/img/profile-img.jpg" alt="Profile">
                          <div class="pt-2">
                            <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="fas fa-upload"></i> Upload</a>
                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="fas fa-trash"></i> Reset</a>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">NIS</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="{{ auth()->user()->username }}" readonly>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="{{ auth()->user()->name }}">
                        </div>
                      </div>
    
                      <div class="row mb-3">
                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="company" type="text" class="form-control" id="company" value="">
                        </div>
                      </div>
    
                      <div class="row mb-3">
                        <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                        <div class="col-md-8 col-lg-9">
                          <textarea name="alamat" id="alamat" class="form-control"></textarea>
                        </div>
                      </div>
    
                      <div class="row mb-3">
                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="email" type="email" class="form-control" id="Email" value="{{ auth()->user()->email}}">
                        </div>
                      </div>
    
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                      </div>
                    </form><!-- End Profile Edit Form -->
    
                  </div>
    
    
                  <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    <form>
    
                      <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Password Lama</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="password" type="password" class="form-control" id="currentPassword">
                        </div>
                      </div>
    
                      <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Password Baru</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="newpassword" type="password" class="form-control" id="newPassword">
                        </div>
                      </div>
    
                      <div class="row mb-3">
                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Masukan Lagi Password Baru</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                        </div>
                      </div>
    
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Ubah Password</button>
                      </div>
                    </form><!-- End Change Password Form -->
    
                </div>
              </div>
            </div>
        </div>
      </section>
      </div>
    </div>
  </main>
  @include('pengurus.footer')
  @endsection

        