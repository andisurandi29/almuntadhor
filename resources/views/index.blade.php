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
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Home
              </h3>
            </div>
            <div class="alert alert-info" role="alert">
              Anda berada diportal informasi umum ! Silahkan <a href="{{url('/login-page')}}">Login</a> untuk melanjutkan !
            </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3>Selamat Datang Di</h3>
                <p><small>Aplikasi Walisantri Ponpes Al Muntadhor</small></p>
                  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{!! asset('assets/images/dashboard/img_1.jpg') !!}" class="d-block w-100" alt="...">
                        <div class="caption" style="margin-top: 30px">
                          <h5>First slide label</h5>
                          <p>Some representative placeholder content for the first slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{!! asset('assets/images/dashboard/img_2.jpg') !!}" class="d-block w-100" alt="...">
                        <div class="caption" style="margin-top: 30px">
                          <h5>Second slide label</h5>
                          <p>Some representative placeholder content for the second slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{!! asset('assets/images/dashboard/img_3.jpg') !!}" class="d-block w-100" alt="...">
                        <div class="caption" style="margin-top: 30px">
                          <h5>Third slide label</h5>
                          <p>Some representative placeholder content for the third slide.</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body text-center">
                <p class="card-header" style="margin-bottom: 20px;">Menu Umum</p>
                <div class="row justify-content no-gutters text-center">
                  <a href="/about"class="col mb-3 text-center" style="margin-right: 20px">
                      <div class="card mb-1 bg-gradient-primary  text-white text-center" >
                        <span><i class="fas fa-building" style="margin: 21px;"></i></span>
                      </div>
                      <p class="text-secondary"><small>About Ponpes</small></p>
                    </a>
                  <a href="/info" class="col mb-3" style="margin-right: 20px">
                    <div class="card mb-1 bg-gradient-primary  text-white text-center">
                      <span><i class="fas fa-info-circle" style="margin: 21px;"></i></span>
                    </div>
                    <p class="text-secondary"><small>Informasi</small></p>
                  </a>
                </div>

                <div class="row justify-content no-gutters text-center">
                <a href="/gallery" class="col mb-3" style="margin-right: 20px">
                  <div class="card mb-1 bg-gradient-primary  text-white text-center">
                    <span><i class="fas fa-photo-video" style="margin: 21px;"></i></span>
                  </div>
                  <p class="text-secondary"><small>Gallery</small></p>
                </a>
                <a href="/login-page" class="col mb-3" style="margin-right: 20px">
                  <div class="card mb-1 bg-gradient-primary  text-white text-center">
                    <span><i class="fas fa-sign-in-alt" style="margin: 21px;"></i></span>
                  </div>
                  <p class="text-secondary"><small>Login</small></p>
                </a>
                </div>
            </div>
          </div>
          </div>
        
          <!-- selesai content -->
          <!-- Footer -->
         @include('umum.footer')
        </div>
      </div>
   