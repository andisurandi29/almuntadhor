@extends('admin.main')
    <!-- container -->
    @section('container')
    <!-- Navbar -->
    @include('admin.navbar')
    <!-- Sidebar -->
    @include('admin.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="car-body">
                <div class="input-group mb-3">
                    <label for="label">Tanggal Awal</label>
                    <input type="date" name="tglawal" id="tglawal" class="form-control"/>
                </div>
                <div class="input-group mb-3">
                    <label for="label">Tanggal Akhir</label>
                    <input type="date" name="tglakhir" id="tglakhir" class="form-control"/>
                </div>
                <div class="input-group mb-3">
                    <a href="#" onclick="this.href='/data-pembayaran/cetak-pertanggal/'+document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value" target="_blank" class="btn btn-primary col-md-12"> Cetak Laporan Keuangan <i class="fas fa-print"></i></a>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
    @include('admin.footer')
    <!-- /.content-wrapper -->
    @endsection