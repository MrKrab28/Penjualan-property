<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
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

    <h3 style="margin-bottom: 10px">Laporan Penjualan</h3>
    <table style="width: 100%;">
        <thead>
            <tr>
                <th width="3%">No</th>
                <th>Type</th>
                <th>Blok/No</th>
                <th>Luas Tanah</th>
                <th>Metode</th>
                <th>Harga</th>
                <th>Nominal Dp</th>
                <th>Harga Pokok</th>
                <th>Nominal Angsuran</th>
                <th>Tenor</th>
                <th>Pembeli</th>
                <th>Tanggal</th>
                <th>Tanggal pembayaran Terakhir</th>
                <th>Marketing</th>

            </tr>
        </thead>
        <tbody>
            @forelse ($penjualans as $penjualan)
            @php
            $namaMetode = $metodes->where('id', $penjualan->metode)->first();
            $hargaProperty = $hargas->where('nominal', $penjualan->nominal_harga)->first();

            // Handle kasus ketika $hargaProperty null
            $nominal = $hargaProperty ? $hargaProperty->nominal : $penjualan->nominal_harga;
            $nominal_cicilan = $penjualan->jumlah_pembayaran > 0 ? ($nominal / $penjualan->jumlah_pembayaran) : 0;

            $property = $properties->where('property', $penjualan->nama_property)->first();
            $tanggalCicilanTerakhir = $penjualan->cicilan && $penjualan->cicilan->isNotEmpty() && $penjualan->cicilan->first() ? $penjualan->cicilan->first()->tgl_cicilan : null;
            @endphp
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $penjualan->nama_type }}</td>
                <td>{{ $property->lokasi }}</td>
                <td>{{ $property->spesifikasi->luas_tanah }} m2</td>
                <td>{{ $namaMetode->nama }}</td>
                <td>Rp.{{ number_format($nominal) }}</td>
                <td>Rp.{{ number_format( $penjualan->nominal_dp) }}</td>
                <td>Rp.{{ number_format($nominal - $penjualan->nominal_dp)  }}</td>
                @if ($penjualan->nominal_dp == 0 && $penjualan->lunas == false)
                <td class="text-success">Rp. - </td>
                @else
                <td>Rp.{{ number_format(round($nominal_cicilan))   }}</td>
                @endif
                <!-- <td>{{ $namaMetode->jumlah_pembayaran }}x</td> -->
                <td>{{ $penjualan->jumlah_pembayaran }}x</td>
                <td>{{ $penjualan->users->nama }}</td>
                <td>{{ Carbon\Carbon::parse($penjualan->tanggal)->isoFormat('DD MMMM YYYY') }}</td>

                <!-- <td>{{ Carbon\Carbon::parse($tanggalCicilanTerakhir)->isoFormat('DD MMMM YYYY') }}</td> -->
                @if($namaMetode->jumlah_pembayaran = 1 )
                <td>{{ Carbon\Carbon::parse($penjualan->tanggal)->format('d-m-Y') }}</td>
                @else
                <td>{{ $tanggalCicilanTerakhir ? \Carbon\Carbon::parse($tanggalCicilanTerakhir)->format('d-m-Y') : 'Belum Ada Data Cicilan' }}</td>
                @endif
                <td>{{ $penjualan->agents->nama }} - {{ $penjualan->agents->agency }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="12" class="text-center">Tidak ada data</td>
            </tr>
            @endforelse

        </tbody>
    </table>
</body>

</html>