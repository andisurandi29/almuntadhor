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
                    </span> Form Pembayaran
                </h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <form onsubmit="return confirm('Apakah Anda yakin untuk melanjutkan?');" action="{{route('upload.store')}}" method="POST" enctype="multipart/form-data">
                                @method('POST')
                                @csrf    
                                <tr>
                                    <th scope="col">Nomor Induk Santri (NIS)</th>
                                    <td><input type="text" name="nis" value="{{ auth()->user()->username }}" class="form-control" readonly></td>
                                </tr>
                                <tr>
                                    <th scope="col">Nama Lengkap Santri</th>
                                    <td><input type="text" name="nama" value="{{ auth()->user()->name}}" class="form-control" readonly></td>
                                </tr>
                                <tr>
                                    <th scope="col">Tanggal Pembayaran</th>
                                    <td><input type="date" name="tanggal" value="" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th scope="col">Nominal Pembayaran</th>
                                    <td><input type="text" name="nominal" value="Rp. 350.000" class="form-control"readonly></td>
                                </tr>
                                <tr>
                                    <th scope="col">Tagihan</th>
                                    <td><input type="text" name="tagihan" value="SPP Februari 2022" class="form-control" readonly></td>
                                </tr>
                                <tr>
                                    <th scope="col"><label for="bukti" class="form-label">Upload Bukti</label></th>
                                    <td><input type="file" name="bukti" class="form-control @error('bukti') is-invalid @enderror" id="bukti" required></td>
                                    @error('bukti')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </tr>
                                <tr>
                                    <th scope="col">Keterangan</th>
                                    <td><input type="text" name="keterangan" class="form-control" placeholder="Masukkan keterangan pembayaran"></td>
                                </tr>
                        </thead>
                    </table>
                                <button type="submit" class="form-control btn btn-primary">Konfirmasi Pembayaran</button>
                            </form>
                </div>
            </div>
        @include('partials.footer')
    </div>


  
   

