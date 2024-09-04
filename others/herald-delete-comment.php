<?php
// Include your database connection
include 'heralddbh.inc.php';

// Check if the commentDelete button was clicked
if (isset($_POST['commentDelete'])) {
    // Get the comment ID
    $cid = $_POST['cid'];

    // Prepare and execute the SQL query to delete the comment
    $sql = "DELETE FROM comments WHERE cid='$cid'";
    $result = mysqli_query($conn, $sql);

    // Redirect back to the original page
    header("Location: heraldhowler.php");
    exit(); // Stop further execution
}
?>
