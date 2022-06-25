@extends('layouts.main')
<!-- container -->
@section('container')
<!-- Navbar -->
@include('partials.navbar')
<!-- Sidebar -->
@include('partials.sidebar')

  <!-- content -->
  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-default-light text-white me-2">
                  <i class="fas fa-arrow-circle-left"></i>
                </span> Informasi
              </h3>
            </div>
          <div class="row">
          <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-title text-center" style="margin-bottom: 20px;">Informasi Umum</p>
                @foreach($tampilContent as $gallery)
                <div class="card-body bg-gradient-light" style="margin-bottom: 20px">
                  <h5>{{ $gallery->judul }}</h5>
                  <span ><small >Terbit : {{ $gallery->created_at }}</small></span>
                  <img src="{{ URL::to('/')}}/content/{{ $gallery->gambar }}" alt="" width="100%" style="margin-bottom: 10px; margin-top:10px">
                  <p>{{ $gallery->deskripsi }}</p>
                  <div class="text-center">
                    <button href="#" class="btn btn-light">Selengkapnya...</button>
                  </div>
                </div>
                @endforeach
            </div>
          </div>
          </div>
          <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h3>Arsip Informasi</h3>
                <div class="list-group" style="margin-bottom: 50px">
                  @foreach($tampilContent as $gallery)
                  <a href="#" class="list-group-item list-group-item-action"> {{ $gallery->judul }}</a>
                  @endforeach
                </div>
            </div>
            </div>
            </div>
          </div>
<!-- Footer -->
@include('partials.footer')
  


        
   