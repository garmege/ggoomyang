<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자유게시판 글쓰기 페이지</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/insert_view.css">
    <script src="https://kit.fontawesome.com/63ee985f7b.js" crossorigin="anonymous"></script>
    <script defer src="js/script.js"></script>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div id="container">
        <div class="center">
            <div class="insert_view">
                <form action="db_insert.php" method="post" autocomplete="off">
                    <div class="title_line">
                        <label for="title">제목</label>
                        <input type="text" id="title" name="title" maxlength="20">
                    </div>
                    <div class="context">
                        <!-- textarea는 띄어쓰기랑 여백없이 써야 함! -->
                        <textarea name="context" id="context" placeholder="내용을 작성해 주세요."></textarea>
                    </div>
                    <div class="bot_line">
                        <div class="author_box">
                            <label for="author">작성자</label>
                            <input type="text" name="author" id="author">
                        </div>
                        <div class="date_box">
                            <label for="date">작성일</label>
                            <input type="text" name="date" id="date">
                        </div>
                    </div>
                    <div class="btnSet">
                        <button type="submit">글쓰기</button>
                        <button type="reset">다시쓰기</button>
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