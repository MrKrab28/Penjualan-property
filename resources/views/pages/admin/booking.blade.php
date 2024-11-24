<x-layout title="Bookings">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title">Bookings</h5>

            </div>
        </div>
        <div class="card-body">
            <x-component.datatable id="propertyTable">
                <thead>
                    <th>#</th>
                    <th>Property</th>
                    <th>No. Rekening</th>
                    <th>Booking By</th>
                    <th>Tanggal Booking</th>
                    <th>Status</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking )

                    <tr>
                            <td>{{ $loop->iteration }} </td>
                           <td>{{ $booking->nama_property }} </td>
                           <td>{{ $booking->no_rek }} </td>
                           <td>{{ $booking->user->nama }}</td>
                           <td>{{ Carbon\Carbon::parse($booking->tanggal)->IsoFormat('DD MMMM YY') }}</td>
                           <td> <span class="badge @if($booking->status == 'diterima')bg-success @elseif($booking->status == 'ditolak')bg-danger @elseif('pending')bg-warning @endif"> {{ $booking->status }}</span></td>

                            <td class="text-center">

                                <x-component.button-icon label="Detail" color="primary" icon="bx-detail"
                                    href="{{ route('book.edit', $booking->id) }}" :small="true" />


                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </x-component.datatable>
        </div>
    </div>
</x-layout>
