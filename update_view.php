<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자유게시판 글 수정 페이지</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/update_view.css">
    <script src="https://kit.fontawesome.com/63ee985f7b.js" crossorigin="anonymous"></script>
    <script defer src="js/script.js"></script>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div id="container">
        <div class="center">
            <div class="update_view">
                <?php
                    $num = $_GET['num'];

                    include "db_connect.php";

                    $sql = "SELECT * FROM freeboard WHERE num = $num";

                    $result = mysqli_query($conn,$sql);

                    $row = mysqli_fetch_assoc($result);
                ?>
                <form action="db_update.php?num=<?php echo $num;?>" method="post">
                    <div class="title_line">
                        <div class="num"><span><?php echo $row['num']; ?></span></div>
                        <div class="title"><span><?php echo $row['title']; ?></span></div>
                    </div>
                    <div class="context">
                        <!-- textarea는 띄어쓰기랑 여백없이 써야 함! -->
                       <textarea name="context" id="context"><?php echo $row['context'];?></textarea>
                    </div>
                    <div class="bot_line">
                        <div class="author"><?php echo $row['author']; ?></div>
                        <div class="day"><?php echo $row['date']; ?></div>
                    </div>
                    <div class="btnSet">
                        <button type="submit">수정</button>
                        <a href="db_delete.php?num=<?php echo $num; ?>">삭제</a>
                        <a href="freeboard.php">돌아가기</a>
                    </div>
                </form>
            </div>
          
        </div>
    </div>
    <?php
        include "footer.php";
    ?>
</body>
</html>