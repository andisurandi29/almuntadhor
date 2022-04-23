@extends('pengurus.main')
  <!-- container -->
  @section('container')
  <!-- Navbar -->
  @include('pengurus.navbar')
  <!-- Sidebar -->
  @include('pengurus.sidebar')
  <div class="content-wrapper">
      <div class="card shadow">
          <div class="card-body">
              <div class="text-center display-4">
                  Edit Pembayaran
              </div>
              <form method="POST" action="{{route('data-pembayaran.update', $colleges->id)}}">
                  @method('PUT')
                  @csrf
                  <input type="hidden" name="id" value="{{$colleges->id}}">
                    <div class="mb-3">
                      <label for="" class="form-label">NIS Santri</label>
                      <input name="nis" value="{{$colleges->nis}}" type="text" class="form-control" placeholder="Masukkan NIS Santri">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Nama Lengkap Santri</label>
                      <input name="nama" value="{{$colleges->nama}}" type="text" class="form-control" placeholder="Masukkan Nama Lengkap Santri">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Tanggal Pembayaran</label>
                      <input name="tanggal" value="{{$colleges->tanggal}}" type="date" class="form-control" placeholder="Masukkan tanggal pembayaran">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Nominal Pembayaran</label>
                      <input name="nominal" value="{{$colleges->nominal}}" type="text" class="form-control" placeholder="Masukkan nominal pembayaran">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Bukti Pembayaran</label>
                      <input name="bukti" value="{{$colleges->bukti}}" type="text" class="form-control" placeholder="Masukkan bukti pembayaran">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Keterangan</label>
                      <input name="keterangan" value="{{$colleges->keterangan}}" type="text" class="form-control" placeholder="Masukkan keterangan">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
              </form>
          </div>
      </div>
  </div>

  @include('pengurus.footer')
  @endsection


