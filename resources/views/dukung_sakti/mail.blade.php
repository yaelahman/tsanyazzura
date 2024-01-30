<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #ffffff;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        h1,
        p {
            margin: 20px 0;
        }
    </style>
</head>

<body>
    ADA DATA PENDUKUNG MASUK
    <table>
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>WhatsApp</th>
                <th>Jenis Kelamin</th>
                <th>Kelurahan</th>
                <th>Alamat</th>
                <th>RT/RW</th>
                <th>Tim Sukses</th>
                <th>Nama Koordinator</th>
                <th>No TPS</th>
                <th>Tanggal Gabung</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td>{{ $row->nik }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->whatsapp }}</td>
                <td>{{ $row->jenis_kelamin == 'L' ? 'Laki Laki' : 'Perempuan' }}</td>
                <td>{{ $row->wilayah }}</td>
                <td>{{ $row->alamat }}</td>
                <td>{{ $row->rt }}/{{ $row->rw }}</td>
                <td>{{ $row->tim_sukses }}</td>
                <td>{{ $row->koordinator }}</td>
                <td>{{ $row->tps }}</td>
                <td>{{ date('d-m-Y H:i', strtotime($row->created_at)) }}</td>

            </tr>
        </tbody>
    </table>

</body>

</html>
