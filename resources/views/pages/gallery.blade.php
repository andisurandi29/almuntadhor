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
                </span> Gallery
              </h3>
            </div>
            <div class="alert alert-info" role="alert">
              Anda berada diportal informasi umum ! Silahkan <a href="/login">Login</a> untuk melanjutkan !
            </div>
            @foreach($tampilContent as $gallery)
          <div class="row">
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body" style="margin-bottom: 20px">
                  <img src="{{ URL::to('/')}}/content/{{ $gallery->gambar }}" class="card-img-top" alt="...">
                  <h5>{{ $gallery->judul }}</h5>
                  <span ><small >{{ $gallery->deskripsi }}</small></span>
                </div>
            </div>
          </div>
          <!-- <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body" style="margin-bottom: 20px">
                <img src="{!! asset('assets/images/dashboard/img_3.jpg') !!}" alt="" width="100%" style="margin-bottom: 10px; margin-top:10px">
                <h5>Judul Foto/Video</h5>
                <span ><small >20/01/2022</small></span>
            </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body" style="margin-bottom: 20px">
                <img src="{!! asset('assets/images/dashboard/img_3.jpg') !!}" alt="" width="100%" style="margin-bottom: 10px; margin-top:10px">
                <h5>Judul Foto/Video</h5>
                <span ><small >20/01/2022</small></span>
            </div>
            </div> -->
          </div>
          @endforeach
          </div>
          <!-- selesai content -->
          <!-- Footer -->
         @include('umum.footer')
        </div>
      </div>
   