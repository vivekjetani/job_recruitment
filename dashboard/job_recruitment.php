<?php

include '../includes/db.php';


session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['job_id'])) {
    $job_id = $_POST['job_id'];


    $stmt = $conn->prepare("SELECT * FROM job_listing WHERE id = ?");
    $stmt->execute([$job_id]);
    $job = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($job) {

        $stmt = $conn->prepare("INSERT INTO applied_job (title, location, description,created_at) VALUES (?, ?, ?, 'Canceled')");
        $stmt->execute([$job['title'], $job['location'], $job['description']]);


        $stmt = $conn->prepare("DELETE FROM job_listing WHERE id = ?");
        $stmt->execute([$job_id]);


        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}


$stmt = $conn->query("SELECT * FROM job_listing");
$jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Requirements</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-title {
            font-weight: bold;
            color: #343a40;
        }

        .card-subtitle {
            color: #6c757d;
        }

        .btn-custom {
            background-color: #dc3545;
            color: #ffffff;
            border: 2px solid #dc3545;
            border-radius: 30px;
            padding: 8px 16px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
        }

        .btn-custom:hover {
            background-color: #c82333;
            border-color: #c82333;
        }


        .card-text {
            height: 100px;

            overflow: hidden;
            text-overflow: ellipsis;
        }

        .card-body {
            padding: 20px;
        }

        .card-body form {
            display: flex;
            justify-content: center;
        }

        .no-jobs-message {
            text-align: center;
            margin-top: 50px;
            font-size: 2rem;
            color: #6c757d;
        }
    </style>
    <script>
        function confirmLogout() {
            if (confirm('Are you sure you want to log out?')) {
                window.location.href = '../logout.php';
            }
        }
    </script>
</head>

<body>
    <?php
    include '../header.php'
    ?>
    <div class="container mt-5">
        <div class="row">
            <?php if (empty($jobs)) : ?>
                <div class="col-12 no-jobs-message">
                    You have not applied for any jobs.
                </div>
            <?php else : ?>
                <?php foreach ($jobs as $job) : ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($job['title']) ?></h5>
                                <!-- <h6 class="card-subtitle mb-2 text-muted"><?= htmlspecialchars($job['companyname']) ?></h6> -->
                                <p class="card-text"><?= htmlspecialchars($job['description']) ?></p>
                                <form method="post">
                                    <input type="hidden" name="job_id" value="<?= $job['id'] ?>">
                                    <button type="submit" class="btn-custom" onclick="return confirm('Are you sure you want to cancel this application?')">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>
    <?php
    include '../footer.php'
    ?>
</body>

</html>