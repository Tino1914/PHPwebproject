<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'login') or die(mysqli_error($mysqli));
$id = 0;
$update = false;
$name = '';
$email = '';


if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $mysqli->query("INSERT INTO employee(name, email)VALUES('$name', '$email')") or
        die($mysqli->error);


    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";
    header("location: ../views/admin.php");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM employee WHERE id=$id") or die($mysqli->error());


    $_SESSION['message']  = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: ../views/admin.php");
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM employee WHERE id=$id") or die($mysqli->error());
    if (count($result) == 1) {
        $row = $result->fetch_array();
        $name = $row['name'];
        $email = $row['email'];
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $mysqli->query("UPDATE employee SET name='$name', email='$email' WHERE id=$id") or
        die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";
    header('location: ../views/admin.php');
}
