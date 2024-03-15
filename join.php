<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>꾸먕 회원가입 페이지</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/join.css">
    <script defer src="js/join.js"></script>
    <script defer src="js/script.js"></script>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div id="container">
        <div class="join">
            <h1 class="logo">
                <a href="index.php">
                    <img src="img/logo.png" alt="꾸먕 로고">
                </a>
            </h1>
            <h3>회원가입에 필요한 정보를 입력해주세요.</h3>
            <form id="userform" action="join.php" method="post">
                <div class="line">
                    <label for="id">아이디</label>
                    <input type="text" id="id" name="id" autocomplete="off"
                        placeholder="아이디를 입력해주세요." maxlength="15">
                    <p class="error_message">아이디를 입력해주세요.</p>
                </div>
                <div class="line">
                    <label for="pass">비밀번호</label>
                    <input type="password" id="pass" name="pass" autocomplete="off"
                        placeholder="비밀번호를 입력해주세요." maxlength="20">
                    <p class="error_message">비밀번호를 입력해주세요.</p>
                </div>
                <div class="line">
                    <label for="passCheck">비밀번호 확인</label>
                    <input type="password" id="passCheck" name="passCheck" autocomplete="off"
                        placeholder="비밀번호를 입력해주세요." maxlength="20">
                    <p class="error_message">잘못된 비밀번호입니다.</p>
                </div>
                <div class="line">
                    <label for="name">이름</label>
                    <input type="text" id="name" name="name" autocomplete="off"
                        placeholder="이름을 입력해주세요." maxlength="4">
                    <p class="error_message">이름을 입력해주세요.</p>
                </div>
                <div class="line email_line">
                    <label for="userEmailFirst">이메일</label>
                    <input type="text" id="userEmailFirst" name="userEmailFirst" autocomplete="off" >
                    <span>@</span>
                    <select name="userEmailSelect" id="userEmailSelect">
                        <option value="">선택하세요</option>
                        <option value="direct">직접입력</option>
                        <option value="naver.com">naver.com</option>
                        <option value="gmail.com">gmail.com</option>
                        <option value="daum.net">daum.net</option>
                        <option value="hanmail.net">hanmail.net</option>
                    </select>
                    <input type="text" id="userEmailLast" name="userEmailLast" autocomplete="off" readOnly>
                    <p class="error_message">이메일을 입력해주세요.</p>
                </div>
                <div class="line gender_line">
                    <label for="gender">성별</label>
                    <input id="male" type="radio" value="남성" name="gender" class="check">
                    <label for="male" class="gender">남성</label>
                    <input id="female" type="radio" value="여성" name="gender" class="check">
                    <label for="female" class="gender">여성</label>
                    <p class="error_message">성별을 선택해주세요.</p>
                </div>
                <div class="line phone_line">
                    <label for="phoneFirst">연락처</label>
                    <select name="phoneFirst" id="phoneFirst">
                        <option value="010">010</option>
                        <option value="011">011</option>
                        <option value="016">016</option>
                        <option value="030">030</option>
                    </select>
                    <span>-</span>
                    <input type="text" name="phoneMid" id="phoneMid" maxlength="4">
                    <span>-</span>
                    <input type="text" name="phoneLast" id="phoneLast" maxlength="4">
                    <p class="error_message">연락처를 입력해주세요.</p>
                </div>
                <div class="line birth_line">
                    <label for="birth">생년월일</label>
                    <input type="date" id="birth" name="birth" >
                    <p class="error_message">생년월일을 입력해주세요.</p>
                </div>
                <div class="btn_wrap">
                    <button type="submit"class="join_btn">회원가입</button>
                    <button type="reset" class="reset_btn">다시쓰기</button>
                </div>
            </form>
        </div>
    </div>
    <?php
        include "footer.php";
    ?>
</body>
</html>