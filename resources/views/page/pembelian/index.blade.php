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
                                    <h4 class="mb-sm-0">Data Pembelian</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Data Pembelian</li>
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
                                        <b>Data Pembelian</b>
                                        <div style="float:right">
                                            <a href="/pembelian/form" class="btn btn-outline-success btn-md"><b>+</b> Tambah Data</a>
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
                                                        <th scope="col">Action</th>
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
                                                        <td>
                                                            <a href="/pembelian/edit/{{ $item->id }}" class="btn btn-outline-secondary btn-sm"><i class="fa fa-pencil-alt"><br>Edit</i></a>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-alt"><br>Hapus</i></a>

                                                            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Yakin No Faktur <b>{{ $item->id }}</b> ingin dihapus?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                            <form method="post" action="/pembelian/{{$item->id}}">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                    <button type="submit" class="btn btn-primary">Hapus</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
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
