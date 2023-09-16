<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'JCI') or die(mysqli_error($con));

$query = "SELECT * FROM contact ORDER BY contact.C_id";

$result = mysqli_query($con, $query) or die(mysqli_error($con));

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<a href="/jci/admin" class="btn btn-primary m-3">Back</a>

<h2 class="mb-4 alert  m-5 text-center">Messages</h2>

    <table class="table alert">
        <thead class="bg-dark text-light text-center">
            <tr>
                <th>Full name</th>
                <th>email</th>
                <th>phone</th>
                <th>message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row) {?>
                <tr>
                    <td><?=$row['Full_name']?></td>
                    <td><?=$row['email']?></td>
                    <td><?=$row['phone']?></td>
                    <td><?=$row['message']?></td>
                    <td>
                        <a href="delete.php?id=<?=$row['C_id']?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this upcoming event?')">Delete</a>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>
