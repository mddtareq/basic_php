<?php include('functionPdo.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" href="">
</head>

<body>
    <form class="m-5" action="records.php" method="post">
        <h1>See Records</h1>
        <br>
        <div class=" col-md-6">
        <button class="btn btn-primary"name="submit">Users</button>
        <br>
            <?php
            records();
            ?>
        </div>
    </form>
</body>

</html>