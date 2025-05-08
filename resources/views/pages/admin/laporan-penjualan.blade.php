<x-layout title="Users">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title">Cetak Laporan</h5>

            </div>
        </div>
        <div class="card-body mb-5 mt-5">
            <form action="{{ route('pdf.laporan-penjualan-cetak') }}" method="GET">
                <label>Bulan:
                    <select name="bulan" id="month" class="form-control me-1" style="width: 150px">
                        @for ($i = 1; $i <= 12; $i++)
                            <option value="{{ $i }}"
                                {{ $i == request('bulan', now()->month) ? 'selected' : '' }}>
                                {{ \Carbon\Carbon::create()->month($i)->translatedFormat('F') }}
                            </option>
                        @endfor
                    </select>
                </label>

                <label>Tahun:
                    <select name="tahun" id="year" class="form-control me-1" style="width: 100px">
                        @for ($i = 2020; $i <= now()->year; $i++)
                            <option value="{{ $i }}"
                                {{ $i == request('tahun', now()->year) ? 'selected' : '' }}>
                                {{ $i }}
                            </option>
                        @endfor
                    </select>
                </label>

                <button class="btn btn-primary" type="submit">Cetak</button>
            </form>
        </div>

    </div>
</x-layout>
