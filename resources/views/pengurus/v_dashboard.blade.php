@extends('pengurus.main')
  <!-- container -->
  @section('pengurus')
  <!-- Navbar -->
  @include('pengurus.navbar')
  <!-- Sidebar -->
  @include('pengurus.sidebar')
    <!-- Pembuka Content -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
        </div><!-- End Page Title -->

        <section class="section">
            
        <div class="row">
            @if (auth()->user()->level == "pengurus")
            <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2" style="margin-top: 30px">
                            <i class="fas fa-user fa-3x"></i>
                        </div>
                        <div class="col-sm-5">
                            <h5 class="card-title">Data Santri</h5>
                            <h5 style="margin-top: -10px">124</h5>
                        </div>
                    </div>
                </div>
            </div>

            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-2" style="margin-top: 30px">
                                <i class="fas fa-user fa-3x"></i>
                            </div>
                            <div class="col-sm-7">
                                <h5 class="card-title">Data Pembayaran</h5>
                                <h5 style="margin-top: -10px">124</h5>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2" style="margin-top: 30px">
                            <i class="fas fa-user fa-3x"></i>
                        </div>
                        <div class="col-sm-5">
                            <h5 class="card-title">Data Hafalan</h5>
                            <h5 style="margin-top: -10px">124</h5>
                        </div>
                    </div>
                </div>
            </div>

            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-2" style="margin-top: 30px">
                                <i class="fas fa-user fa-3x"></i>
                            </div>
                            <div class="col-sm-5">
                                <h5 class="card-title">Data Content</h5>
                                <h5 style="margin-top: -10px">12</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if (auth()->user()->level == "pendidik")
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-2" style="margin-top: 30px">
                                <i class="fas fa-user fa-3x"></i>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="card-title">Data Santri</h5>
                            <h5 style="margin-top: -10px">124</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-2" style="margin-top: 30px">
                                <i class="fas fa-user fa-3x"></i>
                            </div>
                            <div class="col-sm-7">
                                <h5 class="card-title">Data Hafalan</h5>
                                <h5 style="margin-top: -10px">12 </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-2" style="margin-top: 30px">
                                <i class="fas fa-user fa-3x"></i>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="card-title">Data Nilai</h5>
                                <h5 style="margin-top: -10px">12 </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>

        <div class="card">
            <div class="card-body">
                <div class="card-body text-center">
                    <p class="card-header" style="margin-bottom: 20px;">Menu Utama</p>
                    @if (auth()->user()->level == "pengurus")
                    <div class="row justify-content no-gutters text-center">
                      <div class="col mb-3 text-center" style="margin-right: 5px">
                          <a href="/data-santri" class="mb-1 bg-gradient-primary  text-white text-center" >
                            <span><img src="{{ asset('NiceAdmin/') }}/assets/img/santri.png" alt="" width="50"></i></span>
                          </a>
                          <p class="text-secondary"><small>Kelola Santri</small></p>
                        </div>
                      <div class="col mb-3" style="margin-right: 5px">
                        <a href="/data-pembayaran" class="mb-1 bg-gradient-primary  text-white text-center">
                          <span><img src="{{ asset('NiceAdmin/') }}/assets/img/pembayaran.png" alt="" width="50"></span>
                        </a>
                        <p class="text-secondary"><small>Kelola Pembayaran</small></p>
                      </div>
                      <div class="col mb-3" style="margin-right: 5px">
                        <a href="/data-hafalan" class="mb-1 bg-gradient-primary  text-white text-center">
                          <span><span><img src="{{ asset('NiceAdmin/') }}/assets/img/jadwal.png" alt="" width="50"></span>
                        </a>
                        <p class="text-secondary"><small>Kelola Jadwal</small></p>
                      </div>
                      
                    </div>
                    <div class="row justify-content no-gutters text-center">
                    
                      <div class="col mb-3 text-center" style="margin-right: 5px">
                        <a href="#" class="mb-1 bg-gradient-primary  text-white text-center">
                            <span><img src="{{ asset('NiceAdmin/') }}/assets/img/info.png" alt="" width="50"></span>
                        </a>
                        <p class="text-secondary"><small>Kelola Informasi</small></p>
                     
                    </div>
                    @endif
                    @if (auth()->user()->level == "pendidik")
                    <div class="row justify-content no-gutters text-center">
                        <div class="col mb-3 text-center" style="margin-right: 5px">
                            <a href="/data-santri" class="mb-1 bg-gradient-primary  text-white text-center" >
                              <span><img src="{{ asset('NiceAdmin/') }}/assets/img/hafalan.png" alt="" width="50"></i></span>
                            </a>
                            <p class="text-secondary"><small>Kelola Hafalan</small></p>
                          </div>
                        <div class="col mb-3" style="margin-right: 5px">
                          <a href="/data-pembayaran" class="mb-1 bg-gradient-primary  text-white text-center">
                            <span><img src="{{ asset('NiceAdmin/') }}/assets/img/exam.png" alt="" width="50"></span>
                          </a>
                          <p class="text-secondary"><small>Kelola Nilai</small></p>
                        </div>
                    </div>
                    @endif
            </div>
        </div>
        </section>

    </main>
    <!-- Penutup Content -->
  @include('pengurus.footer')
  @endsection