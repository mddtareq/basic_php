<?php include('functionPdo.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" href="">
</head>

<body>
    <form class="m-5" action="regCheck.php" method="post">
        <h1>Create Order</h1>
        <br>
        <div class=" col-md-6">
            <label for="customer">Customer</label>
            <select style="width: 150px;height:38px;border:1px solid #B6B6B4;border-radius:4px" name="customer" id="customer">
                <?php
                showCustomer();
                ?>
            </select>
            <br><br>
            <label for="product">Product</label>
            <select style="width: 150px;height:38px;border:1px solid #B6B6B4;border-radius:4px" name="product" id="product">
                <?php
                showProduct();
                ?>
            </select>
            <br><br>
            <input class="form-control" type="number" min="1" value="1"name="quality" placeholder="Enter Quality">
            <br>
            <input class="form-control" type="date" name="date" placeholder="Enter Date">
            <br>
            <input class="btn btn-primary form-control" name="submit" type="submit">
        </div>
    </form>
</body>

</html>