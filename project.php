<?php
// Establish database connection
$host = '127.0.0.1';
$user = 'root';
$password = '';
$dbname = 'JCI';
$con = mysqli_connect($host, $user, $password, $dbname) or die(mysqli_error($con));

// Sanitize input from $_GET and prepare SQL query
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$query = "SELECT * FROM project WHERE category_id = $id";

// Execute SQL query and fetch results
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Close database connection
mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .card-container .card {
            margin-right: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="/jci" class="btn btn-primary">Back</a>
        <div class="card-container row gap-2">
            <?php foreach ($rows as $row) {?>
                <!-- Card -->
                <div class="card col">
                    <!-- Card image -->
                    <img class="card-img-top" src="<?=htmlspecialchars($row['P_img'])?>" alt="Card image cap">
                    <!-- Card content -->
                    <div class="card-body">
                        <!-- Title -->
                        <h4 class="card-title"><?=htmlspecialchars($row['P_titre'])?></h4>
                        <!-- Text -->
                        <p class="card-text"><?=htmlspecialchars($row['P_text'])?></p>
                    </div>
                </div>
                <!-- Card -->
            <?php }?>
        </div>
    </div>
</body>
</html>
