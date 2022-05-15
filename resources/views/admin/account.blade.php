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

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> Account</h4>

                  <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{!! asset('sneat/img/avatars/1.png')!!}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar"
                        />
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload Foto Baru</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                            />
                          </label>
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button>

                          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Nama Lengkap</label>
                            <input class="form-control" type="text" id="firstName" name="firstName" value="{{auth()->user()->name}}" autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Username</label>
                            <input class="form-control" type="text" name="username" id="username" value="{{auth()->user()->username}}" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input class="form-control" type="text" id="email" name="email" value="{{auth()->user()->email}}"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="level" class="form-label">Level</label>
                            <select name="level" id="level" class="form-select">
                              <option selected>{{auth()->user()->level}}</option>
                              <option value="pendidik">Pendidik</option>
                              <option value="pengurus">Pengurus</option>
                              <option value="santri">Santri</option>
                            </select>
                          </div> 
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Update</button>
                          <button type="reset" class="btn btn-outline-secondary">Batal</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  <div class="card">
                    <h5 class="card-header">Ubah Password</h5>
                    <div class="card-body">
                      <form action="#" method="post">
                        @csrf
                        <div class="row">
                        <div class="mb-3 col-md-6">
                          <label for="password_lama">Password Lama</label>
                        <input type="text" name="password_lama" class="form-control" id="password_lama" placeholder="Masukan Password Lama">
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="password_baru">Password Baru</label>
                        <input type="text" name="password_baru" class="form-control" id="password_baru" placeholder="Masukan Password Baru">
                        </div>
                      </div>
                      </form>
                        </div>
                        <button type="submit" class="btn btn-primary deactivate-account">Ubah Password</button>
                      </form>
                  </div>
            </div>
        </div>
  

            <!-- / Content -->

            @include('admin.layouts.foot')