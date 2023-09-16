<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'JCI') or die(mysqli_error($con));

// Check if the member id is set in the URL parameter
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the member's information from the database
    $query = "SELECT * FROM members WHERE M_id = $id";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $row = mysqli_fetch_assoc($result);
} 

// Update the member's information if the form is submitted
if (isset($_POST['submit'])) {
    extract($_POST);
    $image = $_FILES['image']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
    $query = "UPDATE members SET nom = '$nom', prenom = '$prenom', image = '$image', Linkdin = '$Linkdin', role = '$role' WHERE M_id = $id";
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
    <title>Edit Member</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <a href="/jci/admin" class="btn btn-primary m-3">Back</a>
    <h2 class="mb-4 alert  m-5 text-center">Edit Member</h2>

    <div class="row">
        <div class="col-lg-6 mx-auto">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom">Nom:</label>
                    <input type="text" class="form-control" name="nom" id="nom" value="<?= $row['nom'] ?>">
                </div>

                <div class="form-group">
                    <label for="prenom">Prénom:</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" value="<?= $row['prenom'] ?>">
                </div>

                <div class="form-group">
                    <label for="role">Rôle:</label>
                    <input type="text" class="form-control" name="role" id="role" value="<?= $row['role'] ?>">
                </div>

                <div class="form-group">
                    <label for="linkdin">LinkedIn:</label>
                    <input type="text" class="form-control" name="linkdin" id="linkdin" value="<?= $row['Linkdin'] ?>">
                </div>

                <div class="form-group">
                    <label for="image">Image :</label>
                    <input type="file" class="form-control" name="image" id="image" value="<?= $row['image'] ?>">
                </div>
            <button type="submit" name="submit" class="btn btn-success btn-block my-4">Save</button>

                    
            </form>
        </div>
    </div>
</body>
</html>