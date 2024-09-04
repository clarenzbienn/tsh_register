<?php

function setComments($conn) {
    if (isset($_POST['commentSubmit'])){
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments(uid, date, message) VALUES('$uid', '$date', '$message')";
        global $conn;
        $result = mysqli_query($conn, $sql);

    }
}


function getComments($conn) {
    $sql = "SELECT comments.*, users.fullname FROM comments
            INNER JOIN users ON comments.uid = users.id
            ORDER BY comments.date DESC";
    $result = $conn->query($sql);

    if (!$result) {
        echo "Error: " . $conn->error;
        return; 
    }

    while ($row = $result->fetch_assoc()) {
        echo "<div class='comment-box'>";
        echo "<div class='comment-info'>";
        echo "<span class='comment-uid'>" . $row['fullname'] . "</span><br>";
        echo "<span class='comment-date'>" . $row['date'] . "</span><br>";
        echo "</div>";
        echo "<div class='comment-message'>" . nl2br($row['message']) . "</div>";

        if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $row['uid']) {
            // Display edit and delete buttons only if the logged-in user matches the comment author
            echo "<form class='delete-form' method='POST' action='herald-delete-comment.php'>
                    <input type='hidden' name='cid' value='" . $row['cid'] . "'>
                    <button type='submit' name='commentDelete'>Delete</button>
                </form> 
                <form class='edit-form' method='POST' action='herald-edit-comment.php'>
                    <input type='hidden' name='cid' value='" . $row['cid'] . "'>
                    <input type='hidden' name='uid' value='" . $row['uid'] . "'>
                    <input type='hidden' name='date' value='" . $row['date'] . "'>
                    <input type='hidden' name='message' value='" . $row['message'] . "'>
                    <button>Edit</button>
                </form>";        
        }
               
        echo "</div>";
    }
}

function getCommentss($conn) {
    $sql = "SELECT comments.*, users.fullname FROM comments
            INNER JOIN users ON comments.uid = users.id
            ORDER BY comments.date DESC";
    $result = $conn->query($sql);
    if (!$result) {
        echo "Error: " . $conn->error;
        return;
    }

    while ($row = $result->fetch_assoc()) {
        echo "<div class='comment-box'>";
        echo "<div class='comment-info'>";
        echo "<span class='comment-uid'>" . $row['fullname'] . "</span><br>";
        echo "<span class='comment-date'>" . $row['date'] . "</span><br>";
        echo "</div>";
        echo "<div class='comment-message'>" . nl2br($row['message']) . "</div>";
        echo "      
        </div>";
    }
}



function editComments($conn) {
    if (isset($_POST['commentSubmit'])){
        $cid = $_POST['cid'];
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";
        global $conn;
        $result = mysqli_query($conn, $sql);
        header("Location: heraldhowler.php");

    }
}

function deleteComments($conn){
    if (isset($_POST['commentDelete'])){
        $cid = $_POST['cid'];

        $sql = "DELETE FROM comments WHERE cid='$cid'";
        global $conn;
        $result = mysqli_query($conn, $sql);
    }
}