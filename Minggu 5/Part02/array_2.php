<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
        }
        table {
            border-collapse: collapse;
            margin: 40px auto;
            width: 50%;
            box-shadow: 0 3px 8px rgba(0,0,0,0.2);
        }
        th, td {
            border: 1px solid #333;
            padding: 10px 15px;
            text-align: left;
        }
        th {
            background: #4CAF50;
            color: white;
            text-align: center;
        }
        tr:nth-child(even) {
            background: #f2f2f2;
        }
        caption {
            font-size: 1.3em;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        $Dosen = [
            'Nama' => 'Elok Nur Hamdana',
            'Domisili' => 'Malang',
            'Jenis Kelamin' => 'Perempuan'
        ];
    ?>

    <table>
        <caption>Data Dosen</caption>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <?php foreach ($Dosen as $key => $value): ?>
            <tr>
                <td><?= htmlspecialchars($key) ?></td>
                <td><?= htmlspecialchars($value) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
