<?php
// Establish database connection
$con = mysqli_connect('127.0.0.1', 'root', '', 'JCI') or die(mysqli_error($con));

// Retrieve data for the selected event
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * from UpcomingEvent WHERE UE_id = $id";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $row = mysqli_fetch_assoc($result);
}

// Process form data when submitted
if (isset($_POST['submit'])) {
    // Extract form data
    extract($_POST);

    // Upload image file
    $E_img = $_FILES['img']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($E_img);
    move_uploaded_file($_FILES['img']['tmp_name'], $target_file);

    // Update database entry
    $query = "UPDATE UpcomingEvent SET E_nom = '$E_nom', E_text = '$E_text', E_date = '$E_date', E_img = '$E_img' WHERE UE_id = $id";
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
    <title>Edit Event</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2 class="mb-4">Edit Event</h2>
        <form class="form" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="E_nom">Event Name:</label>
                <input type="text" name="E_nom" placeholder="Enter event name" class="form-control" id="E_nom" value="<?= $row['E_nom'] ?>">
            </div>

            <div class="form-group">
                <label for="E_text">Event Description:</label>
                <textarea name="E_text" cols="30" rows="10" placeholder="Enter event description" class="form-control" id="E_text"><?= $row['E_text'] ?></textarea>
            </div>
            
            <div class="form-group">
                <label for="E_date">Event Date:</label>
                <input type="date" name="E_date" class="form-control" id="E_date" value="<?= $row['E_date'] ?>">
            </div>

            <div class="form-group">
                <label for="E_img">Event Image:</label>
                <input type="file" name="img" id="E_img">
            </div>

            <button type="submit" name="submit" class="btn btn-success btn-block my-4">Save</button>
        </form>
    </div>
</body>
</html>
