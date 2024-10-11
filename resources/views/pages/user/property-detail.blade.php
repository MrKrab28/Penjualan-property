<x-user.layout>
    <style>
        .property-details .carousel-item {
            height: 700px;
            /* Sesuaikan tinggi sesuai kebutuhan */
            overflow: hidden;
        }

        .property-details .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
    </style>
    <section class="ftco-section ftco-property-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="property-details" id="property-detail">
                        @if ($property->images->count() > 0)

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($property->images as $image)
                                        <div class="carousel-item @if ($loop->first) active @endif">


                                            <img class="d-block w-100"
                                                src="{{ asset('img/properties/' . $image->filename) }}"
                                                alt="{{ $image->filename }}">
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endif
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>


            <div class="text">
                <span class="subheading">{{ $property->lokasi }}</span>
                <h2>{{ ucfirst($property->property) }}
                    ({{ $property->types->nama_type }}/{{ $property->spesifikasi->nama_spesifikasi }})</h2>
            </div>
            <div class="row">
                <div class="col-md-12 pills">
                    <div class="bd-example bd-example-tabs">
                        <div class="d-flex">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill"
                                        href="#pills-description" role="tab" aria-controls="pills-description"
                                        aria-expanded="true">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill"
                                        href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer"
                                        aria-expanded="true">Description</a>
                                </li>

                            </ul>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                                aria-labelledby="pills-description-tab">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check"><span class="fa fa-check-circle"></span>Luas Tanah :
                                                {{ $property->spesifikasi->luas_tanah }} m<sup>2</sup> </li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Bed Rooms:
                                                {{ $property->spesifikasi->kamar }}</li>


                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check"><span class="fa fa-check-circle"></span>Luas Bangunan :
                                                {{ $property->spesifikasi->luas_bangunan }} m<sup>2</sup></li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Bath Rooms:
                                                {{ $property->spesifikasi->wc }}
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="features">
                                            <li class="check"><span class="fa fa-check-circle"></span>Lokasi :
                                                {{ $property->lokasi }}</li>


                                        </ul>
                                    </div>

                                    <a href="{{ route('user.book', $property->id) }}" class="btn btn-primary rounded-pill py-3 px-4 mt-3">Book Now</a></p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel"
                                aria-labelledby="pills-manufacturer-tab">
                                <p>{{ $property->deskripsi }}</p>
                                <p>{{ $property->types->keterangan }}</p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-user.layout>
