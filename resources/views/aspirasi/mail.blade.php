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
    ADA DATA ASPIRASI MASUK
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Pesan</th>
                <th>Tanggal Dibuat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->no_hp ?? '-' }}</td>
                <td>{{ $row->alamat ?? '-' }}</td>
                <td>{{ $row->pesan ?? '-' }}</td>
                <td>{{ date('d-m-Y H:i', strtotime($row->created_at)) }}</td>

            </tr>
        </tbody>
    </table>

</body>

</html>
