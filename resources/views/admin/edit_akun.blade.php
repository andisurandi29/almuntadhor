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
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> Edit Akun Pengguna</h4>
                  <div class="card">
                      <div class="card-body">
                        <form method="POST" action="{{route('data-akun.update', $accounts->id)}}">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="id" value="{{$accounts->id}}">
                              <div class="mb-3">
                                <label for="" class="form-label">Nama Lengkap</label>
                                <input name="name" value="{{$accounts->name}}" type="text" class="form-control" placeholder="Masukkan NIS Santri">
                              </div>
                              <div class="mb-3">
                                <label for="" class="form-label">Username</label>
                                <input name="username" value="{{$accounts->username}}" type="text" class="form-control" placeholder="Masukkan nama lengkap santri">
                              </div>
                              <div class="mb-3">
                                <label for="" class="form-label">Level</label>
                                <input name="level" value="{{$accounts->level}}" type="text" class="form-control" placeholder="Masukkan tanggal lahir">
                              </div>
                              <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input name="email" value="{{$accounts->email}}" type="email" class="form-control" placeholder="Masukkan angkatan">
                              </div>
                              <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input name="password" value="{{$accounts->password}}" type="password" class="form-control" placeholder="Masukkan alamat lengkap" readonly>
                              </div>
                              <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                      </div>
                  </div>
            </div>
          </div>


            <!-- / Content -->
            @include('admin.layouts.foot')