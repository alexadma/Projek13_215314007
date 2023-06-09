<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    
    <div class="container">
        <form action="/asisten/search" method="post" class="mt-5">
            <?= csrf_field() ?>
            <h1>CARI ASISTEN </h1>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="key" placeholder="Search">
                <button class="btn btn-primary" type="submit" name="submit">Search</button>
            </div>
        </form>
        <?php
        if (!empty($hasil)) {
            echo "<h1>Hasil Pencarian</h1>";
            echo "<p>Nama: " . $hasil['NAMA'] . "</p>";
            echo "<p>Praktikum: " . $hasil['PRAKTIKUM'] . "</p>";
            echo "<p>IPK: " . $hasil['IPK'] . "</p>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
