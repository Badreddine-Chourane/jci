<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'JCI') or die(mysqli_error($con));

if (isset($_POST['submit'])) {
    extract($_POST);
    $E_img = $_FILES['E_img']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($E_img);
    move_uploaded_file($_FILES['E_img']['tmp_name'], $target_file);
    $query = "INSERT INTO UpcomingEvent (E_nom, E_date, E_text, E_img) VALUES ('$E_nom', '$E_date', '$E_text', '$E_img')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Event</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2 class="mb-4">Add New Event</h2>
        <form class="form" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="E_nom">Event Name:</label>
                <input type="text" name="E_nom" placeholder="Enter name" class="form-control" id="E_nom">
                
            </div>
            <div class="form-group">
                <label for="E_date">Event Date:</label>
                <input type="date" name="E_date" placeholder="Enter date" class="form-control" id="E_date">
                
            </div>
            <div class="form-group">
                <label for="E_text">Description:</label>
                <textarea name="E_text" cols="30" rows="10" placeholder="Enter Event description" class="form-control" id="E_text"></textarea>
            </div>
            
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="E_img" id="image">
            </div>
            <button type="submit" name="submit" class="btn btn-success btn-block my-4">Save</button>
        </form>
    </div>
</body>
</html>
