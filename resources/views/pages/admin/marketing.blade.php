<x-layout title="Marketing">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title">Marketing</h5>
                <x-form.modal label="New Agent" title="Form Marketing" action="{{ route('marketing.store') }}" :hasFile="true">
                    <x-form.input label="Name" name="nama" id="nameInput" :required="true" />
                    <x-form.input label="Agency" name="agency" id="agencyInput" :required="true" />
                    <x-form.input label="No.Rekening" name="no_rek" id="no_rekInput" :required="true" />
                    <x-form.input label="No.Handphone" name="no_hp" id="no_hpInput" :required="true" />
                    <x-form.image label="Foto KTP" name="ktp" id="imgInput" :required="true" />
                </x-form.modal>
            </div>
        </div>
        <div class="card-body">
            <x-component.datatable id="agentTable">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Agency</th>
                    <th>No.Handphone</th>
                    <th> </th>
                </thead>
                <tbody>
                    @foreach ($agents as $agent)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $agent->nama }}</td>
                            <td>{{ $agent->agency }}</td>
                            <td>{{ $agent->no_hp }}</td>

                            <td class="text-center">

                                <x-component.button label="Edit" href="{{ route('marketing.edit', $agent->id) }}"
                                    :small="true" />
                                <form action="{{ route('marketing.destroy', $agent->id) }}" class="d-inline" method="POST">
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
