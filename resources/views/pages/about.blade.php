@extends('layouts.main')
<!-- container -->
@section('container')
<!-- Navbar -->
@include('umum.navbar')

<!-- Sidebar -->
@include('umum.sidebar')

        <!-- content -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-default-light text-white me-2">
                  <i class="fas fa-arrow-circle-left"></i>
                </span> About Pesantren
              </h3>
            </div>
            <div class="alert alert-info" role="alert">
              Anda berada diportal informasi umum ! Silahkan <a href="/login">Login</a> untuk melanjutkan !
            </div>
          <div class="row">
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-header text-center" style="margin-bottom: 20px;">Profile Pesantren</p>
               <div class="row">
                 <div class="col">
                   <p>Nama Pesantren</p>
                 </div>
                 <div class="col">
                   <p>: Ponpes Al Muntadhor</p>
                 </div>
               </div>
               <div class="row">
                <div class="col">
                  <p>Alamat Pesantren</p>
                </div>
                <div class="col">
                  <p>: Jl. Merdeka Desa Babakan Ciwaringin Cirebon</p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <p>Pengasuh Pesantren</p>
                </div>
                <div class="col">
                  <p>: KH. Burhanuddin Halim,MA</p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <p>Izin Pesantren</p>
                </div>
                <div class="col">
                  <p>: 20/21/G7833/2022</p>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h3>Sejarah Pesantren Al Muntadhor</h3>
             <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto mollitia itaque laudantium tempore praesentium eos consectetur perspiciatis, quisquam quibusdam quod.
                  Qui laudantium exercitationem nesciunt ad, doloribus a voluptas saepe in. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, n
                  obis dolorem nostrum minus magnam magni aut mollitia iure maiores modi rem doloribus, ea animi laborum incidunt quaerat enim quos voluptatem!</p>
                
            </div>
          </div>
        </div>
          </div>

          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3>Visi Misi</h3>
                <ul>
                  <li><b>Visi</b></li>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto mollitia itaque laudantium tempore praesentium eos consectetur perspiciatis, quisquam quibusdam quod.
                    Qui laudantium exercitationem nesciunt ad, doloribus a voluptas saepe in. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, n
                    obis dolorem nostrum minus magnam magni aut mollitia iure maiores modi rem doloribus, ea animi laborum incidunt quaerat enim quos voluptatem!</p>
                <li><b>Misi</b></li>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed vero expedita porro temporibus architecto a nisi, molestiae et, beatae eligendi nostrum minus voluptate culpa repudiandae corrupti praesentium, veniam ipsa omnis.</p>
                  </ul>
              </div>
            </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body text-center">
                  <h3>Maps</h3>
                  <iframe class="responsive" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.658509229347!2d108.36614261404884!3d-6.68915276725453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6edefcaad37c35%3A0x163a0af6459df031!2sPondok%20Pesantren%20Al-muntadhor!5e0!3m2!1sid!2sid!4v1643802793550!5m2!1sid!2sid" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
            </div>
        
          <!-- selesai content -->
          <!-- Footer -->
         @include('umum.footer')
        </div>
      </div>
   