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
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <th scope="col">NO</th>
                <th scope="col">NIS</th>
                <th scope="col">NAMA</th>
                <th scope="col">TGL BAYAR</th>
                <th scope="col">TAGIHAN</th>
                <th scope="col">NOMINAL</th>
                <th scope="col">KET</th>
                <th scope="col" class="text-center">AKSI</th>
              </thead>
              
            </table>
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
   