<?php include('functionPdo.php') ?>
<?php
orderUpdate();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" href="">
</head>

<body>
    <form class="m-5" action="update.php" method="post">
        <h1>Order Update</h1>
        <br>
        <div class=" col-md-6">
            <label for="id">Order Id</label>
            <select style="width: 150px;height:38px;border:1px solid #B6B6B4;border-radius:4px" name="id" id="id">
                <?php
                showOrderId();
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
            <label for="quality">Quality</label>
            <select style="width: 150px;height:38px;border:1px solid #B6B6B4;border-radius:4px" name="quality" id="quality">
                <!-- <?php
                        showQuality();
                        ?> -->
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <br><br>
            <input class="btn btn-primary form-control" name="submit" type="submit" value="Update">
        </div>
    </form>
</body>

</html>