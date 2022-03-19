@extends('layouts.main')
<!-- container -->
@section('container')
<!-- Navbar -->
@include('partials.navbar')
<!-- Sidebar -->
@include('partials.sidebar')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> Dashboard
      </h3>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h3>Selamat Datang di</h3>
          <p><small>PONDOK PESANTREN AL MUNTADHOR</small></p>
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
          <p class="card-header" style="margin-bottom: 20px;">Menu Utama</p>
          <div class="row justify-content no-gutters text-center">
            <div class="col mb-3 text-center" style="margin-right: 10px">
                <a href="/kehadiran" class="card mb-1 bg-gradient-primary  text-white text-center" >
                  <span><i class="fas fa-clipboard-check" style="margin: 21px;"></i></span>
                </a>
                <p class="text-secondary"><small>Profil</small></p>
              </div>
            <div class="col mb-3" style="margin-right: 10px">
              <a href="/nilai" class="card mb-1 bg-gradient-primary  text-white text-center">
                <span><i class="fas fa-book-reader" style="margin: 21px;"></i></span>
              </a>
              <p class="text-secondary"><small>Rekap Nilai</small></p>
            </div>
            <div class="col mb-3" style="margin-right: 10px">
              <a href="/tagihan" class="card mb-1 bg-gradient-primary  text-white text-center">
                <span><i class="fas fa-wallet" style="margin: 21px;"></i></span>
              </a>
              <p class="text-secondary"><small>Pembayaran</small></p>
            </div>
            
          </div>

          <div class="row justify-content no-gutters text-center">
          <a href="/jadwal" class="col mb-3" style="margin-right: 10px">
            <div class="card mb-1 bg-gradient-primary  text-white text-center">
              <span><i class="fas fa-calendar-day" style="margin: 21px;"></i></span>
            </div>
            <p class="text-secondary"><small>Jadwal Kegiatan</small></p>
          </a>
          <div class="col mb-3" style="margin-right: 10px">
            <a href="/hafalan" class="card mb-1 bg-gradient-primary  text-white text-center">
              <span><i class="fas fa-clipboard-list" style="margin: 21px;"></i></span>
            </a>
            <p class="text-secondary"><small>Rekap Hafalan</small></p>
          </div>
          <div class="col mb-3" style="margin-right: 10px">
            <a href="/pengumuman" class="col mb-3" style="margin-right: 10px">
                <div class="card mb-1 bg-gradient-primary  text-white text-center">
                  <span><i class="fas fa-info-circle" style="margin: 21px;"></i></span>
                </div>
                <p class="text-secondary"><small>Pengumuman</small></p>
            </a>
          </div>
          </div>
      </div>
    </div>
    </div>
    </div>
   <div class="row">
     <div class="col-md-6 grid-margin stretch-card">
       <div class="card">
         <div class="card-body">
           <div class="card-header" style="margin-bottom: 20px">Jadwal Kegiatan Hari Ini</div>
          <div class="card-list-group">
            <div class="list-group-item list-group-item" aria-current="true" style="margin-bottom: 10px">
              <div class="d-flex w-100 justify-content-between">
                <h6 class="mb-1">Sekolah Formal</h6>
              </div>
              <p class="mb-1">Pukul 07.00 - 13.00 WIB</p>
              <p><small>Tempat : Sekolah masing-masing</small></p>
              <p><small class="badge bg-danger">Telah selesai</small></p>
            </div>
            <div class="list-group-item list-group-item" aria-current="true" style="margin-bottom: 10px">
              <div class="d-flex w-100 justify-content-between">
                <h6 class="mb-1">Madrasah</h6>
              </div>
              <p class="mb-1">Pukul 13.30 - 15.30 WIB</p>
              <p><small>Tempat : Kelas 2</small></p>
              <p><small class="badge bg-success">Sedang berlansung</small></p>
            </div>
            <div class="list-group-item list-group-item" aria-current="true" style="margin-bottom: 10px">
              <div class="d-flex w-100 justify-content-between">
                <h6 class="mb-1">Pengajian Sore</h6>
              </div>
              <p class="mb-1">Pukul 16.00 - 17.30 WIB</p>
              <p><small>Tempat : Mushola</small></p>
              <p><small class="badge bg-warning">Akan datang</small></p>
            </div>
          </div>
         </div>
       </div>
     </div>
   <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="card-header" style="margin-bottom: 20px">Pengumuman</div>
       <div class="card-list-group">
         <div class="list-group-item list-group-item" aria-current="true" style="margin-bottom: 10px">
           <div class="d-flex w-100 justify-content-between">
             <h6 class="mb-1">Judul Pengumuman 1</h6>
           </div>
           <p><small>10/20/20</small></p>
           <p><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ad amet nisi quidem maiores magnam dolor</small></p>
           <div class="text-center">
           <p><small class="btn btn-secondary">Selengkapnya</small></p>
         </div>
        </div>
        <div class="list-group-item list-group-item" aria-current="true" style="margin-bottom: 10px">
          <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">Judul Pengumuman 1</h6>
          </div>
          <p><small>10/20/20</small></p>
          <p><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ad amet nisi quidem maiores magnam dolor</small></p>
          <div class="text-center">
          <p><small class="btn btn-secondary">Selengkapnya</small></p>
        </div>
       </div>
       <div class="list-group-item list-group-item" aria-current="true" style="margin-bottom: 10px">
        <div class="d-flex w-100 justify-content-between">
          <h6 class="mb-1">Judul Pengumuman 1</h6>
        </div>
        <p><small>10/20/20</small></p>
        <p><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ad amet nisi quidem maiores magnam dolor</small></p>
        <div class="text-center">
        <p><small class="btn btn-secondary">Selengkapnya</small></p>
      </div>
     </div>
      </div>
    </div>
  </div>
  </div>
          <!-- selesai content -->
          <!-- Footer -->
          @include('partials.footer')
  


        </div>
      </div>
   