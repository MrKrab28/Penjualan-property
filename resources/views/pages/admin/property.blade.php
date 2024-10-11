<x-layout title="Properties">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title">Properties</h5>
                <x-form.modal label="New Property" size="modal-xl" title="Form Property"
                    action="{{ route('property.store') }}" :hasFile="true">
                    <div class="row">
                        <div class="col-md-6">

                            <x-form.input label="Property" name="property" id="propertyInput" :required="true" />
                            <x-form.select-search label="Type" name="type_id" id="typeSelect" :required="true"
                                modalId="formModal">
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->nama_type }}</option>
                                @endforeach
                            </x-form.select-search>
                            <x-form.select-search label="Nama Spesifikasi" name="spesifikasi_id"
                                id="namaSpesifikasiSelect" :required="true" modalId="formModal">
                                @foreach ($speks as $spek)
                                    <option value="{{ $spek->id }}">{{ $spek->nama_spesifikasi }}</option>
                                @endforeach
                            </x-form.select-search>
                            <x-form.input label="Harga" name="harga" id="hargaInput" :isNumeric="true"
                                :required="true" />
                            <x-form.input label="Harga Book" name="harga_book" id="harga_bookInput" :isNumeric="true"
                                :required="true" />
                        </div>
                        <div class="col-md-6">

                            <x-form.textarea label="Lokasi" id="lokasiinput" name="lokasi" :rows="3"
                                :required="true"></x-form.textarea>
                            <x-form.textarea label="Deskripsi" id="deskripsiinput" name="deskripsi" :rows="3"
                                :required="true"></x-form.textarea>
                            <x-form.image label="Image" name="img" id="imgInput" :required="true" />
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
                    <th>Type</th>
                    <th>Spesifikasi</th>
                    <th>Harga</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($properties as $property)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $property->property }}</td>
                            <td>{{ $property->types->nama_type }}</td>
                            <td>{{ $property->spesifikasi->nama_spesifikasi }}</td>
                            <td>{{ $property->harga }}</td>

                            <td class="text-center">

                                <x-component.button-icon label="Detail" color="primary" icon="bx-detail"
                                    href="{{ route('property.detail', $property->id) }}" :small="true" />


                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </x-component.datatable>
        </div>
    </div>
</x-layout>
