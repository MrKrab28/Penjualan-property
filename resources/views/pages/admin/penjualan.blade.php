@push('styles')
    @include('components.choices-js.styles')
@endpush

@push('scripts')
    @include('components.choices-js.scripts')
@endpush

<x-layout title="Penjualan">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title">Penjualan</h5>
                <x-form.modal label="New Sales" size="modal-xl" title="Form Penjualan"
                    action="{{ route('penjualan.store') }}" :hasFile="true">

                    <div class="row">
                        <div class="col-md-6">
                            <x-form.select-search label="Property" name="property" id="propertySelect" :required="true"
                                modalId="formModal">

                                @foreach ($properties as $property)
                                    <option value="{{ $property->id }}">{{ $property->property }}</option>
                                @endforeach
                            </x-form.select-search>

                            <x-form.select-search label="Customer" name="customer" id="customerSelect" :required="true"
                                modalId="formModal">

                                @foreach ($daftarUser as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->nama }} || {{ $customer->no_hp }}
                                    </option>
                                @endforeach
                            </x-form.select-search>


                            <x-form.textarea label="alamat" id="alamatinput" name="alamat" :rows="3"
                                :required="true"></x-form.textarea>

                            <x-form.input label="Status Menikah" name="status_kawin" id="status_kawinInput"
                                :required="true" />

                            <x-form.select-search label="Metode" name="metode" id="metodeSelect" :required="true"
                                modalId="formModal">

                                @foreach ($metodes as $metode)
                                    <option value="{{ $metode->id }}" data-jumlah="{{ $metode->jumlah_pembayaran }}">
                                        {{ $metode->nama }}</option>
                                @endforeach
                            </x-form.select-search>
                            <x-form.input label="No. Rekening" name="no_rek" id="no_rekInput" :required="true" />
                            <x-form.input label="Nama Bank" name="nama_bank" id="nama_bankInput" :required="true" />
                            <x-form.input label="Pekerjaan" name="pekerjaan" id="pekerjaanInput" :required="true" />
                            <x-form.input label="Nama Tempat Bekerja" name="nama_tempat_bekerja"
                                id="nama_tempat_bekerjaInput" :required="true" />
                            <x-form.textarea label="alamat tempat bekerja" id="alamat_tempat_bekerjainput"
                                name="alamat_tempat_bekerja" :rows="3" :required="true"></x-form.textarea>
                        </div>
                        <div class="col-md-6">
                            <x-form.input label="Pendapatan/Bulan" name="gaji" id="gajiInput" :required="true"
                                :isNumeric="true" />
                            <x-form.input label="Nama Orang Terdekat" name="nama_orang_terdekat"
                                id="nama_orang_terdekatInput" :required="true" />
                            <x-form.input label="No. HP Orang Terdekat" name="no_hp_orang_terdekat"
                                id="no_hp_orang_terdekatInput" :required="true" />
                            <x-form.textarea label="Alamat Orang Terdekat" id="alamat_orang_terdekatInput"
                                name="alamat_orang_terdekat" :rows="3" :required="true"></x-form.textarea>
                            <x-form.select-search label="Agency" name="agent" id="AgentSelect" :required="true"
                                modalId="formModal">

                                @foreach ($daftarAgent as $agent)
                                    <option value="{{ $agent->id }}">{{ $agent->nama }} || {{ $agent->agency }}
                                    </option>
                                @endforeach
                            </x-form.select-search>

                            <x-form.image label="Foto KTP" name="foto_ktp" id="imgInput" :required="true" />

                        </div>
                    </div>
                </x-form.modal>
            </div>
        </div>
        <div class="card-body">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
            <x-component.datatable id="propertyTable">
                <thead>
                    <th>#</th>
                    <th>Property</th>
                    <th>Customer</th>
                    <th>Tanggal Penjualan</th>
                    <th>Metode</th>
                    <th>Status</th>
                    {{-- <th>Harga</th> --}}
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($daftarPenjualan as $penjualan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $penjualan->nama_property }}</td>
                            <td>{{ $penjualan->users->nama }}</td>
                            <td>{{ Carbon\Carbon::parse($penjualan->tanggal)->IsoFormat('DD MMMM YYYY') }}</td>
                            <td>{{ $metodes->where('id', $penjualan->metode)->first()->nama }}</td>

                            @if ($penjualan->nominal_dp == 0 && $penjualan->lunas == false)
                                <td class="text-success">Lunas</td>
                            @elseif ($penjualan->lunas)
                                <td>{!! $penjualan->lunas
                                    ? '<span class="text-success">Lunas</span>'
                                    : '<span class="text-danger">Belum Lunas</span>' !!}</td>
                            @elseif(!$penjualan->lunas)
                                <td class="text-danger">Belum Lunas</td>
                            @endif
                            {{-- <td>{{ $penjualan->lunas }}</td> --}}


                            <td class="text-center">

                                <x-component.button-icon label="Detail" color="primary" icon="bx-detail"
                                    href="{{ route('penjualan.detail', $penjualan->id) }}" :small="true" />


                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </x-component.datatable>
        </div>
    </div>
    <script>
        document.querySelector('#metodeSelect').addEventListener('change', function() {
            console.log(this.options)
            document.querySelector('#jumlah_pembayaranInput').value = this.options[this.selectedIndex].getAttribute(
                'data-jumlah')

        })
    </script>
</x-layout>
