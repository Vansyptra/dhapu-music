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
                                <h4 class="mb-sm-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dhapu Music</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <b class="card-title">Data Penjualan</b>
                                            <div style="float:right">
                                                <a href="/penjualan" class="btn btn-outline-success btn-md"><b>+</b> Edit Data</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No Faktur</th>
                                                        <th scope="col">Tanggal</th>
                                                        <th scope="col">Nama Pelayan</th>
                                                        <th scope="col">Nama Barang</th>
                                                        <th scope="col">Quantity</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($penjualan as $item)
                                                    <tr>
                                                        <td>{{$item->id}}</td>
                                                        <td>{{$item->tanggal}}</td>
                                                        <td>{{$item->anggotas->nama}}</td>
                                                        <td>{{$item->barangs->nama_barang}} - {{$item->barangs->mereks->nama}}</td>
                                                        <td>{{$item->qty}}</td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="5">Tidak Ada Data
                                                    </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <b class="card-title">Data Pembelian</b>
                                            <div style="float:right">
                                                <a href="/pembelian" class="btn btn-outline-success btn-md"><b>+</b> Edit Data</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No Faktur</th>
                                                        <th scope="col">Tanggal</th>
                                                        <th scope="col">Nama Barang</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col">Total Harga</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($pembelian as $item)
                                                    <tr>
                                                        <td>{{$item->id}}</td>
                                                        <td>{{$item->tanggal}}</td>
                                                        <td>{{$item->barangs->nama_barang}} - {{$item->barangs->mereks->nama}}</td>
                                                        <td>{{$item->qty}}</td>
                                                        <td>{{$item->total_harga}}</td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="5">Tidak Ada Data
                                                    </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <b class="card-title">Data Barang</b>
                                            <div style="float:right">
                                                <a href="/barang" class="btn btn-outline-success btn-md"><b>+</b> Edit Data</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Id Barang</th>
                                                        <th>Nama Barang</th>
                                                        <th>Merek</th>
                                                        <th>Jumlah</th>
                                                        <th>Harga Satuan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($barang as $item)
                                                    <tr>
                                                        <td>{{$item->id}}</td>
                                                        <td>{{$item->nama_barang}}</td>
                                                        <td>{{$item->mereks->nama}}</td>
                                                        <td>{{$item->jumlah}}</td>
                                                        <td>{{$item->harga}}</td>
                                                    </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="5">Tidak Ada Data
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <b class="card-title">Data Merek</b>
                                            <div style="float:right">
                                                <a href="/Merek" class="btn btn-outline-success btn-md"><b>+</b> Edit Data</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Id Merek</th>
                                                        <th scope="col">Merek</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($merek as $item)
                                                    <tr>
                                                        <td>{{$item->id}}</td>
                                                        <td>{{$item->nama}}</td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="2">Tidak Ada Data
                                                    </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    @endsection

    