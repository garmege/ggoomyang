<?php
    $num = $_GET['num'];

    include "db_connect.php";

    $sql = "DELETE FROM freeboard WHERE num = $num";

    mysqli_query($conn,$sql);

    header("Location:freeboard.php");
?>