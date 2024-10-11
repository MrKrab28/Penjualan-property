<x-layout title="Property Detail">
    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Property</h3>
                </div>
                <div class="card-body" >
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
                        <h4 class="mb-0">{{ $property->property }} - {{ $property->types->nama_type }}</h4>
                        <p>{{ $property->spesifikasi->nama_spesifikasi }}</p>
                        <p>{{ $property->deskripsi  }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card my-2 my-md-0">
                <div class="card-header">
                    <h3 class="card-title">property Detail</h3>
                </div>
                <div class="card-body">
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
                    <div class="mb-3">
                        <h5 class="mb-0">Harga</h5>
                        <p>
                            Rp. {{ $property->harga }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <h5 class="mb-0">Harga Book</h5>
                        <p>
                            Rp. {{ $property->harga_book }}
                        </p>
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
                            <x-component.button-icon icon="bx-edit" label="Edit" color="primary"
                                href="{{ route('property.edit', $property) }}" />
                            {{-- @can('delete', $property) --}}
                                <form action="{{ route('property.destroy', $property) }}" method="post" class="d-inline">
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
