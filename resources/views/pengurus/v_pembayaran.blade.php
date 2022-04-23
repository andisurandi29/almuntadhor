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
            <h1>Data Pembayaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('data-pembayaran.cetak-form')}}">print</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <button type="button" class="btn btn-primary fas fa-plus-square" data-toggle="modal" data-target="#exampleModal">
      Tambah Data
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            {{-- Form tambah pembayaran  --}}
            <form action="{{route('data-pembayaran.store')}}" method="POST">
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
                <label for="" class="form-label">Tanggal Pembayaran</label>
                <input required name="tanggal" type="date" class="form-control" placeholder="Masukkan tanggal pembayaran">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Nominal Pembayaran</label>
                <input required name="nominal" type="text" class="form-control" placeholder="Masukkan nominal pembayaran">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Bukti Pembayaran</label>
                <input required name="bukti" type="text" class="form-control" placeholder="Masukkan bukti pembayaran">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Keterangan</label>
                <input required name="keterangan" type="text" class="form-control" placeholder="Masukkan keterangan">
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
      <table class="table table-striped table-hover" style="vertical-align: middle">
        <tr>
          <th>No.</th>
          <th>NIS</th>
          <th>Nama Santri</th>
          <th>Tanggal Pembayaran</th>
          <th>Nominal Pembayaran</th>
          <th>Bukti Pembayaran</th>
          <th>Keterangan</th>
          <th>Aksi</th>
        </tr>

        @foreach($colleges as $college)
        <tr>
          <td>{{ $loop->index + 1 }}</td>
          <td>{{ $college->nis }}</td>
          <td>{{ $college->nama }}</td>
          <td>{{ $college->tanggal }}</td>
          <td>{{ $college->nominal }}</td>
          <td>{{ $college->bukti }}</td>
          <td>{{ $college->keterangan }}</td>
          <td>
            <a href="{{route('data-pembayaran.edit', $college->id)}}" class="btn btn-primary fas fa-edit"></a>
            <form action="{{route('data-pembayaran.destroy', $college->id)}}" method="POST">
                @csrf    
                @method('delete')
                <button class="btn btn-danger fas fa-trash-alt"></button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
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