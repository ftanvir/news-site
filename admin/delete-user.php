<?php
    include 'config.php';

    if($_SESSION['user_role']!=1) {
        header("Location: http://news-site.test/admin/post.php");
    }

    $userid = $_GET['id'];

    $sql = "DELETE FROM user WHERE user_id = {$userid}";

    if(mysqli_query($conn, $sql)) {
        header("Location: http://news-site.test/admin/users.php");
    }
?>