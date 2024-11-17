<x-user.layout title="PT. Edy Mitra Karya">
    <div class="">


        {{-- <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                        <span class="subheading">What we offer</span>
                        <h2 class="mb-2">Featured Properties</h2>
                    </div>
                </div>
                <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="carousel-properties owl-carousel">


                            @foreach ($properties as $property)
                                <div class="item">
                                    <div class="property-wrap ftco-animate">


                                        @php
                                            $firstImage = $property->images->first();
                                        @endphp
                                        <a href="#" class="img"
                                            style="background-image: url({{ asset('img/properties/' . $firstImage->filename) }});">
                                            <div class="rent-sale">
                                                <span class="sale">Sale</span>
                                            </div>
                                            <p class="price"><span class="orig-price text-dark">Rp.
                                                    {{ $property->harga }}</span>
                                            </p>
                                        </a>

                                        <div class="text">
                                            <ul class="property_list">
                                                <li><span class="flaticon-bed"></span>{{ $property->types->nama_type }}
                                                </li>
                                                <li><span
                                                        class="flaticon-bathtub"></span>{{ $property->spesifikasi->nama_spesifikasi }}
                                                </li>

                                            </ul>
                                            <h3><a href="#">{{ $property->property }}</a></h3>
                                            <span class="location">Oakland</span>
                                            <a href="#"
                                                class="d-flex align-items-center justify-content-center btn-custom">
                                                <span class="fa fa-link"></span>
                                            </a>
                                            <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
                                                <div class="d-flex align-items-center">
                                                    <div class="img"
                                                        style="background-image: url(images/person_1.jpg);">
                                                    </div>
                                                    <h3 class="ml-2">John Dorf</h3>
                                                </div>
                                                <span class="text-right">2 weeks ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section> --}}


        <section class="ftco-section ftco-no-pt mt-0 mb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 heading-section text-center ftco-animate mb-5 mt-5">
                        <span class="subheading">What we offer</span>
                        <h2 class="mb-2">Featured Properties</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($properties as $property)
                        @php
                            $firstImage = $property->images->first();
                        @endphp
                        <div class="col-md-4">
                            <div class="item">
                                <div class="property-wrap ftco-animate">
                                    <div class="card">
                                        <a href="{{ route('user.property-detail', $property->id) }}#property-detail" class="search-place img"
                                            style="background-image: url({{ asset('img/properties/' . $firstImage->filename) }});">
                                            <div class="desc">
                                                <div class="rent-sale">
                                                    <span class="sale">Sale</span>
                                                </div>
                                                <p class="price"><span class="orig-price text-dark">Rp.
                                                       {{ $property->hargaCash->nominal }} </span>
                                                </p>
                                            </div>
                                        </a>
                                        <div class="text">
                                            <ul class="property_list">
                                                <li><span class="flaticon-bed"></span>{{ $property->types->nama_type }}
                                                </li>
                                                <li><span
                                                        class="flaticon-bathtub"></span>{{ $property->spesifikasi->nama_spesifikasi }}
                                                </li>

                                            </ul>
                                            <h3><a href="{{ route('user.property-detail', $property->id) }}#property-detail">{{ $property->property }}</a></h3>
                                            <span class="location">{{ Str::limit($property->lokasi, 35) }}</span>
                                            <a href="#"
                                                class="d-flex align-items-center justify-content-center btn-custom">
                                                <span class="fa fa-link"></span>
                                            </a>
                                            <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
                                                <div class="d-flex align-items-center">
                                                    <div class="img"
                                                        style="background-image: url(images/person_1.jpg);">
                                                    </div>

                                                </div>
                                                <span class="text-right">
                                                    <a href="{{ route('user.property-detail', $property->id) }}#property-detail" type="button" class="btn btn-primary rounded-pill">Detail </a></span>

                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
                <div class="container mb-5 mt-0">

                    <div class="row">
                        <div class="col-md-12 text-center heading-section heading-section-white ftco-animate">

                            <a href="{{ route('user.property') }}#properties" type="button" class="btn btn-primary rounded-pill justify-content-center">View More</a>
                        </div>
                    </div>
                </div>
            </section>

        <section class="ftco-section services-section bg-darken">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
                        <span class="subheading">Work flow</span>
                        <h2 class="mb-3">How it works</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services services-2">
                            <div class="media-body py-md-4 text-center">
                                <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>01</span>
                                    <img src="images/blob.svg" alt="">
                                </div>
                                <h3>Evaluate Property</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services services-2">
                            <div class="media-body py-md-4 text-center">
                                <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>02</span>
                                    <img src="images/blob.svg" alt="">
                                </div>
                                <h3>Meet Your Agent</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services services-2">
                            <div class="media-body py-md-4 text-center">
                                <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>03</span>
                                    <img src="images/blob.svg" alt="">
                                </div>
                                <h3>Close the Deal</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services services-2">
                            <div class="media-body py-md-4 text-center">
                                <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>04</span>
                                    <img src="images/blob.svg" alt="">
                                </div>
                                <h3>Have Your Property</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-no-pb ftco-no-pt">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 order-md-last d-flex align-items-stretch">
                        <div class="img w-100 img-2 mr-md-2" style="background-image: url(images/about.jpg);"></div>
                        <div class="img w-100 img-2 ml-md-2" style="background-image: url(images/about-2.jpg);"></div>
                    </div>
                    <div class="col-md-5 wrap-about py-md-5 ftco-animate">
                        <div class="heading-section pr-md-5">
                            <h2 class="mb-4">Ecoverde Real Estate</h2>

                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.
                                It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                            </p>
                            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from
                                it
                                would have been rewritten a thousand times and everything that was left from its origin
                                would be the word "and" and the Little Blind Text should turn around and return to its
                                own,
                                safe country. But nothing the copy said could convince her and so it didn’t take long
                                until
                                a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and
                                dragged
                                her into their agency, where they abused her for their.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-counter img" id="section-counter">
            <div class="container">
                <div class="row pt-md-5">
                    <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 py-5 mb-4">
                            <div class="text text-border d-flex align-items-center">
                                <strong class="number" data-number="1000">0</strong>
                                <span>Area <br>Population</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 py-5 mb-4">
                            <div class="text text-border d-flex align-items-center">
                                <strong class="number" data-number="2500">0</strong>
                                <span>Total <br>Properties</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 py-5 mb-4">
                            <div class="text text-border d-flex align-items-center">
                                <strong class="number" data-number="500">0</strong>
                                <span>Average <br>House</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 py-5 mb-4">
                            <div class="text d-flex align-items-center">
                                <strong class="number" data-number="67">0</strong>
                                <span>Total <br>Branches</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-user.layout>
