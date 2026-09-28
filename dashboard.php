<?php

session_start();

if (!isset($_SESSION["user_name"])) {

    header("Location: login.php");

    exit();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dashboard | CS Department</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


<nav class="navbar">

    <a href="index.php" class="logo">
        <span>CS</span> Department
    </a>


    <div class="nav-links">

        <a href="index.php">
            Home
        </a>

        <a href="index.php#about">
            About
        </a>

        <a href="index.php#programs">
            Programs
        </a>

        <a href="dashboard.php">
            Dashboard
        </a>

        <a href="logout.php" class="nav-login">
            Logout
        </a>

    </div>

</nav>



<section class="dashboard-section">


    <div class="dashboard-card">


        <div class="dashboard-icon">
            👨‍💻
        </div>


        <h1>

            Welcome,
            <?php
            echo htmlspecialchars($_SESSION["user_name"]);
            ?>!

            👋

        </h1>


        <p>

            You have successfully logged into the
            Computer Science Department Website.

        </p>



        <div class="dashboard-info">


            <div>

                <span>
                    📢
                </span>

                <h3>
                    Announcements
                </h3>

                <p>
                    Stay updated with the latest department
                    news and announcements.
                </p>

            </div>



            <div>

                <span>
                    💻
                </span>

                <h3>
                    Technology
                </h3>

                <p>
                    Explore modern technologies and
                    innovations in Computer Science.
                </p>

            </div>



            <div>

                <span>
                    🎓
                </span>

                <h3>
                    Learning
                </h3>

                <p>
                    Continue learning and developing
                    your technical skills.
                </p>

            </div>


        </div>



        <a href="index.php" class="primary-btn">
            Go to Home
        </a>


    </div>

</section>


</body>

</html>