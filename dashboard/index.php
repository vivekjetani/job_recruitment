<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">

    <style>
        .jumbotron {
            background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('../img/pexels-sora-shimazaki-5673502.jpg');
            background-size: cover;
            background-position: center;
            padding: 50px 30px;
            text-align: center;
        }

        .jumbotron h1 {
            font-size: 4rem;
            font-weight: bold;
            color: #343a40;
        }

        .jumbotron p.lead {
            font-size: 1.5rem;
            color: #6c757d;
        }

        .image-gallery img {
            max-width: 100%;
            height: auto;
            margin: 10px 0;
        }

        .image-gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .image-gallery img {
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .image-gallery img:hover {
            transform: scale(1.05);
        }

        /* styles.css */
        /* styles.css */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }

        .content {
            padding: 20px;
        }

        .section {
            margin: 50px 0;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s, transform 0.6s;
        }

        .section img {
            max-width: 100%;
            border-radius: 8px;
            margin-top: 20px;
        }

        .hero {
            text-align: center;
            background: linear-gradient(to bottom, #2ecc71, #27ae60);
            color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #statistics {
            text-align: center;
        }

        .stats {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .stat {
            text-align: center;
            flex: 1;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .stat:hover {
            transform: translateY(-5px);
        }

        .stat i {
            font-size: 36px;
            color: #3498db;
            margin-bottom: 10px;
        }

        .jobs {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-around;
        }

        .job {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 30%;
            text-align: center;
        }

        .job img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }

     

        .section.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .section-heading {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-heading h2 {
            font-size: 36px;
            color: #333333;
            margin-bottom: 20px;
        }

        .section-heading p {
            font-size: 18px;
            margin-bottom: 0;
        }

        .about-description {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .about-description p {
            color: #666666;
            font-size: 16px;
            margin-bottom: 20px;
        }
    </style>

   
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.section');

            const options = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        if (entry.target.id === 'statistics') {
                            animateStatistics();
                        }
                        observer.unobserve(entry.target);
                    }
                });
            }, options);

            sections.forEach(section => {
                observer.observe(section);
            });

            function animateStatistics() {
                const stats = document.querySelectorAll('.stat h3');
                stats.forEach(stat => {
                    const endValue = parseInt(stat.textContent);
                    let startValue = 0;
                    const duration = 3000; // Adjust duration to 3000 milliseconds (3 seconds)
                    const step = Math.floor(duration / endValue);
                    const interval = setInterval(() => {
                        if (startValue >= endValue) {
                            clearInterval(interval);
                        } else {
                            startValue++;
                            stat.textContent = startValue;
                        }
                    }, step);
                });
            }
        });
    </script>

</head>

<body>
<?php
    include '../header.php'
    ?>
    <div class="jumbotron">
        <h1 class="display-1">Get A Job with Us</h1>
        <p class="lead">Join our team and explore exciting opportunities!</p>
    </div>
    <div class="container image-gallery">
        <img src="../img/pexels-sora-shimazaki-5673502.jpg" alt="Job Image">
        <img src="../img/pexels-fauxels-3184465.jpg" alt="Job Image">
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    </div>
    <div class="content">
        <section class="section" id="statistics">
            <h2>Our Achievements</h2>
            <div class="stats">
                <div class="stat">
                    <i class="fas fa-users"></i>
                    <h3>1000</h3>
                    <p>Happy Customers</p>
                </div>
                <div class="stat">
                    <i class="fas fa-building"></i>
                    <h3>500</h3>
                    <p>Companies</p>
                </div>
                <div class="stat">
                    <i class="fas fa-star"></i>
                    <h3>800</h3>
                    <p>Reviews</p>
                </div>
            </div>
        </section>

        <section class="section" id="about">
        <div class="section-heading">
            <h2>About Us</h2>
            <p>Discover the latest job opportunities across various industries. Whether you're an entry-level candidate or an experienced professional, explore our diverse range of openings.</p>
        </div>
        
        <div class="about-description">
            <p>We are dedicated to connecting top talent with the best companies. Our mission is to streamline and optimize the hiring process, ensuring both employers and candidates find the perfect match seamlessly.</p>
        </div>
            <img src="../img/pexels-fauxels-3184424.jpg" alt="About Us">
        </section>

        <section class="section" id="jobs">
            <h2>Available Jobs</h2>
            <p>Find the latest job openings in various industries. Whether you are a fresher or an experienced professional, we have something for you.</p>
            <div class="jobs">
                <div class="job">
                    <img src="../img/pexels-thisisengineering-3861958.jpg" alt="Job 1">
                    <h3>Software Engineer</h3>
                    <p>Location: New York</p>
                  
                </div>
                <div class="job">
                    <img src="../img/pexels-pixabay-265087.jpg" alt="Job 2">
                    <h3>Data Scientist</h3>
                    <p>Location: San Francisco</p>
                   
                </div>
                <div class="job">
                    <img src="../img/pexels-fauxels-3184298.jpg" alt="Job 3">
                    <h3>Product Manager</h3>
                    <p>Location: Boston</p>
                  
                </div>
            </div>
        </section>
    </div>
    <?php
    include '../footer.php'
    ?>

</body>


</html>