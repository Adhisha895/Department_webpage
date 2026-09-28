<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login | CS Department</title>

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

        <a href="about.php">
            About
        </a>

        <a href="index.php#programs">
            Programs
        </a>

        <a href="index.php#contact">
            Contact
        </a>

        <a href="register.php">
            Register
        </a>

        <a href="login.php" class="nav-login">
            Login
        </a>

    </div>

</nav>



<section class="auth-section">

    <div class="auth-card">

        <p class="section-label">
            WELCOME BACK
        </p>


        <h1>
            Login to Your Account
        </h1>


        <p class="auth-description">
            Enter your details to access the department portal.
        </p>


        <form action="login_process.php" method="POST">


            <label>
                Email Address
            </label>

            <input
                type="email"
                name="email"
                placeholder="Enter your email"
                required
            >


            <label>
                Password
            </label>

            <input
                type="password"
                name="password"
                placeholder="Enter your password"
                required
            >


            <button type="submit">
                Login
            </button>


        </form>


        <p class="auth-link">

            Don't have an account?

            <a href="register.php">
                Register Now
            </a>

        </p>


        <a href="index.php" class="home-link">
            ← Back to Home
        </a>

    </div>

</section>


</body>

</html>