<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>꾸먕 자유게시판 페이지</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/freeboard.css">
    <script src="https://kit.fontawesome.com/63ee985f7b.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script defer src="js/script.js"></script>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div id="container">
        <div class="freeboard">
            <h3 class="title">자유게시판</h3>
            <div class="search_box">
                <form action="search_result.php" method="get" autocomplete="off">
                    <select name="category" id="category">
                        <option value="title">제목</option>
                        <option value="author">작성자</option>
                    </select>
                    <input type="text" name="search" id="search" placeholder="검색어를 입력하세요.">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <table class="freeboard_table">
                <tr>
                    <th class="th_num">번호</th>
                    <th class="th_title">제목</th>
                    <th class="th_author">작성자</th>
                    <th class="th_date">작성일</th>
                </tr>
                <?php
                    include "db_connect.php";

                    $category = $_GET['category'];
                    $search = $_GET['search'];

                    //출력테스트
                    //echo $category . "<br>";
                    //echo $search . "<br>";

                    $sql = "SELECT num,title,author,date FROM freeboard WHERE $category LIKE '%$search%'";

                    $result = mysqli_query($conn,$sql);

                    for($i = 0; $row = mysqli_fetch_assoc($result); $i++)
                    {
                        echo "<tr>";
                        echo "<td>{$row['num']}</td>";
                        echo "<td><a href='detail_view.php?num={$row['num']}'>{$row['title']}</a></td>";
                        echo "<td>{$row['author']}</td>";
                        echo "<td>{$row['date']}</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
            <div class="write">
                <a href="insert_view.php">글쓰기</a>
            </div>
        </div>
    </div>
    <?php
        include "footer.php";
    ?>
</body>
</html>