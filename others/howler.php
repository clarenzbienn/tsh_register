<?php
  // Start session
  session_start();

  // Set timezone
  date_default_timezone_set('Asia/Manila');

  // Include necessary files
  include 'heralddbh.inc.php';
  include 'heraldcomments.inc.php';

  // Check if user is already logged in
  if (isset($_SESSION["user"])) {
      header("Location: ../others/heraldhowler.php");
      exit(); // Stop further execution
  } else {
      header("Location: ../index.php");
      exit(); // Stop further execution
  }
?>
