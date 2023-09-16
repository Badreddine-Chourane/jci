<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'JCI') or die(mysqli_error($con));

$query = "SELECT * FROM category ORDER BY category.category";

$result = mysqli_query($con, $query) or die(mysqli_error($con));

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <style>
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<a href="/jci/admin" class="btn btn-primary m-3">Back</a>
    <h2 class="mb-4 alert  m-5 text-center">Categories</h2>
    <div class="container">
        <a href="create.php" class="btn btn-success mb-3">Add New Category</a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($rows as $row) {?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?=$row['img']?>" class="card-img-top" alt="Category Image">
                        <div class="card-body">
                            <h5 class="card-title"><?=$row['category']?></h5>
                            <p class="card-text"><?=$row['C_text']?></p>
                        </div>
                        <div class="card-footer">
                            <a href="edit.php?id=<?=$row['C_id']?>" class="btn btn-primary me-2">Edit</a>
                            <a href="delete.php?id=<?=$row['C_id']?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</a>

                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</body>
</html>
