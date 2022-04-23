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
              Edit Hafalan
          </div>
          <form method="POST" action="{{route('data-hafalan.update', $hafalan->id)}}">
              @method('PUT')
              @csrf
              <input type="hidden" name="id" value="{{$hafalan->id}}">
                <div class="mb-3">
                  <label for="" class="form-label">NIS Santri</label>
                  <input name="nis" value="{{$hafalan->nis}}" type="text" class="form-control" placeholder="Masukkan NIS Santri">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Nama Lengkap Santri</label>
                  <input name="nama" value="{{$hafalan->nama}}" type="text" class="form-control" placeholder="Masukkan Nama Lengkap Santri">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Tanggal Hafalan</label>
                  <input name="tanggal" value="{{$hafalan->tanggal}}" type="date" class="form-control" placeholder="Masukkan tanggal hafalan">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Hafalan Surat</label>
                  <input name="hafalan" value="{{$hafalan->hafalan}}" type="text" class="form-control" placeholder="Masukkan nominal hafalan">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Keterangan</label>
                  <input name="keterangan" value="{{$hafalan->keterangan}}" type="text" class="form-control" placeholder="Masukkan keterangan">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
          </form>
      </div>
    </div>
  </div>

  @include('pengurus.footer')
  @endsection

        