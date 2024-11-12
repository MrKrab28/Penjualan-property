<x-layout title="Metode">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title">Metode</h5>
                <x-form.modal label="New Metode" size="modal-l" title="Form Property" action="{{ route('metode.store') }}"
                    :hasFile="true">
                    <div class="row">


                            <x-form.input label="Metode" name="nama" id="namaInput" :required="true" />
                            <x-form.input label="Jumlah Pembayaran" name="jumlah_pembayaran" id="jumlahPembayaranInput"
                                :required="true" />



                    </div>
                </x-form.modal>
            </div>
        </div>
        <div class="card-body">
            <x-component.datatable id="propertyTable">
                <thead>
                    <th>#</th>
                    <th>Metode</th>
                    <th>Jumlah Pembayaran</th>

                    <th></th>
                </thead>
                <tbody>
                    @foreach ($metodes as $metode)
                        <tr>
                            <td>{{ $loop->iteration }} </td>
                            <td>{{ $metode->nama }} </td>
                            <td>{{ $metode->jumlah_pembayaran }} x</td>


                            <td class="text-center">

                                <x-component.button-icon label="Edit" color="primary" icon="bx-detail"
                                    href="{{ route('metode.edit', $metode->id) }}" :small="true" />


                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </x-component.datatable>
        </div>
    </div>
</x-layout>
