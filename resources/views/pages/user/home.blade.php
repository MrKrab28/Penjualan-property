<x-user.layout title="PT. Edy Mitra Karya">


    <div class="">

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
                                        <a href="{{ route('user.property-detail', $property->id) }}#property-detail"
                                            class="search-place img"
                                            style="background-image: url({{ asset('img/properties/' . $firstImage->filename) }});">
                                            <div class="desc">
                                                <div class="rent-sale">
                                                    <span class="sale">Sale</span>
                                                </div>
                                                <p class="price"><span class="orig-price text-dark">Rp.
                                                        {{ number_format($property->hargaCash->nominal) }} </span>
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
                                            <h3><a
                                                    href="{{ route('user.property-detail', $property->id) }}#property-detail">{{ $property->property }}</a>
                                            </h3>
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
                                                    <a href="{{ route('user.property-detail', $property->id) }}#property-detail"
                                                        type="button" class="btn btn-primary rounded-pill">Detail
                                                    </a></span>

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

                        <a href="{{ route('user.property') }}#properties" type="button"
                            class="btn btn-primary rounded-pill justify-content-center">View More</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section services-section bg-darken">
            <div class="container">
                <div class="row justify-content-center">

                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services services-2">
                            <div class="media-body py-md-0 text-center">

                                <p>Tim kami memiliki keahlian dan pengetahuan mendalam tentang pasar properti lokal.
                                    Kami dapat memberikan saran dan rekomendasi yang tepat sesuai dengan kebutuhan dan
                                    preferensi klien.
                                    Pengelolaan Portofolio: Kami membantu klien mengelola portofolio properti mereka,
                                    termasuk pemantauan kondisi, perawatan, dan optimalisasi investasi.
                                    Jaringan Agen Terpercaya: Kami bekerja sama dengan agen properti terkemuka di
                                    wilayah ini, sehingga dapat menawarkan pilihan properti yang berkualitas dan sesuai
                                    bagi klien.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>

                </div>
            </div>
        </section>

        <section class="ftco-section ftco-no-pb ftco-no-pt">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 order-md-last d-flex align-items-stretch">
                        <div class="img w-100 img-2 mr-md-2" style="background-image: url(images/about.jpg);"></div>
                        <div class="img w-100 img-2 mr-md-2"
                            style="background-image: url({{ asset('assets/user/images/GERBANG.jpg') }});"></div>
                        <div class="img w-100 img-2 mr-md-2"
                            style="background-image: url({{ asset('assets/user/images/GERBANG1.jpg') }});"></div>
                        <div class="img w-100 img-2 mr-md-2"
                            style="background-image: url({{ asset('assets/user/images/GERBANG.jpg') }});"></div>
                        <div class="img w-100 img-2 mr-md-2"
                            style="background-image: url({{ asset('assets/user/images/GERBANG1.jpg') }});"></div>
                        <div class="img w-100 img-2 ml-md-2" style="background-image: url(images/about-2.jpg);"></div>
                    </div>
                    <div class="col-md-5 wrap-about py-md-5 ftco-animate">
                        <div class="heading-section pr-md-5">
                            <h2 class="mb-4">PT. Edy Mitra Karya</h2>

                            <p>Menjadi pengembang properti terdepan yang menciptakan hunian berkualitas dan
                                berkelanjutan untuk meningkatkan kualitas hidup masyarakat Indonesia.Kami berkomitmen
                                untuk terus berinovasi dan menghadirkan hunian yang tidak hanya menjadi tempat tinggal,
                                tetapi juga menjadi investasi masa depan yang bernilai. Setiap proyek kami dikembangkan
                                dengan memperhatikan aspek kenyamanan, keamanan, dan keberlanjutan lingkungan. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
</x-user.layout>
