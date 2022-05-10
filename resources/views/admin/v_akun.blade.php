@extends('admin.main')
  <!-- container -->
  @section('container')
  <!-- Navbar -->
  @include('admin.navbar')
  <!-- Sidebar -->
  @include('admin.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Akun</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Print</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

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
            {{-- Form tambah hafalan  --}}
            <form action="{{route('data-akun.store')}}" method="POST">
              {{-- CSRF merupakan keamanan yang disediakan laravel  --}}
              @method('POST')
              @csrf
              <div class="mb-3">
                <label for="" class="form-label">Nama Lengkap</label>
                <input required name="name" type="text" class="form-control" placeholder="Masukkan NIS santri">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input required name="username" type="text" class="form-control" placeholder="Masukkan nama lengkap santri">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Level</label>
                <input required name="level" type="text" class="form-control" placeholder="Masukkan tanggal lahir">
              </div>
              <!-- <div class="mb-3">
                <label for="" class="form-label">Level</label>
                <select name="level" class="form-select" aria-label="Default select example">
                  <option selected>Pilih level users</option>
                  <option value="admin">Admin</option>
                  <option value="pengurus">Pengurus</option>
                  <option value="pendidik">Pendidik</option>
                  <option value="santri">Santri</option>
                </select>
              </div> -->
              <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input required name="email" type="email" class="form-control" placeholder="Masukkan angkatan santri">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input required name="password" type="password" class="form-control" placeholder="Masukkan alamat lengkap">
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
        <button type="button" class="btn btn-primary fas fa-plus-square" data-toggle="modal" data-target="#exampleModal">
            Tambah Data
        </button>
        <table class="table table-striped table-hover" style="vertical-align: middle">
          <tr>
            <th>No.</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Level</th>
            <th>Email</th>
            <th>Password</th>
            <th>Aksi</th>
          </tr>

          @foreach($accounts as $account)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $account->name }}</td>
            <td>{{ $account->username }}</td>
            <td>{{ $account->level }}</td>
            <td>{{ $account->email }}</td>
            <td>{{ $account->password }}</td>
            <td>
              <form action="{{route('data-akun.destroy', $account->id)}}" method="POST">
                <a href="{{route('data-akun.edit', $account->id)}}" 
                    class="btn btn-primary fas fa-edit"></a>
                @csrf    
                @method('delete')
                <button type="submit" class="btn btn-danger fas fa-trash-alt"></button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>

        <br/>
        <!-- pagination -->
          Current Page: {{ $accounts->currentPage() }}<br>
          Jumlah Data: {{ $accounts->total() }}<br>
          Data perhalaman: {{ $accounts->perPage() }}<br>
          <br>
          {{ $accounts->links() }}
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('admin.footer')
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