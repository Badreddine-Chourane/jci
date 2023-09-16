<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
        }

        .container {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-top: 50px;
            padding: 20px;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-warning:hover {
            background-color: #ff9800;
            border-color: #ff9800;
        }

        .btn-warning:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
        }

        .btn-warning:active {
            background-color: #ff9800;
            border-color: #ff9800;
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5) inset;
        }

        .btn-warning:not(:disabled):not(.disabled).active, .btn-warning:not(:disabled):not(.disabled):active {
            background-color: #ff9800;
            border-color: #ff9800;
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5) inset;
        }

        .btn-warning:not(:disabled):not(.disabled):focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <h1>Admin Panel</h1>
        </div>
    </nav>

    <div class="container mt-5">
        <a href="category" class="btn btn-dark form-control mt-3">View Categories</a>
        <a href="project" class="btn btn-dark form-control mt-3">View Projects</a>
        <a href="Upcoming-Events" class="btn btn-dark form-control mt-3">View Upcoming Events</a>
        <a href="members" class="btn btn-dark form-control mt-3">View Members</a>
        <a href="messages" class="btn btn-dark form-control mt-3">View All Messages</a>
    </div>

    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
