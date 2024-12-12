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
        <img src="" width="200" alt="Logo Perusahaan">
        <h3>PT. EDI MITRA KARYA INDONESIA</h3>
        <div class="sekret">
            <p>Perumahan, Jl. Bumi Permata Sudiang 2 No.18, Kel.Sudiang Raya, Kec.Biringkanaya, Kota Makassar, Sulawesi Selatan 90552</p>
            <p>Email: Email: emk.putrakarya@gmail.com</p>
        </div>
    </div>

    <h3>Laporan User</h3>

    <!-- Pembungkus tabel untuk responsivitas -->
    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Penjualan</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h5>Foto Ktp</h5>
                        <img src="{{ asset('img/penjualan/foto_ktp/' . $penjualan->foto_ktp) }}" width="420px"
                        height="250px" alt="">
                    </div>
                    @if ($property->images->count() > 0)
                        <x-component.img-carousel id="property" height="300px">
                            @foreach ($property->images as $image)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img src="{{ asset('img/properties/' . $image->filename) }}" class="d-block"
                                        alt="{{ $image->filename }}">
                                </div>
                            @endforeach
                        </x-component.img-carousel>
                    @else
                        <div class="d-flex justify-content-center align-items-center bg-secondary rounded mb-5"
                            style="height: 300px">
                            <span class="text-white">No Image</span>
                        </div>
                    @endif
                    <div class="mt-3">
                        <h4 class="mb-0">{{ $penjualan->nama_property }} - {{ $penjualan->nama_type }}</h4>
                        {{-- <p>Rp.{{ number_format($penjualan->nominal_harga)  }}</p>

                        <p>Rp.{{ number_format($penjualan->nominal_dp)  }}</p> --}}
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card my-2 my-md-0">
                <div class="card-header">
                    <h3 class="card-title">Penjualan Detail</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">


                            <div class="mb-3">
                                <h5 class="mb-0">Property</h5>
                                <p>{{ $property->property }}</p>
                            </div>
                            <div class="mb-3">
                                <h5 class="mb-0">Lokasi</h5>
                                <p>{{ $property->lokasi }}</p>
                            </div>
                            <div class="mb-3">
                                <h5 class="mb-0">Type</h5>
                                <p>{{ $property->types->nama_type }}</p>
                            </div>

                        </div>
                        <div class="col-md-6">

                                <div class="mb-3">
                                    <h5 class="mb-0">Nominal - {{ $metodes->nama }} </h5>
                                    <p>
                                        Rp. {{ number_format($penjualan->nominal_harga) }}
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <h5 class="mb-0">Nominal - DP </h5>
                                    <p>
                                        Rp. {{ number_format($penjualan->nominal_dp) }}
                                    </p>
                                </div>

                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="mb-5 mt-1">
                            <h4 class="mb-0">Spesifikasi</h4>
                            <p>{{ $property->spesifikasi->nama_spesifikasi }}</p>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h5 class="mb-0">Luas Tanah</h5>
                                <p>{{ $property->spesifikasi->luas_tanah }} (m<sup>2</sup>)</p>
                            </div>
                            <div class="mb-3">

                                <h5 class="mb-0">Jumlah Kamar</h5>
                                <p>{{ $property->spesifikasi->kamar }}</p>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h5 class="mb-0">Luas Bangunan</h5>
                                <p>{{ $property->spesifikasi->luas_bangunan }} (m<sup>2</sup>)</p>
                            </div>

                            <div class="mb-3">
                                <h5 class="mb-0">Jumlah Toilet</h5>
                                <p>{{ $property->spesifikasi->wc }}</p>
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
