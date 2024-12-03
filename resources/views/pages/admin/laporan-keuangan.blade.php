<div class="text-center">
    <img src="" width="200" alt="">
    <h5 class="mt-0">PT. EDI MITRA KARYA INDONESIA</h5>
    <div class="sekret">
        <p class="my-0">TAMSUD</p>
        <p class="mt-0">
            Email: pcmakassarraya@gmail.com
        </p>
    </div>
</div>

<h3 style="margin: 0">Laporan Penjualan</h3>

@forelse ($penjualans as $penjualan)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $penjualan->nama_property }}</td>
        <td>{{ $penjualan->nama_type }}</td>
        <td>{{ $penjualan->jumlah_pembayaran }}x</td>

        <td>{{ $namaMetode }}</td>
        <td>Rp.{{ number_format($penjualan->nominal_dp) }} </td>
        <td>Rp.{{ number_format($penjualan->nominal_harga) }}</td>
        <td>{{ $penjualan->users->nama }}</td>
        <td>{{ Carbon\Carbon::parse($penjualan->tanggal)->isoFormat('DD MMMM YYYY') }}</td>
    </tr>
@empty
    <tr>
        <td colspan="9" class="text-center">Tidak ada data</td>
    </tr>
@endforelse
