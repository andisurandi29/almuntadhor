<!-- <div class="table-responsive">
        <table class="table table-striped table-hover" style="vertical-align: middle">
          <tr>
            <th>No.</th>
            <th>id_santri</th>
            <th>id_mapel</th>
            <th>id_mapel</th>
            <th>Kehadiran</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
           
          </tr>

          @foreach($santriMapel as $nilai)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $nilai->santri_id }}</td>
            <td>{{ $nilai->mapel->nama_mapel }}</td>
            <td>{{ $nilai->kehadiran }}</td>
            <td>{{ $nilai->tugas }}</td>
            <td>{{ $nilai->uts }}</td>
            <td>{{ $nilai->uas }}</td>
            
          </tr>
          @endforeach
        </table>
</div> -->

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
            <h1>Data Nilai</h1>
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
            
          {{-- Form tambah nilai  --}}
            <form action="{{route('data-nilai.store')}}" method="POST" enctype="multipart/form-data">
              {{-- CSRF merupakan keamanan yang disediakan laravel  --}}
              @method('POST')
              @csrf
              <div class="mb-3">
                <label for="" class="form-label">Nama Santri</label>
                <input required name="santri_id" type="text" class="form-control" placeholder="Masukkan Nama Santri">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Mata Pelajaran</label>
                <input required name="mapel_id" type="text" class="form-control" placeholder="Masukkan Mata Pelajaran">
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
      @if(session('success'))
        <div class="alert alert-success">
              <b>Berhasil!</b> {{session('success')}}
        </div> 
      @elseif(session('error'))
        <div class="alert alert-danger">
            <b>Maaf!</b> {{session('error')}}
        </div>
      @endif
      <div class="card">
        <div class="card-body">
      <div class="row" style="margin-left: 10px; margin-top:20px">
        <div class="col mb-3">
           <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fas fa-plus"></i> Tambah Data
        </button>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
            <th>Nama Santri</th>
            <th>Mata Pelajaran</th>
            <th>Kehadiran</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Aksi</th>
          </tr>
  
          @foreach($santriMapel as $nilai)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $nilai->santri_id }}</td>
            <td>{{ $nilai->mapel->nama_mapel }}</td>
            <td>{{ $nilai->kehadiran }}</td>
            <td>{{ $nilai->tugas }}</td>
            <td>{{ $nilai->uts }}</td>
            <td>{{ $nilai->uas }}</td>
            <td>
              <form action="{{route('data-nilai.destroy', $nilai->id)}}" method="POST">
                  <a href="{{ asset('/img/'. $nilai->bukti) }}" 
                      class="btn btn-warning fas fa-eye"></a>
                  <a href="{{route('data-nilai.edit', $nilai->id)}}" 
                      class="btn btn-primary fas fa-edit"></a>
                  @csrf    
                  @method('delete')
                  <button type="submit" class="btn btn-danger fas fa-trash-alt"></button>
                </form>
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
    <script>
        //message with toastr
        @if(session()->has('success'))
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 
        @elseif(session()->has('error'))
            toastr.error('{{ session('error') }}', 'GAGAL!'); 
        @endif
    </script>
  <!-- /.content-wrapper -->
  @endsection