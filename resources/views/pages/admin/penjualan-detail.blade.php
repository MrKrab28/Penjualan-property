<x-layout title="Penjualan Detail">
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
                                <div class="mb-3">
                                    <h5 class="mb-0">Marketing - Agency </h5>
                                    <p>
                                        {{ $penjualan->agents->nama }} - {{ $penjualan->agents->agency }}
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
                        <div class="text-end">
                            @if ($metodes->nama != 'Cash')

                            <x-component.button-icon icon="bx-credit-card" label="Angsuran" color="primary"
                            href="{{ route('cicilan.detail', $penjualan) }}?penjualan={{ $penjualan->id }}" />

                            @endif
                            {{-- @can('delete', $property) --}}
                            <form action="{{ route('penjualan.delete', $penjualan) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <x-component.button-icon icon="bx-trash" label="Delete" color="danger" type="submit" />
                            </form>
                            {{-- @endcan --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
