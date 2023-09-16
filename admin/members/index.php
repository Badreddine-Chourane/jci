<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'JCI') or die(mysqli_error($con));

$query = "SELECT * from members";
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
    <link rel="stylesheet" href="../https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
    

         <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  
</head>
<body>
    <a href="/jci/admin" class="btn btn-primary m-3">Back</a>
    <h2 class="mb-4 alert  m-5 text-center">Members</h2>
    <div class="container">
    <a href="create.php" class="btn btn-success mb-3">Add New upcoming event</a>
    
    <div class="row">
                <?php foreach ($rows as $row) {?>
                <div class="col">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?=$row['image']?>" alt="..." />
                        <h4><?=$row['nom']?> <?=$row['prenom']?></h4>
                        <p class="text-muted"><?=$row['role']?></p>

                        <a class="btn btn-dark btn-social mx-2" href="<?=$row['Linkdin']?>" aria-label="Larry Parker LinkedIn Profile"><i
                                class="fab fa-linkedin-in"></i></a><br><br>
                                <a href="edit.php?id=<?=$row['M_id']?>" class="btn btn-primary me-2">Edit</a>
                            <a href="delete.php?id=<?=$row['M_id']?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</a>

                    </div>
                </div>
                <?php }?>

        </div></div>
</body>
</html>
