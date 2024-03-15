<?php
    $title = $_POST['title'];
    $context = $_POST['context'];
    $author = $_POST['author'];
    $date = $_POST['date'];

    include "db_connect.php";

    $sql = "INSERT INTO freeboard(title,context,author,date) VALUES ('$title','$context','$author','$date')";

    mysqli_query($conn,$sql);

    header("Location:freeboard.php");

?>