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
                                    <h4 class="mb-sm-0">Data Barang</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Basic Tables</li>
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
                                        <b>Data Barang</b>
                                        <div style="float:right">
                                            <a href="/barang/form" class="btn btn-outline-success btn-md"><b>+</b> Tambah Data</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Barang</th>
                                                    <th>Merek</th>
                                                    <th>Jumlah</th>
                                                    <th>Harga Satuan</th>  
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($barang as $item)
                                                <tr>
                                                    <td>{{$nomor++}}</td>
                                                    <td>{{$item->nama_barang}}</td>
                                                    <td>{{$item->mereks->nama}}</td>
                                                    <td>{{$item->jumlah}}</td>
                                                    <td>{{$item->harga}}</td>
                                                    <td>
                                                        <a href="/barang/edit/{{$item->id}}" class="btn btn-outline-secondary btn-sm"><i class="fa fa-pencil-alt"><br>Edit</i></a>
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-alt"><br>Hapus</i></a>

                                                        <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Yakin data <b>{{ $item->nama_barang }}</b> ingin dihapus?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                        <form method="post" action="/barang/{{$item->id}}">
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
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            </div>
            <!-- end main content-->

@endsection