<x-user.layout title="Cicilan Anda">
    <style>
        .carousel-image-container {
            width: 100%;
            height: 300px;
            overflow: hidden;
        }

        .carousel-image-container img {
            object-fit: cover;
        }

        .badge {
            font-size: 14px;
            padding: 5px 10px;
        }
    </style>

    <div class="container mt-5">
        <div class="row">
            {{-- Bagian Properti --}}
            @if ($property)
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detail Properti</h3>
                        </div>
                        <div class="card-body">
                            {{-- Jika properti memiliki gambar --}}
                            @if ($property->images->count() > 0)
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($property->images as $image)
                                            <div class="carousel-item @if ($loop->first) active @endif">
                                                <div class="carousel-image-container">
                                                    <img class="d-block w-100"
                                                        src="{{ asset('img/properties/' . $image->filename) }}"
                                                        alt="{{ $image->filename }}">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            @endif

                            {{-- Informasi Properti --}}
                            <div class="mt-3">
                                <h4 class="mb-0">{{ $property->property }} - {{ $property->types->nama_type }}</h4>
                                <p>{{ $property->spesifikasi->nama_spesifikasi }}</p>
                                <p><strong>Lokasi : </strong> {{ $property->lokasi }}</p>
                                <p><strong>Harga : </strong> Rp.
                                    {{ number_format($property->hargaCash->nominal, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Bagian Penjualan --}}
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h4>Your Property</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="mb-0">Customer</h5>
                                <p>{{ auth()->user()->nama }}</p>
                                <h5 class="mb-0">No.Handphone</h5>
                                <p>{{ auth()->user()->no_hp }}</p>
                                <h5 class="mb-0">Email</h5>
                                <p>{{ auth()->user()->email }}</p>
                                <h5 class="mb-0">No.Rekening</h5>
                                <p>{{ $penjualan->no_rek }}</p>

                            </div>
                            <div class="col-md-6">
                                <h5 class="mb-0">Property</h5>
                                <p>{{ $penjualan->nama_property }}</p>
                                <h5 class="mb-0">Harga Property</h5>
                                <p>Rp. {{ number_format($penjualan->nominal_harga) }}</p>
                                <h5 class="mb-0">Nominal Angsuran</h5>
                                {{-- <p>Rp. {{ number_format($penjualan->nominal_harga / $penjualan->jumlah_pembayaran) }}</p> --}}
                                <p>Rp. {{ number_format(round($penjualan->nominal_harga / $penjualan->jumlah_pembayaran)) }}


                                </p>
                                <h5 class="mb-0">Banyak Cicilan</h5>
                                <p>{{ $penjualan->jumlah_pembayaran }} x</p>
                                <h5 class="mb-0">Sisa Cicilan</h5>
                                <p>{{ $penjualan->jumlah_pembayaran - $penjualan->cicilan->count() }} x</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                    <x-component.datatable id="propertyTable">
                                        <thead>
                                            <th>#</th>
                                            <th>Nominal Angsuran</th>
                                            <th>Tanggal Pembayaran</th>

                                        </thead>
                                        <tbody>
                                            @forelse ($penjualan->cicilan as $angsuran)
                                                <tr>
                                                    <td>{{ $loop->iteration }} </td>
                                                    <td>Rp. {{ number_format($angsuran->nominal_cicilan) }} </td>
                                                    <td>{{ Carbon\Carbon::parse($angsuran->tgl_cicilan)->IsoFormat('DD MMMM YY') }}
                                                    </td>

                                                </tr>
                                            @empty
                                                <tr>

                                                    <td colspan="3" class="text-center">Tidak Ada Data </td>
                                                </tr>
                                            @endforelse

                                </tbody>
                                </x-component.datatable>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user.layout>
