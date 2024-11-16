<?php
$conn = mysqli_connect("localhost", "root", "", "data");
if (isset($_POST["submit"])){
    $name = $_POST["username"];
    $age = $_POST["email"];
    $password = $_POST["password"];
    $query = "INSERT INTO userdb VALUES('', '$username','$email','$$password);
    mysqli_query($conn, $query);


}
?>