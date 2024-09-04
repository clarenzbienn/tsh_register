<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;600;700&display=swap" />
    <link rel="stylesheet" href="styles/signup.css?v=<?php echo time(); ?>">


  </head>
  <body>
    <div class="main-container">



    <?php

    if (isset($_POST["submit"])) {
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordConfirm = $_POST["con_password"];

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $errors = array();

        if (empty($fullname) || empty($email) || empty($password) || empty($passwordConfirm)) {
            echo "<script type='text/javascript'> alert('All fields are required')</script>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script type='text/javascript'> alert('Email is not valid')</script>";
        } elseif (strlen($password) < 8) {
            echo "<script type='text/javascript'> alert('Password must be at least 8 characters long')</script>";
        } elseif ($password !== $passwordConfirm) {
            echo "<script type='text/javascript'> alert('Password does not match')</script>";
        } else {
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $rowCount = mysqli_stmt_num_rows($stmt);
                if ($rowCount > 0) {
                    echo "<script type='text/javascript'> alert('Email Already Exists')</script>";
                } else {
                    $sql = "INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                    if ($prepareStmt) {
                        mysqli_stmt_bind_param($stmt, "sss", $fullname, $email, $passwordHash);
                        mysqli_stmt_execute($stmt);
                        echo "<script type='text/javascript'> alert('You Are Registered Successfully')</script>";
                    } else {
                        die("Something went wrong");
                    }
                }
            }
        }
    }
?>




    <div class="n"><img src="styles/upang1.png"></div>
      <div class="rectangle">
        <div class="sign-up-frame">
          <span class="sign-up-button">Sign Up</span
          ><span class="welcome-message">Welcome! Create your account.</span>
          
          <form method="POST">          
            <div class="input">
              <div class="flex-row-ec">
                <div class="name">
                  <input type="text" class="full-name" name="fullname" placeholder="Full Name">
                  <div class="rectangle-1"></div>
                </div>
              </div>
              <div class="email">
                <input type="text" class="email-3" name="email" placeholder="Email">
                <div class="rectangle-4"></div>
              </div>
              <div class="pass">
                <input type="password" class="password" name="password" placeholder="Password">
                <div class="rectangle-5"></div>
              </div>
              <div class="con-pass">
                <input type="password" class="confirm-password" name="con_password" placeholder="Confirm Password">
                <div class="rectangle-6"></div>
              </div>
            </div>
            <button type="submit" class="signup-button" name="submit">
              <span class="sign-up-7">Sign Up</span>
            </button>
            <div class="login">
              <span class="have-account">Have an account?</span>
              <a href="login.php" class="log-in">LOG IN</a>
            </div>
          </form> 

        </div>
        <div class="logo">
            <div class="logo-1">
                <div class="tsh-logo"><img src="styles/TSH Logo.png"></div>
            </div>
            <div class="frame">
              <span class="the">The</span>
              <span class="students-herald">Students’Herald</span>
              <span class="truth-above-all">“TRUTH ABOVE ALL”</span>
              <span class="official-publication">THE OFFICIAL PUBLICATION OF PHINMA UNIVERSITY OF PANGASINAN</span>
            </div>
          </div>
      </div>
    </div>
  </body>
</html>
