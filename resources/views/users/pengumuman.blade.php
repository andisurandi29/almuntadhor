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
                @foreach($informations as $information)
                <div class="card-body bg-gradient-light" style="margin-bottom: 20px">
                  <h5>{{ $information->judul }}</h5>
                  <span ><small >Terbit : {{ $information->created_at }}</small></span>
                  <a href="{{ asset('/informasi/'. $information->gambar) }}" 
                    class="btn btn-warning">Unduh Informasi</a>
                  <p>{{ $information->deskripsi }}</p>
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
                  @foreach($informations as $information)
                  <a href="#" class="list-group-item list-group-item-action"> {{ $information->judul }}</a>
                  @endforeach
                </div>
            </div>
            </div>
            </div>
          </div>
<!-- Footer -->
@include('partials.footer')
  


        
   