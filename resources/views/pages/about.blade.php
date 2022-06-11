@extends('layouts.main')
<!-- container -->
@section('container')
<!-- Navbar -->
@include('umum.navbar')

<!-- Sidebar -->
@include('umum.sidebar')

  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-default-light text-white me-2">
            <i class="fas fa-arrow-circle-left"></i>
          </span> About Pesantren
        </h3>
      </div>
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h3 class="card-header text-center" style="margin-bottom: 20px;">Profil Pesantren</h3>
              <div class="row">
                <div class="col">
                  <p><b>Nama Pesantren</b></p>
                </div>
                <div class="col">
                  <p>Perguruan Islam Pesantren Al Muntadhor</p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <p><b>Alamat Pesantren</b></p>
                </div>
                <div class="col">
                  <p>Jl. Merdeka No. 61 RT. 02 RW. 03 Desa Babakan Kecamatan Ciwaringin Kabupaten Cirebon 45167</p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <p><b>Pengasuh Pesantren</b></p>
                </div>
                <div class="col">
                  <p>KH. Burhanuddin Halim,MA</p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <p><b>Izin Pesantren</b></p>
                </div>
                <div class="col">
                  <p>20/21/G7833/2022</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h3>M U Q O D D I M A H</h3>
                <p>
                  Perguruan Islam Pesantren Al-Muntadhor merupakan salah satu pesantren Islam yang memadukan kurikulum diniyyah dan umum,
                  bahwa penguasaan terhadap ilmu agama dan umum yang dikemas dengan akhlaqul karimah, adalah perpaduan yang harus dimiliki
                  para anak didik, dalam rangka mencetak generasi Islam yang berkualitas yang siap terhadap perubahan zaman.
                </p>
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
                  <p>Terbentuknya generasi yang berprestasi berlandaskan ilmu, iman dan berakhlak mulia</p>
                <li><b>Misi</b></li>
                  <p>1. Mendidik santri agar menjadi generasi yang memiliki akidah yang kokoh, berpengetahuan luas serta berakhlak mulia</p>
                  <p>2. Menjadikan santri berprestasi dalam bidang akademik dan non akademik</p>
                  <p>3. Melaksanakan bimbingan terpadu antara kegiatan pesantren dan kegiatan sekolah</p>
                  <p>4. Melaksanakan bimbingan intensif membaca Al-Qur'an dan membaca kitab salafiyah</p>
                  <p>5. Mengadakan dan mengembangkan sarana dan prasarana pondok yang memadai</p>
                  <p>6. Mampu berkiprah dalam kegiatan keagamaan dan kemasyarakatan</p>
                  <p>7. Menyiapkan kader yang istiqomah dalam menjalankan kegiatan-kegiatan islami dan mampu menerapkan kepada masyarakat</p>
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
      <!-- Footer -->
      @include('umum.footer')
    </div>
  </div>
   