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
                    </span> Rincian Biaya Pembayaran
                </h3>
            </div>
            <div class="card">
                <div class="card-body">
                        <p>Silahkan lakukan pembayaran dengan transfer ke salah satu nomor rekening di bawah ini :</p>
                        <h4>BRI : 0028-01-011141-53-4 (PIP Al Muntadhor)</h4>
                        <h4>BNI : 0028-01-011141-53-4 (PIP Al Muntadhor)</h4>
                        <h4>BCA : 0028-01-011141-53-4 (PIP Al Muntadhor)</h4>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <form>
                                <tr>
                                    <th scope="col"><b>Rincian Pembayaran Bulanan</b></th>
                                </tr>
                                <tr>
                                    <th scope="col">Syahriyyah PIP Al-Muntadhor</th>
                                    <td><input type="text" value="Rp. 70.000-," class="form-control" readonly></td>
                                </tr>
                                <tr>
                                    <th scope="col">Syahriyyah Madrasah Diniyah Al-Muntadhor</th>
                                    <td><input type="text" value="Rp. 70.000-," class="form-control" readonly></td>
                                </tr>
                                <tr>
                                    <th scope="col">Makan tanpa lauk (2 kali)</th>
                                    <td><input type="text" value="Rp. 160.000-," class="form-control" readonly></td>
                                </tr>
                                <tr>
                                    <th scope="col"><b>Total Pembayaran</b></th>
                                    <td><input type="text" value="Rp. 300.000-," class="form-control" readonly></td>
                                </tr>
                        </thead>
                    </table>
                                <a class="btn btn-primary form-control" href="/upload">Bayar Sekarang</a>
                            </form>
                </div>
            </div>
        @include('partials.footer')
    </div>

  
   