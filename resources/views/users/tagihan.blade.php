@extends('layouts.main')
<!-- container -->
@section('container')
<!-- Navbar -->
@include('partials.navbar')
<!-- Sidebar -->
@include('partials.sidebar')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-success text-white me-2">
          <a href="{{ URL::previous() }}" style="color:white"><i class="fas fa-arrow-circle-left"></i></a>
        </span> Tagihan Pembayaran
      </h3>
    </div>
  
    <div class="card">
        <div class="card-body">
          <div class="card-header mb-3">Tagihan Bulan Ini</div>
          <div class="list-group">
          @foreach($dataTagihan as $tagihan)
                @if ($tagihan->keterangan == 'pending')
                <div class="list-group-item">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $tagihan->tagihan }}</h5>
                  </div>
                  <p class="mb-1 text-warning" ><b>Rp. {{ $tagihan->nominal }}</b></p>
                  <small class="badge bg-warning rounded">Menunggu Dibayar</small>
                  <form action="" method="post">
                    @csrf
                    <input type="text" name="tagihan" value="{{ $tagihan->tagihan }}" hidden>
                    <input type="text" name="bulan" value="{{ $tagihan->bulan }}" hidden>
                    <input type="text" name="tahun" value="{{ $tagihan->tahun }}" hidden>
                    <input type="text" name="nominal" value="{{ $tagihan->nominal }}" hidden>
                    <div class="text-center mt-2">
                      <a href="/waiting-payment/{{ $tagihan->order_id }}" class="btn btn-gradient-success">Lanjutkan Pembayaran</a>
                    </div>
                  </form>
                </div>
                @else
                <div class="list-group-item">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $tagihan->tagihan }}</h5>
                  </div>
                  <p class="mb-1 text-danger" ><b>Rp. {{ $tagihan->nominal }}</b></p>
                    <small class="badge bg-danger rounded">Belum Lunas</small>
                  <form action="" method="post">
                    @csrf
                    <input type="text" name="tagihan" value="{{ $tagihan->tagihan }}" hidden>
                    <input type="text" name="bulan" value="{{ $tagihan->bulan }}" hidden>
                    <input type="text" name="tahun" value="{{ $tagihan->tahun }}" hidden>
                    <input type="text" name="nominal" value="{{ $tagihan->nominal }}" hidden>
                    <div class="text-center mt-2">
                      <button type="submit" class=" form-control btn btn-gradient-success">Bayar</button>
                    </div>
                  </form>
                </div>
                @endif
                
            @endforeach
                </div>
        </div>
    </div>
        </div>
      
  </div>
  
  </div>
  
  </div>
  
  </div>
  
          <!-- selesai content -->
          <!-- Footer -->
          
          @include('partials.footer')
  


        </div>
      </div>
   