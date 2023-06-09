<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table {
            border-spacing: 10px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>Pendaftaran Asisten Praktikum</h1>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="pendaftaran.html">Pendaftaran</a>
        </li>
        <li class="nav-item">

        </li>
    </ul>
    <div class="container mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas Praktikum</th>
                    <th>IPK</th>
                </tr>
            </thead>
            <tbody>
                <?php $db = \Config\Database::connect();
                $query = $db->query('Select * from asisten');
                $row = $query->getRow();
                foreach ($query->getResult('array') as $row) {
                    if (isset($row)) { ?>
                        <tr>
                            <td><?php echo $row['NIM']; ?></td>
                            <td><?php echo $row['NAMA']; ?></td>
                            <td><?php echo $row['PRAKTIKUM']; ?></td>
                            <td><?php echo $row['IPK']; ?></td>
                        </tr>
                <?php  }
                } ?>
            </tbody>
            <table>
            <a href="/login/logout">Logout</a>
            </table>
            
</body>
</html>