<x-layout title="Edit Marketing">
    <div class="row">
        <div class="col-lg-6 d-none mt-5  d-lg-block">
            <h3>Foto KTP</h3>
            <img src="{{ asset('img/agent/ktp/' . $agents->ktp ) }}" width="650px" height="350px  alt="">
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit Marketing Agency</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('marketing.update', $agents->id) }}" method="POST" autocomplete="off">
                        @csrf
                        @method('PUT')
                        <x-form.input value="{{ $agents->nama }}" label="Nama Marketing" name="nama" id="namaInput"
                            :required="true" />
                        <x-form.input value="{{ $agents->agency }}" label="Agency Marketing" name="agency"
                            id="agencyInput" :required="true" />
                        <x-form.input value="{{ $agents->no_hp }}" label="No.Handphone" name="no_hp" id="no_hpInput"
                            :required="true" />
                        <x-form.input value="{{ $agents->no_rek }}" label="No.Rekening" name="no_rek" id="no_rekInput"
                            :required="true" />
                        <x-form.image label="Foto KTP" name="ktp" id="imgInput" :required="true" value="{{ asset('img/agent/ktp/' . $agents->ktp ) }}" />
                        <x-component.button label="Save Changes" :block="true" type="submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
