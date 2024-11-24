<x-user.layout title="Properties">

    <section class="ftco-section goto-here ftco-animate">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">What we offer</span>
                    <h2 class="mb-2">Properties</h2>
                </div>
            </div>
            <div class="row">

                @foreach ($properties as $property)
                @php
                            $firstImage = $property->images->first();
                        @endphp

                <div class="col-md-4" id="properties">
                    <div class="property-wrap ftco-animate">
                        <a href="{{ asset('img/properties/' . $firstImage->filename) }}"  class="img"
                            style="background-image: url({{ asset('img/properties/' . $firstImage->filename) }});">
                            <div class="rent-sale">
                                <span class="sale">Sale</span>
                            </div>
                            <p class="price"><span class="orig-price">Rp. {{ $property->hargaCash->nominal }}</span></p>
                        </a>
                        <div class="text">
                            <ul class="property_list">
                                <li><span class="flaticon-bed"></span>{{ $property->types->nama_type }}</li>
                                <li><span class="flaticon-bathtub"></span>{{ $property->spesifikasi->nama_spesifikasi }}</li>

                            </ul>
                            <h3><a href="{{ route('user.property-detail', $property->id) }}#property-detail">{{ $property->property }}</a></h3>
                            <span class="location">{{ Str::limit($property->lokasi, 30) }}</span>
                            <a href="{{ route('user.property-detail', $property->id) }}#property-detail" class="d-flex align-items-center justify-content-center btn-custom">
                                <span class="fa fa-link"></span>
                            </a>
                            <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
                                <div class="d-flex align-items-center">

                                </div>
                                <span class="text-right">
                                <a href="{{ route('user.property-detail', $property->id) }}#property-detail" type="button" class="btn btn-primary rounded-pill">Detail </a></span>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-user.layout>
