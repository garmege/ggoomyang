<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>꾸먕 자유게시판 게시글</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/detail_view.css">
    <script src="https://kit.fontawesome.com/63ee985f7b.js" crossorigin="anonymous"></script>
    <script defer src="js/script.js"></script>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div id="container">
        <div class="center">
            <div class="detail_view">
                <?php
                    $num = $_GET['num'];

                    include "db_connect.php";

                    $sql = "SELECT * FROM freeboard WHERE num = $num";

                    $result = mysqli_query($conn,$sql);

                    $row = mysqli_fetch_assoc($result);
                ?>
                <div class="title_line">
                    <div class="num"><span><?php echo $row['num']; ?></span></div>
                    <div class="title"><?php echo $row['title']; ?></div>
                </div>
                <div class="context"><?php echo $row['context']; ?></div>
                <div class="bot_line">
                    <div class="author"><?php echo $row['author']; ?></div>
                    <div class="day"><?php echo $row['date']; ?></div>
                </div>
            </div>
            <div class="btnSet">
                <a href="update_view.php?num=<?php echo $num; ?>">수정</a>
                <a href="db_delete.php?num=<?php echo $num; ?>">삭제</a>
                <a href="freeboard.php">돌아가기</a>
            </div>
        </div>
    </div>
    <?php
        include "footer.php";
    ?>
</body>
</html>