<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>꾸먕 로그인 페이지</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <script defer src="js/script.js"></script>
    <script defer src="js/login.js"></script>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div id="container">
        <div class="center">
            <h1 class="logo">
                <a href="index.php">
                    <img src="img/logo.png" alt="꾸먕 로고">
                </a>
            </h1>
            <div class="login_box">
                <form action="login.php" method="post">
                    <div class="id_box">
                        <input type="text" name="id" id="id" placeholder="아이디">
                    </div>
                    <div class="pass_box">
                        <input type="password" name="pass" id="pass" placeholder="비밀번호">
                    </div>
                    <div class="login_btn">
                        <button type="submit">로그인</button>
                    </div>
                    <div class="login_remember">
                        <input type="checkbox" id="login_remember" name="login_remember">
                        <label for="login_remember">로그인 상태 유지</label>
                    </div>
                </form>
                <div class="forget">
                    <a href="#">아이디 찾기</a><span class="bar"></span>
                    <a href="#">비밀번호 찾기</a><span class="bar"></span>
                    <a href="join.php">회원가입</a>
                </div>
                <div class="info">
                    <a href="#">이용약관</a><span class="bar"></span>
                    <a href="#">개인정보취급방침</a><span class="bar"></span>
                    <a href="#">책임의 한계와 법적고지</a><span class="bar"></span>
                    <a href="#">회원정보 도움말</a>
                </div>
                <div class="copyright">
                    <div class="bot_logo">
                        <img src="img/logo.png" alt="꾸먕 로고">
                    </div>
                    <span>copyright ⓒ ggoomyang. All Rights Reserved.</span>
                </div>
            </div>
        </div>
    </div>
    <?php
        include "footer.php";
    ?>
</body>
</html>