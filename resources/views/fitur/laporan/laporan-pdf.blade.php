<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan PembayaranSPP</title>
    <style>
        .container{
            margin-inline: 100px;
            margin-top: 70px
        }
        h1 {
            font-weight: bold;
            font-size: 20pt;
            text-align: center;
        }
      
        table {
            margin-top: 30px;
            border-collapse: collapse;
            width: 100%;
        }
      
        .table th {
            background: blueviolet;
            padding: 8px 8px;
            border:1px solid #000000;
            text-align: center;
        }
      
        .table td {
            padding: 3px 3px;
            border:1px solid #000000;
        }
      
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Laporan PembayaranSPP</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Pembayaran</th>
                    <th>Nama Petugas</th>
                    <th>Nama Siswa</th>
                    <th>Nisn </th>
                    <th>Kelas</th>
                    <th>Tanggal Dibayar</th>
                    <th>Jumlah Bayar</th>
                    <th>Tunggakan</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($lpembayaran as $item)
                <tr>
                    <td class="text-center"> {{$item->id}} </td>
                    <td class="text-center"> {{$item->users->name}} </td>
                    <td class="text-center"> {{$item->siswa->nama}} </td>
                    <td class="text-center"> {{$item->siswa->nisn}} </td>
                    <td class="text-center"> {{$item->kelas->nama_kelas}} </td>
                    <td class="text-center"> {{$item->tgl_bayar->format('d/m/Y')}} </td>
                    <td class="text-center">Rp. {{$item->jumlah_bayar}} </td>
                    <td class="text-center">Rp. {{$item->spps->nominal - $item->jumlah_bayar}} </td>
                </tr>  
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>