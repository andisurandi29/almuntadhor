@include('admin.layouts.head')

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        
        @include('admin.layouts.sidebar')
        <!-- Layout container -->
        <div class="layout-page">
          @include('admin.layouts.navbar')

          <!-- Content wrapper -->
          <div class="content-wrapper">

            <!-- Modal -->
            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
              <input required name="level" type="text" class="form-control" placeholder="Masukkan Level">
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
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>

            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                  <div class="card">
                      <div class="card-body">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                       <i class="fas fa-plus-circle"></i> Tambah Data</button>
                    <div class="table-responsive">
                        <table class="table table-stiped table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th>Level</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
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
                            </tbody>
                        </table>
                    </div>
                      </div>
                    <!-- </div>
    <div class="row"> -->
          
              </div>
            </div>
            <!-- / Content -->
            @include('admin.layouts.foot')
           