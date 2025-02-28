<x-layout title="Cicilan">
    <div class="row">
        <div class="col-md-6">
            <div class="card my-2">
                <div class="card-header">
                    <h3 class="card-title" style="text-decoration: underline" >Detail</h3>
                </div>
                <div class="card-body">

                    <h5 class="mb-0">Customer</h5>
                    <p>{{ $penjualan->users->nama }}</p>
                    <h5 class="mb-0">No.Handphone</h5>
                    <p>{{ $penjualan->users->no_hp }}</p>
                    <h5 class="mb-0">Email</h5>
                    <p>{{ $penjualan->users->email }}</p>
                    <h5 class="mb-0">No.Rekening</h5>
                    <p>{{ $penjualan->no_rek }}</p>
                    <h5 class="mb-0">Property</h5>
                    <p>{{ $penjualan->nama_property }}</p>
                    <h5 class="mb-0">Total Cicilan</h5>
                    <p>Rp. {{ number_format($penjualan->nominal_harga) }}</p>
                    <h5 class="mb-0">Total sisa Cicilan</h5>
                    <p>Rp. {{ number_format($penjualan->nominal_harga - $penjualan->cicilan->sum('nominal_cicilan')) }}</p>
                    <h5 class="mb-0">Banyak Cicilan</h5>
                    <p>{{ $penjualan->jumlah_pembayaran }} x</p>
                    <h5 class="mb-0">Sisa Cicilan</h5>
                    <p>{{ $penjualan->jumlah_pembayaran - $penjualan->cicilan->count() }} x</p>



                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card my-2">
                <div class="card-header">
                    <h5 class="card-title">Pembayaran</h5>
                    <x-form.modal label="Bayar Angsuran" title="Angsuran Property" action="{{ route('cicilan.store') }}"
                        :hasFile="true">
                        <input type="text" name="penjualan" value="{{ Request::get('penjualan') }}" id="penjualanInput" hidden>

                        <x-form.input label="Tanggal Pembayaran" type="date" id="keteranganinput" name="tgl_cicilan" :required="true" />
                    </x-form.modal>
                </div>
                <div class="card-body">

                    <x-component.datatable id="propertyTable">
                        <thead>
                            <th>#</th>
                            <th>Nominal Angsuran</th>
                            <th>Tanggal Pembayaran</th>

                        </thead>
                        <tbody>
                            @foreach ($penjualan->cicilan as $angsuran)
                                <tr>
                                    <td>{{ $loop->iteration }} </td>
                                    <td>Rp. {{ number_format($angsuran->nominal_cicilan) }} </td>
                                    <td>{{ Carbon\Carbon::parse($angsuran->tgl_cicilan)->IsoFormat('DD MMMM YYYY') }}</td>

                                </tr>
                            @endforeach

                        </tbody>
                    </x-component.datatable>
                </div>
            </div>
        </div>
    </div>
</x-layout>
