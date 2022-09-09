<?php
    $id = $_GET["id"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<div class="card text-center position-absolute top-50 start-50 translate-middle" style="width: 30rem;">
    <h1 class="card-header">Edit Data</h1>
    <div class="card-body">
    <form action="proses_edit.php?id=<?= $id ?>" method="POST">
        <span>Username :<input name="username" class="form-control" type="text"></span>
        <span>Password :<input name="password" class="form-control" type="text"></span>
        <span>Role:<input name="role" class="form-control" type="text"></span>
        <button class="btn btn-primary">Save</button>
    </form>
    </div>
</div>
</body>
</html>