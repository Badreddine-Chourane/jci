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
                <label for="title">Title:</label>
                <input type="text" name="P_titre" placeholder="Enter project title" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="text">Text:</label>
                <textarea name="P_text" cols="30" rows="10" placeholder="Enter project description" class="form-control" id="text"></textarea>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select name="category_id" class="form-control" id="category">
                    <option value="-1">Select category</option>
                    <?php foreach ($rows as $row) {?>
                        <option value="<?=$row['C_id']?>"><?=$row['category']?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="P_img" id="image">
            </div>
            <button type="submit" name="submit" class="btn btn-success btn-block my-4">Save</button>
            <?php 
            if (isset($_POST['submit'])) {
                extract($_POST);
                $P_img = $_FILES['P_img']['name'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($P_img);
                move_uploaded_file($_FILES['P_img']['tmp_name'], $target_file);
                $query = "INSERT INTO Project VALUES (null,'$P_titre','$P_text','$P_img','$category_id')";
                mysqli_query($con, $query) or die(mysqli_error($con));
                header("location:index.php");
            }
            ?>
        </form>
    </div>
</body>
</html>
