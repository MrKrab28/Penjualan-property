<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
    <style>
        @page {
            size: A4 landscape;
            margin: 5mm;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 10px;
            color: #333;
            line-height: 1.4;
        }

        h3 {
            text-align: center;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 5px;
            text-align: left;
            word-wrap: break-word;
            font-size: 10px;
        }

        th {
            background-color: #f2f2f2;
            text-align: center;
        }

        .text-center {
            text-align: center;
        }

        .tg {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .tg td {
            word-break: normal;
        }

        .tg th {
            overflow: hidden;
            word-break: normal;
        }

        .tg .tg-0pky {
            border-color: inherit;
            text-align: left;
            vertical-align: top;
        }
    </style>
</head>
<body>
    <div class="text-center">
        <img src="" width="200" alt="">
        <h3 class="mt-0">PT. EDI MITRA KARYA INDONESIA</h3>
        <div class="sekret">
            <p class="my-0">TAMSUD</p>
            <p class="mt-0">
                Email: pcmakassarraya@gmail.com
            </p>
        </div>
    </div>

    <h3 style="margin-bottom: 10px">Laporan Property</h3>
    <table class="tg">
        <thead>
            <tr>
                <th class="tg-0pky" rowspan="2" width="3%">No</th>
                <th class="tg-0pky" rowspan="2">Property</th>
                <th class="tg-0pky" rowspan="2">Type</th>
                <th class="tg-0pky" rowspan="2">Luas Bangunan</th>
                <th class="tg-0pky" rowspan="2">Luas Tanah</th>
                <th class="tg-0pky" rowspan="2">Blok/No</th>
                <th class="tg-0pky text-center" colspan="{{ count($property[3]->harga) }}">Harga</th>
            </tr>
            <tr>
                @foreach ($property[3]->harga as $price)
                <th class="tg-0pky">{{ $price->metode->nama }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @forelse ($property as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->property }}</td>
                <td>{{ $item->types->nama_type }}</td>
                <td>{{ $item->spesifikasi->luas_bangunan }}</td>
                <td>{{ $item->spesifikasi->luas_tanah }} m2</td>
                <td>{{ $item->lokasi }}</td>
                @foreach ($item->harga as $harga)
                <td>Rp. {{ number_format($harga->nominal) }}</td>
                @endforeach
            </tr>
            @empty
            <tr>
                <td colspan="{{ 6 + count($property[0]->harga) }}" class="text-center">Tidak ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
