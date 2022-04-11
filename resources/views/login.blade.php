@extends('layouts.main')
<!-- container -->
@section('container')
<!-- Navbar -->
@include('umum.navbar')
<!-- Sidebar -->
@include('umum.sidebar')

        <!-- content -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-default-light text-white me-2">
                  <i class="fas fa-arrow-circle-left"></i>
                </span> Login
              </h3>
             
            </div>
            <div class="card">
            <div class="card-body">
          <div class="row">
            <div class="col-md-6">
                 <h3>Selamat Datang Di</h3>
                <p><small>Aplikasi Walisantri Ponpes Al Muntadhor</small></p>
                  <img src="{!! asset('assets/images/dashboard/img_3.jpg') !!}" alt="" width="90%">
            </div>
            <div class="col-md-6">
                <p class="card-title" style="margin-bottom: 20px;">LOGIN</p>
                <p><small>Silahkan Login untuk melanjutkan</small></p>
                <form action="/login" method="post">
                  @csrf
                <ul>
                    <li>
                      <label for="username">Username</label></li>
                      <input class="form-control @error('nis') is-invalid @enderror" type="text" name="username" id="username" placeholder="Masukan NIS" required value="{{ old('nis') }}" style="margin-top: 10px; margin-bottom: 10px">
                      @error('nis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    <li>
                      <label for="password">Password</label></li>
                      <input class="form-control" type="text" name="password" id="password" placeholder="Masukan Password" required style="margin-top: 10px">
                    
                </ul>
                <div href="/dashboard" class="text-center">
                <button type="submit" class="btn btn-primary">Login</button>
                </div>
                </form>
            </div>
          </div>
          </div>
        </div>
    </div>
          <!-- selesai content -->
          <!-- Footer -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
  

        </div>
      </div>
   