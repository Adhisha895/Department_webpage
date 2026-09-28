<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $name =
        $_POST["name"];


    $email =
        $_POST["email"];


    $password =
        $_POST["password"];


    $confirm_password =
        $_POST["confirm_password"];



    if (
        $password !==
        $confirm_password
    ) {

        echo "

        <script>

            alert(
                'Passwords do not match!'
            );

            window.location.href =
                'register.php';

        </script>

        ";

        exit();

    }



    $hashed_password =
        password_hash(
            $password,
            PASSWORD_DEFAULT
        );



    $sql = "

        INSERT INTO users
        (name, email, password)

        VALUES
        (?, ?, ?)

    ";



    $stmt =
        $conn->prepare($sql);



    if (!$stmt) {

        die(
            "Database error: " .
            $conn->error
        );

    }



    $stmt->bind_param(
        "sss",
        $name,
        $email,
        $hashed_password
    );



    if ($stmt->execute()) {

        echo "

        <script>

            alert(
                'Registration Successful! Please login.'
            );

            window.location.href =
                'login.php';

        </script>

        ";

    } else {

        echo "

        <script>

            alert(
                'Error: Email may already be registered.'
            );

            window.location.href =
                'register.php';

        </script>

        ";

    }



    $stmt->close();

    $conn->close();

}

?>