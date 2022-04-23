@extends('admin.main')
  <!-- container -->
  @section('container')
  <!-- Navbar -->
  @include('admin.navbar')
  <!-- Sidebar -->
  @include('admin.sidebar')
  <div class="content-wrapper">
    <div class="card shadow">
        <div class="card-body">
            <div class="text-center display-4">
                Edit Data Santri
            </div>
            <form method="POST" action="{{route('data-akun.update', $accounts->id)}}">
                @method('PUT')
                @csrf
                <input type="hidden" name="id" value="{{$accounts->id}}">
                  <div class="mb-3">
                    <label for="" class="form-label">Nama Lengkap</label>
                    <input name="name" value="{{$accounts->name}}" type="text" class="form-control" placeholder="Masukkan NIS Santri">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Username</label>
                    <input name="username" value="{{$accounts->username}}" type="text" class="form-control" placeholder="Masukkan nama lengkap santri">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Level</label>
                    <input name="level" value="{{$accounts->level}}" type="text" class="form-control" placeholder="Masukkan tanggal lahir">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input name="email" value="{{$accounts->email}}" type="email" class="form-control" placeholder="Masukkan angkatan">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input name="password" value="{{$accounts->password}}" type="password" class="form-control" placeholder="Masukkan alamat lengkap">
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
  </div>

  @include('admin.footer')
  @endsection

        