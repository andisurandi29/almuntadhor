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
        </span> Rekap Nilai
      </h3>
    </div>
    <div class="card">
        <div class="card-body">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Ganjil</button>
                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Genap</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="list-group">
                        <div class="list-group-item" aria-current="true" style="margin-bottom: 20px; margin-top: 20px">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">SPP Februari</h5>
                            <small class="badge rounded-pill bg-success">Lunas</small>
                          </div>
                          <p class="mb-1 btn btn-success">RP. 350.000</p>
                            <p><small class="text-success"  style="margin-top: -20px">Dibayar pada : 25 Februari 2022</small></p>
                          <a href="#" class="btn btn-info form-control" style="margin-top: 10px">Cara Pembayaran <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                        <div class="list-group-item" aria-current="true" style="margin-bottom: 20px; margin-top: 20px">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1">SPP Maret</h5>
                              <small class="badge rounded-pill bg-danger">Belum Lunas</small>
                            </div>
                            <p class="mb-1 btn btn-danger">RP. 350.000</p>
                              <p><small class="text-danger"  style="margin-top: -20px">Batas : 25 Maret 2022</small></p>
                            <a href="#" class="btn btn-info form-control" style="margin-top: 10px">Cara Pembayaran <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="list-group">
                        <div class="list-group-item" aria-current="true" style="margin-bottom: 20px; margin-top: 20px">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">SPP April</h5>
                            <small class="badge rounded-pill bg-success">Lunas</small>
                          </div>
                          <p class="mb-1 btn btn-success">RP. 350.000</p>
                            <p><small class="text-success"  style="margin-top: -20px">Dibayar pada : 25 April 2022</small></p>
                          <a href="#" class="btn btn-info form-control" style="margin-top: 10px">Cara Pembayaran <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                        <div class="list-group-item" aria-current="true" style="margin-bottom: 20px; margin-top: 20px">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1">SPP Mei</h5>
                              <small class="badge rounded-pill bg-danger">Belum Lunas</small>
                            </div>
                            <p class="mb-1 btn btn-danger">RP. 350.000</p>
                              <p><small class="text-danger"  style="margin-top: -20px">Batas : 25 Mei 2022</small></p>
                            <a href="#" class="btn btn-info form-control" style="margin-top: 10px">Cara Pembayaran <i class="fas fa-arrow-circle-right"></i></a>
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
  


        </div>
      </div>
   