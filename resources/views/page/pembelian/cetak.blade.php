<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
        <title>Dhapu Music</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Pembelian</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
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
                @foreach ($pembelian as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->tanggal}}</td>
                    <td>{{$item->barangs->nama_barang}} - {{$item->barangs->mereks->nama}}</td>
                    <td>{{$item->qty}}</td>
                    <td>{{$item->total_harga}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>