<x-layout title="Booking Detail">
    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Foto Ktp</h3>
                </div>
                <div class="card-body">

                    <img src="{{ asset('img/foto_ktp/' . $booking->foto_ktp) }}" alt="" width="515px"
                        height="300px">

                    <div class="mt-3">
                        {{-- <h4 class="mb-0">{{ $booking->user->nama }}</h4>
                        <h5>{{ $booking->user->email }}</h5>
                        <h5>{{ $booking->user->no_hp }}</h5> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card my-2 my-md-0">
                <div class="card-header">
                    <h3 class="card-title">Booking Detail</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">


                            <div class="mb-3">
                                <h5 class="mb-0">Property</h5>
                                <p>{{ $booking->nama_property }}</p>
                            </div>
                            <div class="mb-3">
                                <h5 class="mb-0">Lokasi</h5>
                                <p>{{ $booking->nama_property }}</p>
                            </div>
                            <div class="mb-3">
                                <h5 class="mb-0">Tanggal Book</h5>
                                <p> {{ Carbon\Carbon::parse($booking->tanggal_book)->isoFormat('DD MMMM YYYY') }}</p>
                            </div>
                            <div class="mb-3">
                                <h5 class="mb-0">Status Booking</h5>
                                <p>
                                    {{ $booking->status }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h5 class="mb-0">Nama Lengkap</h5>
                                <p>
                                    {{ $booking->user->nama }}
                                </p>
                            </div>
                            <div class="mb-3">
                                <h5 class="mb-0">Email</h5>
                                <p>
                                    {{ $booking->user->email }}
                                </p>
                            </div>
                            <div class="mb-3">
                                <h5 class="mb-0">No. Handphone</h5>
                                <p>
                                    {{ $booking->user->no_hp }}
                                </p>
                            </div>
                            <div class="mb-3">
                                <h5 class="mb-0">No. Rekening</h5>
                                <p>
                                    {{ $booking->no_rek }}
                                </p>
                            </div>

                        </div>

                    </div>
                    <hr>
                    <div class="row">

                        <div class="col-md-6">


                        </div>
                        @if ($booking->status == 'pending')


                        <div class="col-md-6">
                            <div class="justify-content-end d-flex  gap-3">
                                <form action="{{ route('status-book.terima', $booking) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                <x-component.button-icon icon="bx-task" type="submit" label="Terima" color="primary" />
                                </form>
                                <form action="{{ route('status-book.tolak', $booking) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <x-component.button-icon icon="bx-task-x" type="submit" label="Tolak" color="danger" />
                                </form>


                            </div>
                        </div>
                        @elseif ($booking->status == 'diterima')
                        <div class="col-md-6">
                            <div class="justify-content-end d-flex  gap-3">

                                    <p class="btn btn-success text-dark "><i class="bx bx-task"></i> Accepted</p>

                                {{-- @endcan --}}

                            </div>
                        </div>
                        @elseif ($booking->status == 'ditolak')
                        <div class="col-md-6">
                            <div class="justify-content-end d-flex  gap-3">

                                    <p class="btn btn-danger"><i class="bx bx-task-x"></i> Rejected</p>

                                {{-- @endcan --}}

                            </div>
                        </div>
                        @endif



                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
