<?php
$username = $_POST['Username'];
$email = $_POST['Email'];
$password = $_POST['Password'];

$conn = new mysqli('localhost','root','','signup');
if ($conn->connect_error) {
    die('connection Failed:'. $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into farmer_records(Username, Email, Password)values(?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();
    echo"Sign Up Successfully......";
    $stmt->close();
    $conn->close();
}