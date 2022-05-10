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
        <span class="page-title-icon bg-default-light text-white me-2">
            <i class="fas fa-arrow-circle-left"></i>
        </span> Akun Saya
      </h3>
    </div>
    <div class="card">
        <div class="card-body">
                      <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                          <div class="card">
                            <div class="card-body">
                              <div class="d-flex flex-column align-items-center text-center">
                                <img src="../../assets/images/faces/arul.jpg" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                  <h4>{{ auth()->user()->name }}</h4>
                                  <p class="text-secondary mb-1">{{ auth()->user()->username }}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="card mb-3">
                            <div class="card-body">
                                <div class="card-header" style="margin-bottom: 25px">Data Pribadi</div>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Nama Lengkap</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->name }}
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">NIS</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->username }}
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Telp</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  08999488833XXX
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Jenjang</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  3 Madrasah / SMA
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Alamat</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  Cirebon, Jawabarat
                                </div>
                              </div>
                              <hr>
                            </div>
                          </div>
                        </div>
                      </div>
                          <div class="row gutters-sm">
                            <div class="col-md-7">
                                <div class="card mb-3">
                                  <div class="card-body">
                                    <div class="card-header" style="margin-bottom: 25px">Data Walisantri</div>
                                    <div class="row">
                                      <div class="col-sm-3">
                                        <h6 class="mb-0">Nama Ayah</h6>
                                      </div>
                                      <div class="col-sm-9 text-secondary">
                                          {{ auth()->user()->name }}
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-sm-3">
                                        <h6 class="mb-0">Alamat</h6>
                                      </div>
                                      <div class="col-sm-9 text-secondary">
                                          Cirebon, Jawabarat
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-sm-3">
                                        <h6 class="mb-0">Telp</h6>
                                      </div>
                                      <div class="col-sm-9 text-secondary">
                                        08999488833XXX
                                      </div>
                                    </div>
                                    <hr>
                                  </div>
                                </div>
                            </div>
                            

                            <div class="col-md-5 mb-3">
                              <div class="card">
                                <div class="card-body">
                                    <div class="card-header" style="margin-bottom: 25px">Pengaturan</div>
                                    <ul class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class=" d-flex justify-content-between align-items-center">
                                              Ubah Password
                                              <span><i class="fas fa-arrow-right"></i></span>
                                            </div>
                                            <small>Ubah password anda secara berkala, untuk meningkatkan keamanan akun anda!</small>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class=" d-flex justify-content-between align-items-center">
                                                 Keluar
                                                  <span><i class="fas fa-arrow-right"></i></span>
                                                </div>
                                            </a>
                                      </ul>
                                </div>
                              </div>
                            </div>
            
            
            
            
                        </div>
                      </div>
    </div>
            
                    </div>
                </div>
        </div>
  <!-- selesai content -->
          <!-- Footer -->
          @include('partials.footer')
  
        
    

        
   