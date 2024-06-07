<?php

include '../includes/db.php';


session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['job_id'])) {

        $job_id = $_POST['job_id'];


        $stmt = $conn->prepare("SELECT * FROM applied_job WHERE id = :job_id");
        $stmt->bindParam(':job_id', $job_id);
        $stmt->execute();
        $job = $stmt->fetch(PDO::FETCH_ASSOC);


        $checkStmt = $conn->prepare("SELECT COUNT(*) FROM job_listing WHERE title = :title AND location = :location AND description = :description");
        $checkStmt->bindParam(':title', $job['title']);
        $checkStmt->bindParam(':location', $job['location']);
        $checkStmt->bindParam(':description', $job['description']);
        $checkStmt->execute();
        $count = $checkStmt->fetchColumn();

        if ($count == 0) {

            $insertStmt = $conn->prepare("INSERT INTO job_listing(title, location, description) VALUES (:title, :location, :description)");
            $insertStmt->bindParam(':title', $job['title']);
            $insertStmt->bindParam(':location', $job['location']);
            $insertStmt->bindParam(':description', $job['description']);
            $insertStmt->execute();
        }
    }
}
$stmt = $conn->query("SELECT * FROM applied_job");
$applied_jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applied Jobs</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
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
            background-color: #007bff;
            color: #ffffff;
            border: 2px solid #007bff;
            border-radius: 30px;
            padding: 8px 16px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            border-color: #0056b3;
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
        <h1>Applied Jobs</h1>
        <div class="row">
            <?php foreach ($applied_jobs as $job) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($job['title']) ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= htmlspecialchars($job['location']) ?></h6>
                            <p class="card-text"><?= htmlspecialchars($job['description']) ?></p>

                            <form method="post">
                                <input type="hidden" name="job_id" value="<?= $job['id'] ?>">
                                <button type="submit" class="btn-custom bg-primary " onclick="return confirm('Are you sure you want to apply for this job?')">Apply</button>
                            </form>

                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
    include '../footer.php'
    ?>
</body>

</html>