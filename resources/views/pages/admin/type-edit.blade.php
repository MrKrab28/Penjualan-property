<x-layout title="Edit Property Type">
    <div class="row">
        <div class="col-lg-6 d-none d-lg-block">
            <img src="{{ asset('assets/admin/img/illustrations/server.svg') }}" alt="">
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit Property Type</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('type.update', $type->id) }}" method="POST" autocomplete="off">
                        @csrf
                        @method('PATCH')
                        <x-form.input value="{{ $type->nama_type }}" label="type" name="nama_type" id="typeInput"
                            :required="true" />
                            <x-form.textarea label="Keterangan" id="keteranganinput" name="keterangan" :rows="5"
                            :required="true">{{ $type->keterangan }}</x-form.textarea>
                        <x-component.button label="Save Changes" :block="true" type="submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
