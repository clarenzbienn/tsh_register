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
    <title>Log In</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;600;700&display=swap" />
    <link rel="stylesheet" href="styles/log-in.css" />
  </head>
  <body>
    <div class="main-container">

    <?php

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
        require_once "database.php";

        
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user) {
            if (password_verify($password, $user["password"])) {
                $_SESSION["user_id"] = $user["id"];
                session_start();
                $_SESSION["user"] = "yes";
                header("Location: index.php");
                exit();
            } else {
                echo "<script type='text/javascript'> alert('Password does not match')</script>";
            }
        } else {
            echo "<script type='text/javascript'> alert('Email does not match')</script>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>


      <div class="n"><img src="styles/upang1.png"></div>
      <div class="rectangle"></div>


      <div class="login-frame">
        <div class="login">
          <span class="log-in-1">Log In</span
          ><span class="welcome-back"
            >Welcome back! Please Log In your account.</span>

          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="username">
              <div class="rectangle-2"></div>
              <input type="text" class="username-3" name="email" placeholder="Email">
            </div>
            <div class="password-input">
              <input type="password" class="password-label" name="password" placeholder="Password">
              <div class="rectangle-4"></div>
            </div>
            <button type="submit" class="login-btn">
              <span class="log-in-text">Log In</span>
            </button>
          </form>


          <div class="sign-up">
            <span class="dont-have-account">Don’t have an account?</span>
            <a href="signup.php" class="sign-up-button">SIGN UP</a>
          </div>
        </div>
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
  </body>
</html>
