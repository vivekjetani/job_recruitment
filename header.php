<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f9;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .dashboard-card {
            background-color: #2c2c2c;
            color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
        }

        .nav-link {
            background-color: #007bff;
            color: #ffffff;
            border-radius: 50px;
            padding: 10px 20px;
            margin: 0 10px;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }

        .nav-link:hover {
            background-color: #0056b3;
            color: #ffffff;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #ffffff;
            border-radius: 50px;
            padding: 10px 20px;
            margin: 0 10px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-danger:hover {
            background-color: #c82333;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="dashboard-card">
            <h1 class="display-4">Welcome, <?= $_SESSION['username'] ?></h1>
            <nav class="nav justify-content-center mt-4">
            <a class="nav-link" href="../dashboard/index.php">Home</a>
                <a class="nav-link" href="job_recruitment.php">Job Recruitment</a>
                <a class="nav-link" href="apply.php">Apply</a>
                <button class="btn btn-danger nav-link" onclick="confirmLogout()">Logout</button>
            </nav>
        </div>
    </div>

    <script>
        function confirmLogout() {
            if (confirm('Are you sure you want to logout?')) {
                window.location.href = 'logout.php';
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
