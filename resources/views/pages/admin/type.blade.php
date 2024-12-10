<x-layout title="Type Property">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title">Type Property</h5>
                <x-form.modal label="New Type" title="Form Property" action="{{ route('type.store') }}" :hasFile="true">
                    <x-form.input label="Type" name="nama_type" id="typeInput" :required="true" />
                    <x-form.textarea label="Keterangan" id="keteranganinput" name="keterangan" :rows="5"
                        :required="true"></x-form.textarea>
                </x-form.modal>
            </div>
        </div>
        <div class="card-body">
            <x-component.datatable id="typePropertyTable">
                <thead>
                    <th>#</th>
                    <th>Type</th>
                    <th>Keterangan</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($types as $type)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $type->nama_type }}</td>
                            <td>{{ Str::limit($type->keterangan, 60) }}</td>

                            <td class="text-center">
                                <x-component.button label="Edit" href="{{ route('type.edit', $type->id) }}"
                                    :small="true" />
                                <form action="{{ route('type.destroy', $type->id) }}" class="d-inline" method="POST">
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
