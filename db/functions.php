<?php
include('db.php');

function showAllData()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value=$id>$id</option>";
    }
}

function records(){
    global $connection;
            if (isset($_POST['submit'])) {
                $query = "SELECT * FROM users";
                $result = mysqli_query($connection, $query);
                if (!$result) {
                    die('Query FAILED' . mysqli_error($connection));
                }

                while ($row = mysqli_fetch_assoc($result)) {
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

        $result = mysqli_query($connection, $query);
        if (!$result) {

            die("QUERY FAILED" . mysqli_error($connection));
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

        $result = mysqli_query($connection, $query);
        if (!$result) {

            die("QUERY FAILED" . mysqli_error($connection));
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
            $result = mysqli_query($connection, $query);
            if (!$result) {
                die('Query FAILED' . mysqli_error($connection));
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
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query FAILED' ."</br>". mysqli_error($connection));
        }
        $row = mysqli_fetch_assoc($result);
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