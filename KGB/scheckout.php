<?php
include_once "admin_panel/config/dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $sql = "INSERT INTO sorders (id, name, email, contact) VALUES ('$id', '$name', '$email', '$contact')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Avail placed successfully!'); window.location.href='service.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
