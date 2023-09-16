<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'JCI') or die(mysqli_error($con));

$query = "SELECT * FROM project INNER JOIN category ON category.C_id = project.category_id ORDER BY category.category";

$result = mysqli_query($con, $query) or die(mysqli_error($con));

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    
    <style>
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<a href="/jci/admin" class="btn btn-primary m-3">Back</a>
    <h2 class="mb-4 alert  m-5 text-center">Projects</h2>
    <div class="container">
        <a href="create.php" class="btn btn-success mb-3">Add New Project</a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($rows as $row) {?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?=$row['P_img']?>" class="card-img-top" alt="Project Image">
                        <div class="card-body">
                            <h5 class="card-title"><?=$row['P_titre']?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?=$row['category']?></h6>
                            <p class="card-text"><?=$row['P_text']?></p>
                        </div>
                        <div class="card-footer">
                            <a href="edit.php?id=<?=$row['P_id']?>" class="btn btn-primary me-2">Edit</a>
                            <a href="delete.php?id=<?=$row['P_id']?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this project?')">Delete</a>

                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</body>
</html>
