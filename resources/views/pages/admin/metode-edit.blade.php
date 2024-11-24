<x-layout title="Edit Property method Payment">
    <div class="row">
        <div class="col-lg-6 d-none d-lg-block">
            <img src="{{ asset('assets/admin/img/illustrations/server.svg') }}" alt="">
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit Method Payment</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('metode.update', $metode->id) }}" method="POST" autocomplete="off">
                        @csrf
                        @method('PUT')
                        <x-form.input value="{{ $metode->nama}}" label="metode" name="nama" id="metodeInput"
                            :required="true" />
                        <x-form.input value="{{ $metode->jumlah_pembayaran }}" type="number" label="Jumlah Pembayaran" name="jumlah_pembayaran" id="jumlahPembayaranInput"
                            :required="true" />
                            <x-component.button label="Save Changes" :block="true" type="submit" />
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
