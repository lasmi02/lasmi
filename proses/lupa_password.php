<?php
    // session start();
    if(!empty($_SESSION)){ }else{ session_start(); }

    // connect to database
    $conn = mysqli_connect("localhost", "root", "", "yo_bitch");

    // check connection
    if (!$conn) {
        die("Connection failed: ". mysqli_connect_error());
    }

    // get user input
    $user = $_POST['user'];
    $email = $_POST['email'];

    // check if user exists
    $query = "SELECT * FROM users WHERE username = '$user' AND email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // generate password reset token
        $token = bin2hex(random_bytes(16));

        // update user table with token
        $query = "UPDATE users SET password_reset_token = '$token' WHERE username = '$user' AND email = '$email'";
        mysqli_query($conn, $query);

        // send password reset email
        $subject = "Password Reset";
        $message = "Click on this link to reset your password: <a href='http://example.com/reset_password.php?token=$token'>Reset Password</a>";
        $headers = "From: example@example.com";
        mail($email, $subject, $message, $headers);

        echo "Password reset email sent successfully!";
    } else {
        echo "User tidak ditemukan";
    }

    mysqli_close($conn);
?>