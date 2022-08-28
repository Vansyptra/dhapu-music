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
                                    <h4 class="mb-sm-0">Form Tambah Pembelian</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Tambah Pembelian</li>
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
                                        <form method="post" action="/pembelian/store">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Tanggal</label>
                                                <input type="date" class="form-control" name="tanggal">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nama barang - merek</label>
                                                <select name="id_barang" id="" class="form-control">
                                                    @foreach ($barang as $item)
                                                        <option value="{{$item->id}}">{{$item->nama_barang}} - {{$item->mereks->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Quantity</label>
                                                <input type="text" class="form-control" name="qty">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Total Harga</label>
                                                <input type="text" class="form-control" name="total_harga">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                                            <a href="/pembelian" class="btn btn-danger">Batal</a>
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