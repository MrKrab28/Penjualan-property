<x-layout title="Edit Property">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-2">Edit Property</h5>
                    <div class="card-subtitle">
                        <a href="{{ route('property.detail', $property->id) }}" class="d-flex align-items-center">
                            <i class="bx bx-left-arrow me-2"></i>
                            <span>Back</span>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('property.update', $property->id) }}" method="POST" autocomplete="off">
                        @csrf
                        @method('PUT')
                        <x-form.input value="{{ $property->nominal_book }}" label="Nominal Book" name="nominal_book"
                            id="nominal_bookInput" :required="true" :isNumeric="true" />
                        <x-form.input value="{{ $property->property }}" label="Property" name="property"
                            id="propertyInput" :required="true" />
                        <x-form.input value="{{ $property->lokasi }}" label="lokasi" name="lokasi" id="lokasiInput"
                            :required="true" />
                        <x-form.select-search label="Type" name="type_id" id="typeSelect" :required="true">
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" @if ($type->id == $property->type_id) selected @endif>
                                    {{ $type->nama_type }}</option>
                            @endforeach
                        </x-form.select-search>
                        <x-form.select-search label="Spesifikasi" name="spesifikasi_id" id="spesifikasiSelect"
                            :required="true">
                            @foreach ($speks as $spek)
                                <option value="{{ $spek->id }}" @if ($spek->id == $property->spesifikasi_id) selected @endif>
                                    {{ $spek->nama_spesifikasi }}</option>
                            @endforeach
                        </x-form.select-search>

                        @foreach ($property->harga as $harga)
                            <x-form.input value="{{ $harga->nominal }}" label="Nominal {{ $harga->metode->nama }}"
                                name="nominal[{{ $harga->metode->id }}]" id="nominalInput{{ $harga->metode->id }}"
                                :isNumeric="true" :required="true" />
                            <x-form.input value="{{ $harga->nominal_dp }}" label="Nominal DP-{{ $harga->metode->nama }}"
                                name="nominal_dp[{{ $harga->metode->id }}]" id="nominal_dpInput{{ $harga->metode->id }}"
                                :isNumeric="true" :required="true" />
                        @endforeach
                        <x-form.textarea label="Deskripsi" id="deskripsiinput" name="deskripsi" :rows="5"
                            :required="true">{{ $property->deskripsi }}</x-form.textarea>
                        <div class="row">
                            {{-- <div class="col-md-6">
                                <x-form.datalist value="{{ $property->size }}" label="Size" name="size"
                                    id="sizeInput" :required="true">
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size }}">{{ $size }}</option>
                                    @endforeach
                                </x-form.datalist>
                            </div> --}}


                        </div>

                        <x-component.button label="Save Changes" color="primary" type="submit" />
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title">property Images</h5>
                        <x-form.modal title="Add property Image"
                            action="{{ route('property.image.store', $property->id) }}" label="Upload"
                            :hasFile="true">
                            <x-form.image label="Image" name="img" id="imgInput" />
                        </x-form.modal>
                    </div>
                </div>
                <div class="card-body">
                    <x-component.datatable id="propertyImages">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($property->images as $image)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $image->filename }}</td>
                                    <td>
                                        <a href="{{ asset('img/properties/' . $image->filename) }}" target="_blank"
                                            class="btn btn-sm btn-info">
                                            View
                                        </a>
                                        <form action="{{ route('property.image.destroy', $image->id) }}"
                                            class="d-inline" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </x-component.datatable>
                </div>
            </div>
        </div>
    </div>
</x-layout>
