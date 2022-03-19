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
                </span> Informasi
              </h3>
            </div>
            <div class="alert alert-info" role="alert">
              Anda berada diportal informasi umum ! Silahkan <a href="/login">Login</a> untuk melanjutkan !
            </div>
          <div class="row">
          <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-title text-center" style="margin-bottom: 20px;">Informasi Umum</p>
                <div class="card-body bg-gradient-light" style="margin-bottom: 20px">
                <h5>Judul informasi</h5>
                <span ><small >20/01/2022</small></span>
                <img src="{!! asset('assets/images/dashboard/img_3.jpg') !!}" alt="" width="100%" style="margin-bottom: 10px; margin-top:10px">
                <p>Lorem, ipsum dolor sit amet accusantium distinctio eligendi  magnam! In quidem veniam nemo.
                     Aliquam dicta consequuntur earum! Nemo deserunt et deleniti....</p>
                <div class="text-center">
                <button class="btn btn-light">Selengkapnya...</button>
                </div>
                </div>
                <div class="card-body bg-gradient-light" style="margin-bottom: 20px">
                    <h5>Judul informasi</h5>
                    <span ><small >20/01/2022</small></span>
                    <img src="{!! asset('assets/images/dashboard/img_3.jpg') !!}" alt="" width="100%" style="margin-bottom: 10px; margin-top:10px">
                    <p>Lorem, ipsum dolor  Corrupti nostrum, ac temporibus! Culpa, magnam! In quidem veniam nemo.
                         Aliquam dicta consequuntur earum! Nemo deserunt et deleniti....</p>
                    <div class="text-center">
                    <button class="btn btn-light">Selengkapnya...</button>
                    </div>
                    </div>
                    
            </div>
          </div>
          </div>
          <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h3>Arsip Informasi</h3>
                <div class="list-group" style="margin-bottom: 50px">
                  <a href="#" class="list-group-item list-group-item-action"> Judul 1</a>
                  <a href="#" class="list-group-item list-group-item-action">Judul 2</a>
                  <a href="#" class="list-group-item list-group-item-action">Judul 3</a>
                </div>
                <h3>Media Sosial Resmi</h3>
                <p><small><i class="fab fa-instagram"></i> instagram : @pesantren_almuntadhor</small></p>
                <p><small><i class="fab fa-facebook"></i> Facebook : pesantren almuntadhor</small></p>
                <p><small><i class="fab fa-youtube"></i> Youtube : almuntadhor.id</small></p>
                <br>
                <h3>Alamat</h3>
             <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto mollitia itaque laudantium tempore </p>
             <iframe class="responsive" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.658509229347!2d108.36614261404884!3d-6.68915276725453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6edefcaad37c35%3A0x163a0af6459df031!2sPondok%20Pesantren%20Al-muntadhor!5e0!3m2!1sid!2sid!4v1643802793550!5m2!1sid!2sid" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            </div>
            </div>
          </div>

          <!-- selesai content -->
          <!-- Footer -->
         @include('umum.footer')
        </div>
      </div>
   