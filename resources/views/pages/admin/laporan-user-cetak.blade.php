<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/app.css') }}">
    <style>
        @page {

            margin: 5mm;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 15px;
            color: #333;
            line-height: 1.4;
        }

        <style>@page {
            size: A4 landscape;
            margin: 5mm;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 10px;
            color: #333;
            line-height: 1.4;
        }

        h3 {
            text-align: center;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: auto;
            /* Menyesuaikan lebar berdasarkan konten */
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 5px;
            font-size: 10px;
            word-wrap: break-word;
            /* Menghindari teks meluap */
            vertical-align: middle;
            /* Menyelaraskan vertikal */
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: center;
            /* Tengah horizontal untuk header */
        }

        td {
            text-align: left;
            /* Rata kiri untuk semua td */
        }

        .text-center {
            text-align: center;
        }

        /* Membungkus tabel dengan overflow-x agar dapat digulir jika diperlukan */
        .table-wrapper {
            overflow-x: auto;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">


        <div class="text-center">
            <img src="{{ public_path('assets/admin/img/LOGO-EMK.png') }}" width="100">
            <h3>PT. EDI MITRA KARYA INDONESIA</h3>
            <div class="sekret">
                <p>Perumahan, Jl. Bumi Permata Sudiang 2 No.18, Kel.Sudiang Raya, Kec.Biringkanaya, Kota
                    Makassar, Sulawesi Selatan 90552</p>
                <p>Email: emk.putrakarya@gmail.com</p>
            </div>
        </div>




        <h3 class="mt-5">Laporan Detail User</h3>
        <div class="mt-4">


            <div class="text-center">
                <img src="{{ public_path('img/penjualan/foto_ktp/' . $penjualans[0]->foto_ktp) }}" width="200px">
            </div>


            <p>Nama : {{ $users->nama }}</p>
            <p>Email : {{ $users->email }}</p>
            <p>No. Handphone : {{ $users->no_hp }}</p>
        </div>
        <h3 class="mt-5">Riwayat Pembelian</h3>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Property</th>
                    <th>Type</th>
                    <th>Harga Property</th>
                    <th>Banyak Cicilan</th>
                    <th>Sisa Cicilan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($penjualans as $penjualan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $penjualan->nama_property }}</td>
                        <td>{{ $penjualan->nama_type }}</td>
                        <td>Rp.{{ number_format($penjualan->nominal_harga) }}</td>
                        <td>{{ $penjualan->jumlah_pembayaran }} x</td>
                        <td>{{ $penjualan->jumlah_pembayaran - $penjualan->cicilan->count() }} x</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>


    </div>

</body>

</html>
