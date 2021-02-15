<?php
include('pdo.php');

function showOrderId()
{
    global $connection;
    $query = "SELECT * FROM orders";
    $result = $connection->prepare($query);
        $result->execute();
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['Order_ID'];
        echo "<option value=$id>$id</option>";
    }
}

function showQuality()
{
    global $connection;
    $query = "SELECT * FROM orders";
    $result = $connection->prepare($query);
        $result->execute();
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['Prod_Quality'];
        echo "<option value=$id>$id</option>";
    }
}

function showCustomer()
{
    global $connection;
    $query = "SELECT * FROM customers";
    $result = $connection->prepare($query);
        $result->execute();
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['Customer_ID'];
        echo "<option value=$id>$id</option>";
    }
}

function showProduct()
{
    global $connection;
    $query = "SELECT * FROM products";
    $result = $connection->prepare($query);
        $result->execute();
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['Product_ID'];
        echo "<option value=$id>$id</option>";
    }
}

function orderRecords(){
    global $connection;
            if (isset($_POST['submit'])) {
                $query = "SELECT * FROM orders";
                $result = $connection->prepare($query);
        $result->execute();
                if (!$result) {
                    die('Query FAILED' . mysqli_error($connection));
                }

                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tbody>';
                    echo '<tr>';
                    echo '<td>' . $row['Order_ID'] . " " . "</td>";
                    echo '<td>' . "    " . "</td>";
                    echo '<td>' . $row['Customer_ID'] . " " . '</td>';
                    echo '<td>' . $row['Product_ID'] . '</td>';
                    echo '<td>' . $row['Prod_Quality'] . " " . '</td>';
                    echo '<td>' . $row['Order_Date'] . '</td>';
                    echo '<tr>';
                    echo '</tbody>';
                    echo "</br>";
                }
            }
}

function orderUpdate()
{
    if (isset($_POST['submit'])) {
        global $connection;
        $product = $_POST['product'];
        $quality = $_POST['quality'];
        $id = $_POST['id'];

        $query = "UPDATE orders SET ";
        $query .= "Product_ID = '$product', ";
        $query .= "Prod_Quality = '$quality' ";
        $query .= "WHERE Order_ID = $id ";

        $result = $connection->prepare($query);
        $result->execute();

        if (!$result) {

            die("QUERY FAILED" );
        } else {
            echo "Record Updated";
        }
    }
}
function deleteOrder()
{
    if (isset($_POST['submit'])) {
        global $connection;
        $id = $_POST['id'];

        $query = "DELETE FROM orders ";
        $query .= "WHERE Order_ID = $id ";

        $result = $connection->prepare($query);
        $result->execute();

        if (!$result) {

            die("QUERY FAILED" );
        } else {

            echo "Record Deleted";
        }
    }
}
function orderCreate(){
    global $connection;
    if (isset($_POST['submit'])) {
        $customer = $_POST['customer'];
        $product = $_POST['product'];
        $quality = $_POST['quality'];
        $date = $_POST['date'];
        if ($customer && $product && $quality && $date ) {
            $query = "INSERT INTO orders(Customer_ID,Product_ID,Prod_Quality,Order_Date) ";
            $query .= "VALUES ('$customer', '$product','$quality', '$date')";
            $result = $connection->prepare($query);
        $result->execute();
            if (!$result) {
                die('Query FAILED');
            }else {
                echo "Record Created";
            }
        } else {
            echo "Field can not be blank";
        }
    } 
}

?>