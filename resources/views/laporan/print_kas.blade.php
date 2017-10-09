<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      table {
        border-collapse: collapse;
        width: 100%;
      }
      h1{
        margin-top: 1.5cm;
      }
      h2, h3, h4{
        height: 1px;
      }

      th{
        height: 50px;
      }

      table, th, td {
        border: 1px solid black;
      }

      th, td{
        padding: 5px;
      }
      p {
        text-indent: 50px;
        text-align: justify;
      }

      .rupiah{
        text-align: right;
      }
    </style>
  </head>
  <body>
    <h1 style="text-align:center;">Laporan Keuangan</h1>
    <h3 style="text-align:left;">PT. MULTISARI SENTOSA</h3>
    <h4 style="text-align:left;">Jl. Balai Warga I No. 13 Sukasari Tangerang</h4>
    <div style="width:100vw">
      <label style="text-align:right; display: block;">Tanggal: {{ $kases->first()->created_at->format('d/m/Y') }}</label>
    </div>
    <table>
      <thead>
        <tr>
          <th>Nama Pelaksana</th>
          <th>Lokasi</th>
          <th>Keterangan</th>
          <th>Nominal</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($kases as $kas)
          <tr>
            <td>{{ $kas->UserId->name}}</td>
            <td>{{ $kas->KegiatanId->paket}}</td>
            <td>{{ $kas->keterangan }}</td>
            <td class="rupiah">{{ "Rp " . number_format($kas->nominal,2,',','.') }}</td>
          </tr>
        @endforeach
        <tr>
          <td></td>
          <td></td>
          <td style="text-align:right;font-weight: bold;">Total</td>
          <td class="rupiah total">{{ "Rp " . number_format($total,2,',','.') }}</td>
        </tr>
      </tbody>
    </table>

  </body>
</html>
