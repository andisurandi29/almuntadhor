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
            <div class="table table-responsive">
                <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Mata Pelajaran</th>
                        <th>Kehadiran</th>
                        <th class="text-center">Tugas</th>
                        <th class="text-center">UTS</th>
                        <th class="text-center">UAS</th>
                        <th class="text-center">Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tampilUser as $show)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $show->pelajaran }}</td>
                        <td>{{ $show->kehadiran }}</td>
                        <td>{{ $show->tugas }}</td>
                        <td>{{ $show->uts }}</td>
                        <td>{{ $show->uas }}</td>
                    </tr>
                    @endforeach
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
   