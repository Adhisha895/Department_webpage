<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Register | CS Department</title>

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
            CREATE ACCOUNT
        </p>


        <h1>
            Join Our Department
        </h1>


        <p class="auth-description">
            Create your account to access the department portal.
        </p>


        <form action="register_process.php" method="POST">


            <label>
                Full Name
            </label>

            <input
                type="text"
                name="name"
                placeholder="Enter your full name"
                required
            >


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
                placeholder="Create a password"
                required
            >


            <label>
                Confirm Password
            </label>

            <input
                type="password"
                name="confirm_password"
                placeholder="Confirm your password"
                required
            >


            <button type="submit">
                Create Account
            </button>


        </form>


        <p class="auth-link">

            Already have an account?

            <a href="login.php">
                Login
            </a>

        </p>


        <a href="index.php" class="home-link">
            ← Back to Home
        </a>

    </div>

</section>


</body>

</html>