<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'JCI') or die(mysqli_error($con));

$query = "SELECT * from category ";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Project</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2 class="mb-4">Add New Project</h2>
        <form class="form" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="text">category:</label>
                <input type="text" name="category" placeholder="Enter category" class="form-control" id="category">
                
            </div>
            <div class="form-group">
                <label for="text">Text:</label>
                <textarea name="C_text" cols="30" rows="10" placeholder="Enter category description" class="form-control" id="text"></textarea>
            </div>
            
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="img" id="image">
            </div>
            <button type="submit" name="submit" class="btn btn-success btn-block my-4">Save</button>
            <?php 
            if (isset($_POST['submit'])) {
                extract($_POST);
                $img = $_FILES['img']['name'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($img);
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                $query = "INSERT INTO category VALUES (null,'$img','$category','$C_text')";
                mysqli_query($con, $query) or die(mysqli_error($con));
                header("location:index.php");
            }
            ?>
        </form>
    </div>
</body>
</html>
