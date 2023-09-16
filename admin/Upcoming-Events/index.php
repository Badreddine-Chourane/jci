<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'JCI') or die(mysqli_error($con));

$query = "SELECT * from UpcomingEvent";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Events</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <a href="/jci/admin" class="btn btn-primary m-3">Back</a>
    <h2 class="mb-4 alert  m-5 text-center">Upcoming Events</h2>
    
    <div class="container my-5">
        <a href="create.php" class="btn btn-success mb-3">Add New upcoming event</a>
        <div class="row">
            <?php foreach($rows as $row): ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?=$row['E_img']?>" alt="Event image" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?=$row['E_nom']?></h5>
                        <p class="card-text"><?=$row['E_text']?></p>
                        <p class="card-text"><?=$row['E_date']?></p>
                    </div>
                    <div class="card-footer">
                            <a href="edit.php?id=<?=$row['UE_id']?>" class="btn btn-primary me-2">Edit</a>
                            <a href="delete.php?id=<?=$row['UE_id']?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this upcoming event?')">Delete</a>

                        </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
