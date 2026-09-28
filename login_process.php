<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include "db.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];

    $password = $_POST["password"];


    $sql = "SELECT * FROM users WHERE email = ?";


    $stmt = $conn->prepare($sql);


    if (!$stmt) {

        die(
            "Database error: " .
            $conn->error
        );

    }


    $stmt->bind_param(
        "s",
        $email
    );


    $stmt->execute();


    $result = $stmt->get_result();


    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();


        if (
            password_verify(
                $password,
                $user["password"]
            )
        ) {

            $_SESSION["user_id"] =
                $user["id"];

            $_SESSION["user_name"] =
                $user["name"];


            header(
                "Location: dashboard.php"
            );

            exit();

        } else {

            echo "

            <script>

                alert(
                    'Incorrect Password!'
                );

                window.location.href =
                    'login.php';

            </script>

            ";

        }

    } else {

        echo "

        <script>

            alert(
                'User not found! Please register first.'
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