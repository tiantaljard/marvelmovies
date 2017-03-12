<?php
/**
 * Created by PhpStorm.
 * User: TianTaljard
 * Date: 12/03/2017
 * Time: 12:09
 */
include("dbConnection.php");

print " dbhost - " . $connectstr_dbhost . "<br>";
print " dbname- " . $connectstr_dbname . "<br>";
print " dbusername- " . $connectstr_dbusername . "<br>";
print " dbpassword- " . $connectstr_dbpassword . "<br>";


if (empty($_POST["username"]) || empty($_POST["password"])) {
    echo "Both fields are required.";
} else {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT uid FROM users WHERE username='$username' and password='$password'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 1) {
        header("location: home.php"); // Redirecting To another Page
    } else {
        echo "Incorrect username or password.";
    }

}
?>