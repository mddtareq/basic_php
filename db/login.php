<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" href="">
</head>
<body>
    <form class="m-5" action="loginCheck.php" method="post">
        <h1>Log In</h1>
        <br>
        <div class=" col-md-6">
            <input class="form-control" type="text" name="username" placeholder="Enter User Name">
            <br>
            <input class="form-control" type="password" name="password" placeholder="Enter Password">
            <br>
            <input class="btn btn-primary form-control" name="submit" type="submit">
        </div>
    </form>
</body>
</html>