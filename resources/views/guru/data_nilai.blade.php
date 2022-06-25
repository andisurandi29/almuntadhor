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
            <form action="{{route('data-nilai.store')}}" method="POST">
              {{-- CSRF merupakan keamanan yang disediakan laravel  --}}
              @method('POST')
              @csrf
              <div class="mb-3">
                <label for="" class="form-label">NIS Santri</label>
                <input required name="nis" type="text" class="form-control" placeholder="Masukkan NIS santri">
              </div>
              <div class="mb-3">
                <label hidden for="" class="form-label">Mata Pelajaran</label>
                <input hidden name="pelajaran" value="{{auth()->user()->kelas}}" type="text" class="form-control">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Kehadiran</label>
                <input required name="kehadiran" type="text" class="form-control" placeholder="Masukkan nilai kehadiran">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Tugas</label>
                <input required name="tugas" type="text" class="form-control" placeholder="Masukkan nilai tugas">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">UTS</label>
                <input required name="uts" type="text" class="form-control" placeholder="Masukkan nilai UTS">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">UAS</label>
                <input required name="uas" type="text" class="form-control" placeholder="Masukkan nilai UAS">
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
            <th>Kehadiran</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Aksi</th>
          </tr>

          @foreach($nilai as $data)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $data->nis }}</td>
            <td>{{ $data->pelajaran }}</td>
            <td>{{ $data->kehadiran }}</td>
            <td>{{ $data->tugas }}</td>
            <td>{{ $data->uts }}</td>
            <td>{{ $data->uas }}</td>
            <td>
              <form action="{{route('data-nilai.destroy', $data->id)}}" method="POST">
                <a href="{{route('data-nilai.edit', $data->id)}}" 
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
          Current Page: {{ $nilai->currentPage() }}<br>
          Jumlah Data: {{ $nilai->total() }}<br>
          Data perhalaman: {{ $nilai->perPage() }}<br>
          <br>
          {{ $nilai->links() }}
       </div>
      </div>
      </div>
  
    </section>
    <!-- /.content -->
  </main>
  <!-- /.content-wrapper -->
  @include('pengurus.footer')
  