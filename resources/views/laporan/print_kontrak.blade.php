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

      th{
        height: 50px;
      }

      table, th, td {
        border: 1px solid black;
      }

      th, td{
        padding: 5px;
      }

      .rupiah{
        text-align: right;
      }
    </style>
  </head>
  <body>
    <h1 style="text-align:center;">Laporan Kontrak</h1>

    <table>
      <thead>
        <tr>
          <th>Nama Proyek</th>
          <th>Nama Dinas</th>
          <th style="text-align:center">Tanggal</th>
          <th>Nominal</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($kontraks as $kontrak)
          <tr>
            <td>{{ $kontrak->nama_proyek }}</td>
            <td>{{ $kontrak->nama_dinas }}</td>
            <td style="text-align:center;">{{ $kontrak->tanggal }}</td>
            <td class="rupiah">{{ "Rp " . number_format($kontrak->nominal,2,',','.') }}</td>
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
