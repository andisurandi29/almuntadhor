@extends('admin.main')
  <!-- container -->
  @section('container')
  <!-- Navbar -->
  @include('admin.navbar')
  <!-- Sidebar -->
  @include('admin.sidebar')
  <!-- Content Wrapper. Contains page content -->
  @include('admin.coba')
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