<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/app.css') }}">
    <style>
        /* CSS Kustom */

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
                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Customer</h3>
                            </div>
                            <div class="card-body">

                                    <h5>Foto Ktp</h5>
                                    <img src="{{ public_path('img/penjualan/foto_ktp/' . $penjualan->foto_ktp) }}"
                                        width="220px" height="150px" alt="Foto KTP">

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
                                                (m<sup>2</sup>)
                                            </p>
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

                            </div>
                        </div>
                    </div>

                </div>
                <div class="page-break"></div>
            @else
                <p>Data penjualan tidak tersedia untuk {{ $user->nama }}</p>
            @endif
        @endforeach
    </div>

</body>

</html>
