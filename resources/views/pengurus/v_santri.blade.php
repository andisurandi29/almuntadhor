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
            <h1>Data Santri</h1>
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
            <form action="{{route('data-santri.store')}}" method="POST">
              {{-- CSRF merupakan keamanan yang disediakan laravel  --}}
              @method('POST')
              @csrf
              <div class="mb-3">
                <label for="" class="form-label">NIS Santri</label>
                <input required name="nis" type="text" class="form-control" placeholder="Masukkan NIS santri">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Nama Lengkap Santri</label>
                <input required name="nama" type="text" class="form-control" placeholder="Masukkan nama lengkap santri">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Tanggal Lahir</label>
                <input required name="tgl_lahir" type="date" class="form-control" placeholder="Masukkan tanggal lahir">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Angkatan</label>
                <input required name="angkatan" type="text" class="form-control" placeholder="Masukkan angkatan santri">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Alamat Lengkap</label>
                <input required name="alamat" type="text" class="form-control" placeholder="Masukkan alamat lengkap">
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
      <div class="container-fluid">
      <div class="card">
        <div class="card-body">
      <div class="row" style="margin-left: 10px; margin-top:20px">
        <div class="col mb-3">
           <!-- Button trigger modal -->
           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-plus"></i> Tambah Data
          </button>
           <a href="{{route('data-santri.cetak')}}" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-print"></i> Cetak Data
           </a>
        </div>
        <div class="col">
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="cari" class="col-form-label">Cari Data:</label>
            </div>
            <div class="col-auto">
              <input type="text" id="cari" class="form-control">
            </div>
            <div class="col-auto">
              <span class="form-text">
                <button type="submit" class="btn btn-sm btn-primary">Cari</button>
              </span>
            </div>
          </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-hover" style="vertical-align: middle">
          <tr>
            <th>No.</th>
            <th>NIS</th>
            <th>Nama Santri</th>
            <th>Tanggal Lahir</th>
            <th>Angkatan</th>
            <th>Alamat Lengkap</th>
            <th>Aksi</th>
          </tr>

          @foreach($datas as $data)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $data->nis }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->tgl_lahir }}</td>
            <td>{{ $data->angkatan }}</td>
            <td>{{ $data->alamat }}</td>
            <td>
              <form action="{{route('data-santri.destroy', $data->id)}}" method="POST">
                <a href="{{route('data-santri.edit', $data->id)}}" 
                    class="btn btn-primary fas fa-edit"></a>
                @csrf    
                @method('delete')
                <button type="submit" class="btn btn-danger fas fa-trash-alt"></button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>

       <div class="page-bottom" style="margin: 20px">
        <br/>
        <!-- pagination -->
          Current Page: {{ $datas->currentPage() }}<br>
          Jumlah Data: {{ $datas->total() }}<br>
          Data perhalaman: {{ $datas->perPage() }}<br>
          <br>
          {{ $datas->links() }}
       </div>
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