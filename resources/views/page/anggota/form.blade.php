@extends('layout.nav')
@section('content')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Form Tambah Anggota</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Tambah Anggota</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="post" action="/anggota/store">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Nama Anggota</label>
                                                <input type="text" class="form-control" name="nama">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Alamat</label>
                                                <input type="text" class="form-control" name="alamat">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">No. Handphone</label>
                                                <input type="text" class="form-control" name="no_hp">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                                            <a href="/anggota" class="btn btn-danger">Batal</a>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->   
            </div>
            <!-- end main content-->

@endsection