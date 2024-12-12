<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* CSS Kustom */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 10px;
        }

        .text-center {
            text-align: center;
        }

        /* Grid Layout untuk memastikan kolom berada dalam satu baris */
        .row {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Membuat 2 kolom dalam satu baris */
            gap: 20px; /* Memberikan jarak antar kolom */
            margin: 0;
        }

        .col-lg-4 {
            box-sizing: border-box;
        }

        /* Card Styling */
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
            padding: 15px;
            transition: all 0.3s ease-in-out;
        }

        .card-header {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-body {
            font-size: 14px;
            line-height: 1.6;
        }

        .mb-3 {
            margin-bottom: 15px;
        }

        .btn {
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-primary:hover,
        .btn-danger:hover {
            opacity: 0.8;
        }

        .sekret p {
            font-size: 14px;
            color: #666;
        }

        .text-end {
            text-align: right;
        }

        /* For images */
        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        /* Page Break */
        .page-break {
            page-break-after: always;
        }

    </style>
</head>

<body>

    <div class="container">
        @foreach ($users as $user)
            @php
                $penjualan = $user->penjualan->first(); // Ambil penjualan pertama, jika ada
            @endphp

            @if ($penjualan)
                <div class="text-center">
                    <img src="{{ asset('path/to/logo.png') }}" width="200" alt="Logo Perusahaan">
                    <h3>PT. EDI MITRA KARYA INDONESIA</h3>
                    <div class="sekret">
                        <p>Perumahan, Jl. Bumi Permata Sudiang 2 No.18, Kel.Sudiang Raya, Kec.Biringkanaya, Kota
                            Makassar, Sulawesi Selatan 90552</p>
                        <p>Email: emk.putrakarya@gmail.com</p>
                    </div>
                </div>

                <h3 style="margin-bottom: 10px">Laporan Penjualan</h3>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Customer</h3>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <h5>Foto Ktp</h5>
                                    <p>Foto KTP Path:
                                        {{ asset('img/penjualan/foto_ktp/' . ($penjualan->foto_ktp ?? '')) }}</p>
                                    <img src="{{ public_path('img/penjualan/foto_ktp/' . $penjualan->foto_ktp) }}"
                                        width="220px" height="150px" alt="Foto KTP">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card my-2 my-md-0">
                            <div class="card-header">
                                <h3 class="card-title">Detail</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <h5 class="mb-0">Property</h5>
                                            <p>{{ $penjualan->property->property ?? '' }}</p>
                                        </div>
                                        <div class="mb-3">
                                            <h5 class="mb-0">Blok / No.Rumah</h5>
                                            <p>{{ $penjualan->property->lokasi ?? '' }}</p>
                                        </div>
                                        <div class="mb-3">
                                            <h5 class="mb-0">Type</h5>
                                            <p>{{ $penjualan->property->types->nama_type ?? '' }}</p>
                                        </div>
                                        <div class="mb-3">
                                            <h5 class="mb-0">Nominal - {{ $penjualan->metodes->nama ?? '' }}</h5>
                                            <p>Rp. {{ number_format($penjualan->nominal_harga ?? 0) }}</p>
                                        </div>
                                        <div class="mb-3">
                                            <h5 class="mb-0">Nominal - DP</h5>
                                            <p>Rp. {{ number_format($penjualan->nominal_dp ?? 0) }}</p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="mb-0">Spesifikasi</h4>
                                        <p>{{ $penjualan->property->spesifikasi->nama_spesifikasi ?? '' }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <h5 class="mb-0">Luas Tanah</h5>
                                            <p>{{ $penjualan->property->spesifikasi->luas_tanah ?? '' }}
                                                (m<sup>2</sup>)</p>
                                        </div>
                                        <div class="mb-3">
                                            <h5 class="mb-0">Jumlah Kamar</h5>
                                            <p>{{ $penjualan->property->spesifikasi->kamar ?? '' }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <h5 class="mb-0">Luas Bangunan</h5>
                                            <p>{{ $penjualan->property->spesifikasi->luas_bangunan ?? '' }}
                                                (m<sup>2</sup>)</p>
                                        </div>
                                        <div class="mb-3">
                                            <h5 class="mb-0">Jumlah Toilet</h5>
                                            <p>{{ $penjualan->property->spesifikasi->wc ?? '' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    @if (($penjualan->metodes->nama ?? '') != 'Cash')
                                        <a href="{{ route('cicilan.detail', $penjualan) }}?penjualan={{ $penjualan->id }}"
                                            class="btn btn-primary">Angsuran</a>
                                    @endif
                                    <form action="{{ route('penjualan.delete', $penjualan) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="page-break"></div>
            @else
                <p>Data penjualan tidak tersedia untuk {{ $user->name }}</p>
            @endif
        @endforeach
    </div>

</body>
</html>
