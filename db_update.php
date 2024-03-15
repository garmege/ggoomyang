<?php
    $num = $_GET['num'];
    $title = $_POST['title'];
    $context = $_POST['context'];

    include "db_connect.php";

    $sql = "UPDATE freeboard SET title='$title', context='$context' WHERE num=$num";

    mysqli_query($conn,$sql);

    header("Location:freeboard.php");
?>