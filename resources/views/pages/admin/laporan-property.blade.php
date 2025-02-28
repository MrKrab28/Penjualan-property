<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Property</title>
    <style>
         @page {
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
            table-layout: auto; /* Menyesuaikan lebar berdasarkan konten */
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 5px;
            font-size: 10px;
            word-wrap: break-word; /* Menghindari teks meluap */
            vertical-align: middle; /* Menyelaraskan vertikal */
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: center; /* Tengah horizontal untuk header */
        }

        td {
            text-align: left; /* Rata kiri untuk semua td */
        }

        .text-center {
            text-align: center;
        }

        /* Membungkus tabel dengan overflow-x agar dapat digulir jika diperlukan */
        .table-wrapper {
            overflow-x: auto;
        }
    </style>
</head>

<body>
    <div class="text-center">
        <img src="{{ public_path('assets/admin/img/LOGO-EMK.png') }}" width="100" alt="Logo Perusahaan">
        <h3>PT. EDI MITRA KARYA INDONESIA</h3>
        <div class="sekret">
            <p>Perumahan, Jl. Bumi Permata Sudiang 2 No.18, Kel.Sudiang Raya, Kec.Biringkanaya, Kota Makassar, Sulawesi Selatan 90552</p>
            <p>Email: emk.putrakarya@gmail.com</p>
        </div>
    </div>

    <h3 style="margin-bottom: 10px">Laporan Property</h3>
    {{-- <table style="width: 100%;">
        <thead>
            <tr>
                <th width="3%">No</th>
                <th>Property</th>
                <th>Type</th>
                <th>Blok/No</th>
                <th>Luas Tanah</th>
                <th>Luas Bangunan</th>
                <th>Harga</th>


            </tr>
        </thead>
        <tbody>
            @forelse ($property as $property)

                <tr>
                    <td >{{ $loop->iteration }}</td>
                    <td>{{ $property->property }}</td>
                    <td>{{ $property->types->nama_type }}</td>
                    <td>{{ $property->lokasi }}</td>
                    <td>{{ $property->spesifikasi->luas_tanah }} m2</td>
                    <td>{{ $property->spesifikasi->luas_bangunan }} m2</td>
                    <td>{{ $property->spesifikasi->nama_spesifikasi }}</td>


                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">Tidak ada data</td>
                </tr>
            @endforelse

        </tbody>
    </table> --}}
    <div class="table-wrapper">
        <table>
            <thead>
                @php
                    $allMetodes = [];
                    $allHarga = [];
                    foreach ($property as $item) {
                        foreach ($item->harga as $harga) {
                            $allMetodes[$harga->metode->nama] = $harga->metode->nama;
                            $allHarga[$harga->metode->nama] = $harga->nominal_dp;
                        }
                    }
                @endphp
                <tr>
                    <th rowspan="2" width="4%">No</th>
                    <th rowspan="2">Property</th>
                    <th rowspan="2">Type</th>
                    <th rowspan="2">Luas Bangunan</th>
                    <th rowspan="2">Luas Tanah</th>
                    <th rowspan="2">Blok / No</th>
                    <th colspan="{{ count($allMetodes) }}">Harga Pokok</th>
                    <th colspan="{{ count($allMetodes) }}">Harga DP</th> <!-- Menggunakan jumlah allMetodes untuk Harga DP -->
                </tr>
                <tr>
                    @foreach ($allMetodes as $metode)
                        <th>{{ $metode }}</th>
                    @endforeach
                    @foreach ($allMetodes as $metode)
                        <th>{{ $metode }} </th> <!-- Menambahkan kolom Harga DP untuk setiap metode -->
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @forelse ($property as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->property }}</td>
                        <td>{{ $item->types->nama_type }}</td>
                        <td>{{ $item->spesifikasi->luas_bangunan }} m<sup>2</sup></td>
                        <td>{{ $item->spesifikasi->luas_tanah }} m<sup>2</sup></td>
                        <td>{{ $item->lokasi }}</td>
                        <!-- Menampilkan harga untuk setiap metode -->
                        @foreach ($allMetodes as $metode)
                            @php
                                $hargaMetode = $item->harga->firstWhere('metode.nama', $metode);
                            @endphp
                            <td>{{ $hargaMetode ? 'Rp. ' . number_format($hargaMetode->nominal) : '-' }}</td>
                        @endforeach
                        <!-- Menampilkan harga DP untuk setiap metode -->
                        @foreach ($allMetodes as $metode)
                            @php
                                $harga_dp = $item->harga->firstWhere('metode.nama', $metode);
                            @endphp
                            <td>{{ $harga_dp ? 'Rp. ' . number_format($harga_dp->nominal_dp) : '-' }}</td>
                        @endforeach
                    </tr>
                @empty
                    <tr>
                        <td colspan="{{ 8 + count($allMetodes) * 2 }}" class="text-center">Tidak ada data</td> <!-- Perbaikan pada kolom total -->
                    </tr>
                @endforelse
            </tbody>
        </table>
</body>

</html>
