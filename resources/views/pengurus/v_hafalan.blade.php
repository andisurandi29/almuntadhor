@extends('pengurus.main')
  <!-- container -->
  @section('pengurus')
  <!-- Navbar -->
  @include('pengurus.navbar')
  <!-- Sidebar -->
  @include('pengurus.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <main id="main" class="main">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Hafalan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            {{-- Form tambah hafalan  --}}
            <form action="{{route('data-hafalan.store')}}" method="POST">
              {{-- CSRF merupakan keamanan yang disediakan laravel  --}}
              @method('POST')
              @csrf
              <div class="mb-3">
                <label for="" class="form-label">NIS Santri</label>
                <input required name="nis" type="text" class="form-control" placeholder="Masukkan NIS Santri">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Nama Lengkap Santri</label>
                <input required name="nama" type="text" class="form-control" placeholder="Masukkan Nama Lengkap Santri">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Tanggal Hafalan</label>
                <input required name="tanggal" type="date" class="form-control" placeholder="Masukkan tanggal hafalan">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Hafalan Surat</label>
                <input required name="hafalan" type="text" class="form-control" placeholder="Masukkan hafalan surat">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Keterangan</label>
                <select name="keterangan" class="form-select" aria-label="Default select example">
                  <option selected>Pilih keterangan</option>
                  <option value="Sedang Berlangsung">Sedang Berlangsung</option>
                  <option value="Lulus">Lulus</option>
                  <option value="Mengulang">Mengulang</option>
                </select>
                <!-- <input required name="keterangan" type="text" class="form-control" placeholder="Masukkan keterangan"> -->
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-body">
      <div class="row" style="margin-left: 10px; margin-top:20px">
        <div class="col mb-3" >
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-plus"></i> Tambah Data
          </button>
          <a href="{{ route('data-hafalan.cetak-form') }}" class="btn btn-primary">
            <i class="fas fa-print"></i> Cetak Data
           </a>
        </div>
        <div class="col">
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="cari" class="col-form-label">Cari Data:</label>
            </div>
            <form class="d-flex" method="POST" action="{{route('cari')}}">
              @csrf
              <div class="col-auto">
                <input class="form-control" name="keyword" type="search" placeholder="Cari berdasarkan nama" aria-label="Search">
              </div>
              <div class="col-auto">
                <span class="form-text">
                  <button type="submit" class="btn btn-sm btn-primary">Cari</button>
                </span>
              </div>
          </form>
          </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-hover" style="vertical-align: middle">
          <tr>
            <th>No.</th>
            <th>NIS</th>
            <th>Nama Santri</th>
            <th>Tanggal Hafalan</th>
            <th>Hafalan Surat</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>

          @foreach($hafalan as $hafal)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $hafal->nis }}</td>
            <td>{{ $hafal->nama }}</td>
            <td>{{ $hafal->tanggal }}</td>
            <td>{{ $hafal->hafalan }}</td>
            <td>{{ $hafal->keterangan }}</td>
            <td>
              <form action="{{route('data-hafalan.destroy', $hafal->id)}}" method="POST">
                <a href="{{route('data-hafalan.edit', $hafal->id)}}" 
                    class="btn btn-primary">Ubah</a>
                @csrf    
                @method('delete')
                <button type="submit" class="btn btn-danger">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
      </div>
    </section>
    <!-- /.content -->
  </main>
  <!-- /.content-wrapper -->
  @include('pengurus.footer')
  <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
  <!-- /.content-wrapper -->
  @endsection