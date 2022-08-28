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
                                    <h4 class="mb-sm-0">Data Laporan Pembelian</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Data Laporan Pembelian</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row g-3 col-12 align-items-center">
                                            <div class="mb-3 col-3">
                                                <label class="form-label">Tanggal Awal</label>
                                                <input type="date" class="form-control" id="tglawal" name="tglawal">
                                            </div>
                                            <div class="mb-3 col-3">
                                                <label class="form-label">Tanggal Akhir</label>
                                                <input type="date" class="form-control" id="tglakhir" name="tglakhir">
                                            </div>
                                            <div class="col" style="float:right">
                                                <a href="#" onclick="this.href='/pembelian/cetakPertanggal/'+document.getElementById('tglawal').value + '/' +document.getElementById('tglakhir').value" 
                                                target="_blank" class="btn btn-outline-success btn-md">Cetak Data</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
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
                                                        <td>{{$nomor++}}</td>
                                                        <td>{{$item->id}}</td>
                                                        <td>{{$item->tanggal}}</td>
                                                        <td>{{$item->barangs->nama_barang}} - {{$item->barangs->mereks->nama}}</td>
                                                        <td>{{$item->qty}}</td>
                                                        <td>{{$item->total_harga}}</td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="7">Tidak Ada Data
                                                    </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        </div>  <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            </div>
            <!-- end main content-->

@endsection
