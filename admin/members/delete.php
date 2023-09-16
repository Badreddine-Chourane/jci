<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'JCI') or die(mysqli_error($con));

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM members WHERE M_id=$id";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header("location:index.php");
}
?>