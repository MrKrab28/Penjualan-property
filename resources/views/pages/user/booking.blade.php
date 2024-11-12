<x-user.layout title="Books Your Property">
    <style>
        .carousel-image-container {
            width: 100%;
            height: 300px;
            /* Atur tinggi sesuai kebutuhan */
            overflow: hidden;
        }

        .carousel-image-container img {
            object-fit: cover;
        }
    </style>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Property</h3>
                    </div>
                    <div class="card-body">
                        @if ($property->images->count() > 0)
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($property->images as $image)
                                        <div class="carousel-item @if ($loop->first) active @endif">
                                            <div class="carousel-image-container">
                                                <img class="d-block w-100 h-100 object-fit-cover"
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
                        <div class="mt-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-0">{{ $property->property }} - {{ $property->types->nama_type }}
                                    </h4>
                                    <p>{{ $property->spesifikasi->nama_spesifikasi }}</p>

                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <h5 class="mb-0">Harga</h5>
                                        <p>Rp. {{ $property->harga }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="mb-0">Harga Book</h5>
                                        <p>Rp. {{ $property->harga_book }}</p>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card my-2 my-md-0">
                    <div class="card-header">
                        <h3 class="card-title">Books Property</h3>
                    </div>
                    <div class="card-body">


                        <div class="row">
                            <div class="col-md-6">
                                <x-form.input label="Nama" value="{{ auth()->user()->nama }}" name="nama"
                                    id="namaInput" :readonly="true" :required="true" />
                                <x-form.input label="No. Rekening" name="no_rek" id="norekInput" :required="true" />


                                <x-form.input label="Harga" name="harga" id="hargaInput" :isNumeric="true"
                                    :required="true" />
                                <x-form.input label="Harga Book" name="harga_book" id="harga_bookInput"
                                    :isNumeric="true" :required="true" />
                            </div>
                            <div class="col-md-6">


                                <x-form.input label="Harga" name="harga" id="hargaInput" :isNumeric="true"
                                    :required="true" />

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user.layout>
