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
        </span> Hafalan Santri
      </h3>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="card-header">Hafalan Santri</div>
            <div class="tabel" style="margin-top: 20px">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th>Nama Hafalan</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Surah Al Waqiah</td>
                        <td class="bg-success text-white">Lulus</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
  </div>
          <!-- selesai content -->
          <!-- Footer -->
          @include('partials.footer')
  


        </div>
      </div>
   