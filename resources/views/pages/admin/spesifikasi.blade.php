<x-layout title="Spesifikasi Property">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title">Spesifikasi Property</h5>
                <x-form.modal label="New Spesifikasi" title="Form Property" action="{{ route('spesifikasi.store') }}"
                    :hasFile="true">

                    <x-form.input label="Nama Spesifikasi" name="nama_spesifikasi" id="namaSpesifikasiInput" :required="true" />
                    <div class="row">
                        <div class="col-md-6">

                            <x-form.input label="Luas Tanah (m2)" name="luas_tanah" id="luasTanahInput" :required="true" />
                        </div>
                        <div class="col-md-6">

                            <x-form.input label="Luas Bangunan (m2)" name="luas_bangunan" id="luasBangunanInput" :required="true" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                        <x-form.input label="Jumlah Kamar" name="kamar" id="kamarlInput" :required="true" />
                        </div>
                        <div class="col-md-6">
                            <x-form.input label="Jumlah Toilet" name="wc" id="wcInput" :required="true" />
                        </div>
                    </div>

                </x-form.modal>
            </div>
        </div>
        <div class="card-body">
            <x-component.datatable id="spesifikasiTable">
                <thead>
                    <th>#</th>
                    <th>Nama Spesifikasi</th>
                    <th>Luas Tanah</th>
                    <th>Luas Bangunan</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($speks as $spek)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $spek->nama_spesifikasi }}</td>
                            <td>{{ $spek->luas_bangunan }}</td>
                            <td>{{ $spek->luas_bangunan }}</td>

                            <td class="text-center">

                                <x-component.button label="Edit" href="{{ route('spesifikasi.edit', $spek->id) }}"
                                    :small="true" />
                                <form action="{{ route('spesifikasi.destroy', $spek->id) }}" class="d-inline" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <x-component.button type="submit" label="Delete" color="danger"
                                        :small="true" />
                                </form>


                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </x-component.datatable>
        </div>
    </div>
</x-layout>
