<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'JCI') or die(mysqli_error($con));

$query = "SELECT * from members ";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Member</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <a href="/jci/admin" class="btn btn-primary m-3">Back</a>
    <h2 class="mb-4 alert  m-5 text-center">Add New Member</h2>


<div class="row">
    <div class="col-lg-6 mx-auto">
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" name="nom" id="nom"  required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control" name="prenom" id="prenom" required>
            </div>

            <div class="form-group">
                <label for="role">Rôle:</label>
                <input type="text" class="form-control" name="role" id="role"  required>
            </div>

            <div class="form-group">
                <label for="linkdin">LinkedIn:</label>
                <input type="text" class="form-control" name="linkdin" id="linkdin"  required>
            </div>

            <div class="form-group">
                <label for="image">Image :</label>
                <input type="file" class="form-control" name="image" id="image"  required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Add Member</button>
            <?php 
            if (isset($_POST['submit'])) {
                extract($_POST);
                $image = $_FILES['image']['name'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($image);
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                $query = "INSERT INTO members VALUES (null,'$nom','$prenom','$image','$Linkdin','$role')";
                mysqli_query($con, $query) or die(mysqli_error($con));
                header("location:index.php");
            }
            ?>
        </form>
    </div>
</div>
</body>
</html> 