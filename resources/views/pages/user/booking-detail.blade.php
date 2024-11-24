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
                                        <h5 class="mb-0">Harga Property</h5>
                                        <p>Rp. {{ $property->hargaCash->nominal }}</p>

                                    </div>
                                    <div class="mb-3">
                                        <h5 class="mb-0">Harga Book</h5>
                                        <p>Rp. {{ $property->nominal_book }}</p>
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
                        <h4>Book Property Anda   <span class="badge @if($booking->status == 'diterima') bg-success @elseif($booking->status == 'ditolak') bg-danger @elseif($booking->status == 'pending') bg-warning @endif"> {{ $booking->status }}</span></h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.book.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row ">
                                        <div class="col-md-5">

                                            <h6>Nama  </h6>
                                            <h6>Email </h6>
                                            <h6>No.Hp </h6>
                                            <h6>No.Rekening </h6>

                                        </div>
                                        <div class="col-md-7">
                                            <h6>: {{ auth()->user()->nama }}</h6>
                                            <h6>: {{ auth()->user()->email }}</h6>
                                            <h6>: {{ auth()->user()->no_hp }}</h6>
                                            <h6>: {{ $booking->no_rek }}</h6>
                                        </div>
                                    </div>




                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6>Property</h6>
                                            <h6>Tanggal</h6>
                                            <h6>Alamat Property</h6>

                                        </div>
                                        <div class="col-md-8">
                                            <h6>: {{ $property->property }} - {{ $property->types->nama_type }}</h6>
                                            <h6>: {{ Carbon\Carbon::parse($booking->tanggal_book)->isoFormat('DD MMMM YYYY') }}</h6>
                                            <h6>: {{ $property->lokasi }}</h6>
                                        </div>
                                    </div>
                                    {{-- @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif --}}
                                </div>

                            </div>
                            @if ($booking->status == 'diterima')

                            <hr>
                            <h6>*Catatan : Mohon Untuk Mengirim Bukti Pembayaran Booking Ke Email : admin@mail Atau Kirim Whatsapp Ke Nomor Admin(082323787878) </h6>
                            @elseif ($booking->status == 'pending')
                            <hr>
                            <h6>Mohon Menunggu konfirmasi dari Admin</h6>
                            @elseif ($booking->status == 'ditolak')
                            <hr>
                            <h6>Maaf Book Anda Tidak Diterima, Silahkan Ajukan Kembali Dengan data yang benar</h6>
                            @endif
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-user.layout>
