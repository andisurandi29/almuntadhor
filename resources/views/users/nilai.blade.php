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
            <div class="cari text-left">
                <label for="">Bersadarkan :  </label>
               <span><select name="semester" id="semester" style="padding: 10px; margin-bottom:30px">
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                </select></span> 
                <span><button class="btn btn-primary" type="submit" name="submit">Pilih</button></span>
            </div>
            <div class="table table-responsive">
                <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Mata Pelajaran</th>
                        <th>Kelas</th>
                        <th class="text-center">Semester</th>
                        <th class="text-center">UTS</th>
                        <th class="text-center">UAS</th>
                        <th class="text-center">Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ilmu Fiqih</td>
                        <td>2 Madrasah</td>
                        <td class="text-center">1</td>
                        <td class="text-center">80</td>
                        <td class="text-center">80</td>
                        <td class="text-center">A</td>
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
   