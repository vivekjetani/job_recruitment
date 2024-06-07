<html>

<head>
    <style>
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -o-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            font-size: 14px;
            background: #fff;
            max-width: 1920px;
            margin: 0 auto;
            overflow-x: hidden;
            font-family: poppins;


        }

        #footer {
            background: #f7f7f7;
            padding: 3rem;
            /* padding-top: 5rem; */
            padding-top: 7rem;
            padding-bottom: 80px;
            background-image: url(https://arena.km.ua/wp-content/uploads/3538533.jpg);
        }

        #footer2 {
            background: #f7f7f7;
            padding: 3rem;
            margin-top: 0px;
            /* padding-top: 5rem; */
            padding-top: 7rem;
            padding-bottom: 80px;
            background-image: url(../images/cards/v748-toon-111.png);
        }

        .logo-footer {
            /* max-width: 300px; */
        }

        .social-links {
            /* display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center; */

        }

        .social-links h2 {
            padding-bottom: 15px;
            font-size: 20px;
            font-weight: 600;
        }

        .social-links img {
            padding-bottom: 25px;
        }

        .social-icons {
            /* display: flex;
    gap: 3rem; */
            display: flex;
            flex-direction: column;
            gap: 1rem;
            color: #777777;
        }

        .social-icons a {
            /* font-size: 18px; */
            /* background: #ffffff; */
            /* box-shadow: rgb(0 0 0 / 8%) 0px 4px 12px;
    padding: 0.4rem 1rem 0.4rem 1rem;
    border-radius: 3px;
  color: #3172DD; */
            /* margin-right: 18px; */
            color: #777777;
        }

        .social-icons a:hover {
            color: #000;
        }

        .social-icons a i {
            box-shadow: rgb(0 0 0 / 8%) 0px 4px 12px;
            padding: 0.4rem 1rem 0.4rem 1rem;
            border-radius: 3px;
            color: #3172DD;
            font-size: 16px;
            margin-right: 12px;
        }

        li {
            list-style: none;
        }

        .useful-link h2 {
            padding-bottom: 15px;
            font-size: 20px;
            font-weight: 600;
        }

        .useful-link img {
            padding-bottom: 15px;
        }

        .use-links {
            line-height: 32px;
        }

        .use-links li i {
            font-size: 14px;
            padding-right: 8px;
            color: #898989;
        }

        .use-links li a {
            color: #303030;
            font-size: 15px;
            font-weight: 500;
            color: #777777;
        }

        .use-links li a:hover {
            color: #000;
        }

        .address h2 {
            padding-bottom: 15px;
            font-size: 20px;
            font-weight: 600;
        }

        .address img {
            padding-bottom: 15px;
        }

        .address-links li a {
            color: #303030;
            font-size: 15px;
            font-weight: 500;
            color: #777777;

        }

        .address-links li i {
            font-size: 16px;
            padding-right: 8px;
            color: #3172DD;

        }

        .address-links li i:nth-child(1) {
            padding-top: 9px;
        }

        .address-links .address1 {
            font-weight: 500;
            font-size: 15px;
            display: flex;
        }

        .address-links {
            line-height: 32px;
            color: #777777;
        }

        .copy-right-sec {
            padding: 1.8rem;
            background: #3172DD;
            color: #fff;
            text-align: center;
        }

        .copy-right-sec a {
            color: #fcd462;
            font-weight: 500;
        }

        a {
            text-decoration: none;
        }

        /* footer section end */
    </style>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<script>
        function confirmLogout() {
            if (confirm('Are you sure you want to log out?')) {
                window.location.href = '../logout.php';
            }
        }
    </script>
</head>

<body>
    <footer id="footer">
        <div class="container">
            <div class="row">
                
                <div class="col-md-3">
                    <div class="useful-link">
                        <h2>Useful Links</h2>
                        <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
                        <div class="use-links">
                            <li><a href="../dashboard/index.php"><i class="fa-solid fa-angles-right"></i> Home</a></li>
                            <li><a href="../dashboard/job_recruitment.php"><i class="fa-solid fa-angles-right"></i> Job
                    Recruitment</a></li>
                            <li><a href="../dashboard/apply.php"><i class="fa-solid fa-angles-right"></i> Apply</a></li>
                            <li> <button class="btn btn-danger nav-link bg-danger align-self-end rounded-pill text-white" onclick="confirmLogout()">Logout</button></li>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="social-links">
                        <h2>Follow Us</h2>
                        <img src="./assets/images/about/home_line.png" alt="">
                        <div class="social-icons">
                            <li><a href=""><i class="fab fa-facebook-f"></i> Facebook</a></li>
                            <li><a href=""><i class="fab fa-brands fa-instagram"></i> Instagram</a></li>
                            <li><a href=""><i class="fab fa-brands fa-linkedin-in"></i> Linkedin</a></li>
                        </div>
                    </div>


                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h2>Address</h2>
                        <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
                        <div class="address-links">
                            <li class="address1"><i class="fas fa-solid fa-location-dot"></i> Kolathur ramankulam-
                                Malappuram Dt
                                Kerala 679338</li>
                            <li><a href=""><i class=" fas fa-solid fa-phone"></i> +91 90904500112</a></li>
                            <li><a href=""><i class=" fas fa-solid fa-envelope"></i> mail@1234567.com</a></li>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </footer>
  
    <section id="copy-right">
        <div class="copy-right-sec">
        <p><i class="fas fa-solid fa-copyright"></i> 2024 Job Recruitment. All rights reserved.</p>
        </div>

    </section>
</body>

</html>