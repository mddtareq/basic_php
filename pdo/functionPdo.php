<?php
include('pdo.php');

function showAllData()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = $connection->prepare($query);
        $result->execute();
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        echo "<option value=$id>$id</option>";
    }
}
function records(){
    global $connection;
            if (isset($_POST['submit'])) {
                $query = "SELECT * FROM users";
                $result = $connection->prepare($query);
        $result->execute();
                if (!$result) {
                    die('Query FAILED' . mysqli_error($connection));
                }

                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tbody>';
                    echo '<tr>';
                    echo '<td>' . $row['username'] . " " . "</td>";
                    echo '<td>' . $row['password'] . " " . '</td>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<tr>';
                    echo '</tbody>';
                    echo "</br>";
                }
            }
}

function UpdateTable()
{
    if (isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";

        $result = $connection->prepare($query);
        $result->execute();

        if (!$result) {

            die("QUERY FAILED" );
        } else {
            echo "Record Updated";
        }
    }
}
function deleteRows()
{

    if (isset($_POST['submit'])) {
        global $connection;
        $id = $_POST['id'];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";

        $result = $connection->prepare($query);
        $result->execute();

        if (!$result) {

            die("QUERY FAILED" );
        } else {

            echo "Record Deleted";
        }
    }
}
function userCreate(){
    global $connection;
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username && $password) {
            $query = "INSERT INTO users(username,password) ";
            $query .= "VALUES ('$username', '$password')";
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
function login(){
    global $connection;
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
        $result = $connection->prepare($query);
        $result->execute();
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            die('Query FAILED' ."</br>");
        }
        if($row!==null){
            echo '<tbody>';
            echo '<tr>';
            echo '<td>' . $row['username'] . " " . "</td>";
            echo '<td>' . $row['password'] . " " . '</td>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<tr>';
            echo '</tbody>';
            echo "</br>";
        }
        else{
            echo "Username or password Not match";
        }
    }
}
?>