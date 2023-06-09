<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/login/check" method="post">
        <?= csrf_field() ?>
        User : <input type="text" name = "usr" /><br>
        password : <input type="text" name = "pwd" /><br>
        <input type="submit" value="Submit" name="submit" id="submit" class="btn btn-primary">
    </form>
</body>
</html>