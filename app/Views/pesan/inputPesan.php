<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Input Pesan</title>
</head>

<body>
    <article>
        <div class="container pt-3">
            <div class="card pt-3">
                <div class="form-group ml-3">
                    <form action="/Pesan/submit" method="POST">
                        <h1>Aplikasi Input Pesan</h1>
                        <div class="form-row">
                            <div class="col">
                                <br><br>
                                <label for="Pesan">Masukkan Pesan </label>
                                <input type="text" name="pesan" id="pesan" class="form-control">
                            </div>
                            <div class="col pt-4 mt-2">
                                <br><br>
                                <input type="submit" value="Submit" name="submit" id="submit" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </article>
</body>

</html>