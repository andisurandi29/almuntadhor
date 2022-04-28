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
        </span> Riwayat Pembayaran
      </h3>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="list-group">
                <div class="list-group-item">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">SPP Januari 2022</h5>
                    <small class="badge badge-success badge-pill">Lunas</small>
                  </div>
                  <small style="font-size: 11px">Dibayar pada : 12 Januari 2022</small>
                </div>
                <div class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">SPP Januari 2022</h5>
                      <small class="badge badge-success badge-pill">Lunas</small>
                    </div>
                    <small style="font-size: 11px">Dibayar pada : 12 Januari 2022</small>
                  </div>
                  <div class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">SPP Januari 2022</h5>
                      <small class="badge badge-success badge-pill">Lunas</small>
                    </div>
                    <small style="font-size: 11px">Dibayar pada : 12 Januari 2022</small>
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
  


        </div>
      </div>
   