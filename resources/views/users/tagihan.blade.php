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
          </span> Tagihan Pembayaran
        </h3>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="list-group">
            <div class="list-group-item" aria-current="true" style="margin-bottom: 20px; margin-top: 20px">
              <h5 class="mb-1">SPP Februari 2022</h5>
              <div class="d-flex w-100 justify-content-between">
                <p class="mb-1 text-warning"><b>RP. 350.000</b></p>
              </div>
              <p class="text-danger" style="">Batas pembayaran : 25 Februari 2022</p>
              <a href="/rekening" class="btn btn-info form-control" style="margin-top: 10px">Bayar Sekarang <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
<!-- Footer -->
@include('partials.footer')
  


        
   