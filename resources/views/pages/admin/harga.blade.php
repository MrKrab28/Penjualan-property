<x-layout title="Harga">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title">Harga</h5>
                <x-form.modal label="New Harga" size="modal-xl" title="Form Harga" action="{{ route('harga.store') }}"
                    :hasFile="true">
                    <div class="row">
                        <div class="col-md-6">


                            <x-form.select-search label="Metode Pelunasan" name="metode_id" id="metode_idSelect"
                                :required="true" modalId="formModal">
                                @foreach ($metodes as $metode)
                                    <option value="{{ $metode->id }}">{{ $metode->nama }}</option>
                                @endforeach
                            </x-form.select-search>
                            <x-form.select-search label="Property" name="property_id" id="property_idSelect"
                                :required="true" modalId="formModal">
                                @foreach ($properties as $property)
                                    <option value="{{ $property->id }}">{{ $property->property }}</option>
                                @endforeach
                            </x-form.select-search>
                        </div>
                        <div class="col-md-6">
                            <x-form.input label="Nominal Harga" name="nominal" id="nominalInput" :isNumeric="true"
                                :required="true" />
                            <x-form.input label="Normal Dp" name="nominal_dp" id="nominal_dpInput" :isNumeric="true"
                                :required="true" />
                            <x-form.input label="Harga Book" name="nominal_book" id="nominal_bookInput"
                                :isNumeric="true" :required="true" />


                        </div>
                    </div>
                </x-form.modal>
            </div>
        </div>
        <div class="card-body">
            <x-component.datatable id="propertyTable">
                <thead>
                    <th>#</th>
                    <th>Property</th>
                    <th>Jumlah Pembayaran</th>
                    <th>Nominal</th>
                    <th>Nominal DP</th>
                    <th>Nominal Book</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($hargas as $harga)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $harga->properties->property }}</td>
                            <td>{{ $harga->metode->jumlah_pembayaran }}</td>
                            <td>{{ $harga->nominal }}</td>
                            <td>{{ $harga->nominal_dp }}</td>
                            <td>{{ $harga->nominal_book }}</td>

                            <td class="text-center">

                                <x-component.button-icon label="Edit" color="primary" icon="bx-detail"
                                    href="{{ route('harga.edit', $harga->id) }}" :small="true" />


                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </x-component.datatable>
        </div>
    </div>
</x-layout>
