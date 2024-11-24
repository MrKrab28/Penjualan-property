<x-layout title="Edit Property Spesification">
    <div class="row">
        <div class="col-lg-6 d-none d-lg-block">
            <img src="{{ asset('assets/admin/img/illustrations/server.svg') }}" alt="">
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit Spesification</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('spesifikasi.update', $spek->id) }}" method="POST" autocomplete="off">
                        @csrf
                        @method('PUT')
                        <x-form.input label="Nama Spesifikasi" name="nama_spesifikasi" id="namaSpesifikasiInput"
                            value="{{ $spek->nama_spesifikasi }}" :required="true" />
                        <div class="row">
                            <div class="col-md-6">

                                <x-form.input label="Luas Tanah (m2)" name="luas_tanah" id="luasTanahInput"
                                    value="{{ $spek->luas_tanah }}" :required="true" />

                            </div>
                            <div class="col-md-6">

                                <x-form.input label="Luas Bangunan (m2)" name="luas_bangunan" id="luasBangunanInput"
                                    value="{{ $spek->luas_bangunan }}" :required="true" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">


                                <x-form.input label="Jumlah Kamar" name="kamar" id="kamarInput"
                                    value="{{ $spek->kamar }}" :required="true" />
                            </div>
                            <div class="col-md-6">
                                <x-form.input label="Jumlah Toilet" name="wc" id="wcInput"
                                    value="{{ $spek->wc }}" :required="true" />
                                </div>
                            </div>
                            <x-component.button label="Save Changes" :block="true" type="submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
