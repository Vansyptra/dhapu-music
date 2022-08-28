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
                                    <h4 class="mb-sm-0">Form Edit Penjualan</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Tambah Penjualan</li>
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
                                        <form method="post" action="/penjualan/{{$penjualan->id}}">
                                            @csrf
                                            @method('put')
                                            <div class="mb-3">
                                                <label class="form-label">Tanggal</label>
                                                <input type="date" value="{{$penjualan->tanggal}}" class="form-control" name="tanggal">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nama Pelayan</label>
                                                <select name="anggota" id="" class="form-control">
                                                    @foreach ($anggota as $item)
                                                        <option value="{{$item->id}} {{$penjualan->anggotas_id == $item->id ? 'selected' : ''}}">{{$item->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nama barang</label>
                                                <select name="barang" id="" class="form-control">
                                                    @foreach ($barang as $item)
                                                        <option value="{{$item->id}}" {{$penjualan->barangs_id == $item->id ? 'selected' : ''}}>{{$item->nama_barang}} - {{$item->mereks->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Quantity</label>
                                                <input type="text" value="{{$penjualan->qty}}" class="form-control" name="qty">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Edit Data</button>
                                            <a href="/penjualan" class="btn btn-danger">Batal</a>
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