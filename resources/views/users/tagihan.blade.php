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
        <span class="page-title-icon bg-default-light text-white me-2">
            <i class="fas fa-arrow-circle-left"></i>
        </span> Tagihan Pembayaran
      </h3>
    </div>
    <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <th scope="col">NO</th>
                <th scope="col">NIS</th>
                <th scope="col">NAMA</th>
                <th scope="col">TAGIHAN</th>
                <th scope="col">NOMINAL</th>
                <th scope="col">STATUS</th>
                <th scope="col" class="text-center">AKSI</th>
              </thead>
              @foreach($dataTagihan as $tagihan)
              <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $tagihan->nis }}</td>
                  <td>{{ $tagihan->nama }}</td>
                  <td>{{ $tagihan->tagihan }}</td>
                  <td>{{ $tagihan->nominal }}</td>
                  <td>{{ $tagihan->keterangan }}</td>
                  <td>
                      <a href="{{route('data-tagihan.edit', $college->id)}}" class="btn btn-primary">Bayar Sekarang</a>
                  </td>
              </tr>
              @endforeach
              
            </table>
          </div>
    </div>
        </div>
        <div class="page-bottom" style="margin: 20px">
        <br/>
        <!-- pagination -->
          Current Page: {{ $dataTagihan->currentPage() }}<br>
          Jumlah Data: {{ $dataTagihan->total() }}<br>
          Data perhalaman: {{ $dataTagihan->perPage() }}<br>
          <br>
          {{ $dataTagihan->links() }}
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
   