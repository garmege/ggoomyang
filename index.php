<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>꾸먕 메인페이지</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://kit.fontawesome.com/63ee985f7b.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script defer src="js/script.js"></script>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div id="container">
        <div class="slider">
            <div class="view">
                <div class="v1">
                    <div class="animation">
                        <div class="star">
                            <img src="img/animation_star.png" alt="움직이는 별">
                        </div>
                        <div class="ggoomyang">
                            <img src="img/animation_cha.png" alt="움직이는 꾸먕">
                        </div>
                    </div>
                    <div class="text">
                        <h3>꿈꾸는 양, 꾸먕</h3>
                        <p>양떼목장에 갇혀 늘 밤하늘을 슬프게 올려다 보던 양이 한 마리 있었습니다.<br>
                        꾸먕은 우연히 생긴 우주목도리로 양떼목장을 탈출한 양의 이름입니다.
                        </p>
                        <a href="#">더 알아보기</a>
                    </div>
                </div>
                <div class="v2"></div>
                <div class="v3"></div>
            </div>
            <button class="left_btn"><i class="fas fa-arrow-circle-left"></i></button>
            <button class="right_btn"><i class="fas fa-arrow-circle-right"></i></button>
            <div class="switch">
                <ul class="pager">
                    <li data-index="0" class="on"></li>
                    <li data-index="1"></li>
                    <li data-index="2"></li>
                </ul>
                <button class="stop_btn"><i class="fas fa-stop-circle"></i></button>
                <button class="play_btn"><i class="fas fa-play-circle"></i></button>
            </div>
        </div>
        <div class="cont2">
            <div class="center">
                <div class="text">
                    <h3>캐릭터 소개</h3>
                    <p>꾸먕과 꾸먕의 친구들을 소개합니다.</p>
                </div>
                <div class="wrap">
                    <div class="box">
                        <a href="#">
                            <div class="imgbox">
                                <img src="img/character1.png" alt="꾸먕">
                            </div>
                            <h3>꾸먕</h3>
                            <p>
                                꾸먕의 메인 캐릭터로, 우주 목도리를 항상 두르고 있습니다.
                                우주 목도리엔 항상 다른 우주가 비치고 있습니다.
                            </p>
                        </a>
                    </div>
                    <div class="box">
                        <a href="#">
                            <div class="imgbox">
                                <img src="img/character2.png" alt="번뱀이">
                            </div>
                            <h3>번뱀이</h3>
                            <p>
                                번뱀이는 꾸먕의 친구로, 번개 뱀입니다.
                                먹구름과 항상 한 몸처럼 다닙니다.
                                번개와 전기를 먹으며, 천둥번개를 통해 번개를 소화시킵니다.
                            </p>
                        </a>
                    </div>
                    <div class="box">
                        <a href="#">
                            <div class="imgbox">
                                <img src="img/character3.png" alt="미래의 친구">
                            </div>
                            <h3>꾸먕의 새 친구</h3>
                            <p>
                                꾸먕이 새 친구를 사귀면 등장합니다.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cont3">
            <div class="center">
                <div class="text">
                    <h3>꾸먕 굿즈</h3>
                    <p>신상 제작은 잠정 중단된 상태입니다.<br>클릭시 해당 판매 페이지로 이동합니다.</p>
                </div>
                <div class="wrap">
                    <div class="box">
                        <a href="https://smartstore.naver.com/ggoomyang/products/5696252032">
                            <div class="imgbox">
                                <div class="circle">
                                    <div class="cart"><i class="fas fa-shopping-cart"></i></div>
                                    <div class="heart"><i class="fas fa-heart"></i></div>
                                </div>
                                <img src="img/cont1.jpg" alt="자몽허니블랙티 꾸먕 씰 스티커">
                            </div>
                        </a>
                        <h4 class="date">2021년 7월</h4>
                        <h3 class="pro">자몽허니블랙티 꾸먕 씰 스티커</h3>
                        <p class="disc">자몽허니블랙티 테마로 만들어진 씰 스티커<br>
                            자글자글한 별과 은하수 홀로그램 코팅
                        </p>
                    </div>
                    <div class="box">
                        <a href="https://smartstore.naver.com/ggoomyang/products/5696262308">
                            <div class="imgbox">
                                <div class="circle">
                                    <div class="cart"><i class="fas fa-shopping-cart"></i></div>
                                    <div class="heart"><i class="fas fa-heart"></i></div>
                                </div>
                                <img src="img/cont2.png" alt="썸머웨이브 꾸먕 씰 스티커">
                            </div>
                        </a>
                        <h4 class="date">2021년 7월</h4>
                        <h3 class="pro">썸머웨이브 꾸먕 씰 스티커</h3>
                        <p class="disc">시원하게 서핑 중인 꾸먕 씰 스티커<br>
                            여름과 잘 어울리는 스파클링 홀로그램 코팅
                        </p>
                    </div>
                    <div class="box">
                        <a href="https://smartstore.naver.com/ggoomyang/products/5152552974">
                            <div class="imgbox">
                                <div class="circle">
                                    <div class="cart"><i class="fas fa-shopping-cart"></i></div>
                                    <div class="heart"><i class="fas fa-heart"></i></div>
                                </div>
                                <img src="img/cont3.jpg" alt="솜사탕 꾸먕 씰 스티커">
                            </div>
                        </a>
                        <h4 class="date">2020년 10월</h4>
                        <h3 class="pro">솜사탕 꾸먕 씰 스티커</h3>
                        <p class="disc">분홍분홍한 솜사탕을 타고 날아다니는 꾸먕들<br>
                            무광 코팅의 부드러운 색감
                        </p>
                    </div>
                    <div class="box">
                        <a href="https://smartstore.naver.com/ggoomyang/products/5450720971">
                            <div class="imgbox">
                                <div class="circle">
                                    <div class="cart"><i class="fas fa-shopping-cart"></i></div>
                                    <div class="heart"><i class="fas fa-heart"></i></div>
                                </div>
                                <img src="img/cont4.jpg" alt="그리스 조각상 꾸먕 씰 스티커">
                            </div>
                        </a>
                        <h4 class="date">2021년 3월</h4>
                        <h3 class="pro">그리스 조각상 꾸먕 씰 스티커</h3>
                        <p class="disc">그리스 로마 신화 컨셉의 씰 스티커<br>
                            홀로그램 코팅의 연분홍 대리석 스타일
                        </p>
                    </div>
                    <div class="box">
                        <a href="https://smartstore.naver.com/ggoomyang/products/5696252032">
                            <div class="imgbox">
                                <div class="circle">
                                    <div class="cart"><i class="fas fa-shopping-cart"></i></div>
                                    <div class="heart"><i class="fas fa-heart"></i></div>
                                </div>
                                <img src="img/cont5.jpg" alt="2021년은 흰소띠꾸먕 씰 스티커">
                            </div>
                        </a>
                        <h4 class="date">2021년 7월</h4>
                        <h3 class="pro">자몽허니블랙티 꾸먕 씰 스티커</h3>
                        <p class="disc">자몽허니블랙티 테마로 만들어진 씰 스티커<br>
                            자글자글한 별과 은하수 홀로그램 코팅
                        </p>
                    </div>
                    <div class="box">
                        <a href="https://smartstore.naver.com/ggoomyang/products/5517945902">
                            <div class="imgbox">
                                <div class="circle">
                                    <div class="cart"><i class="fas fa-shopping-cart"></i></div>
                                    <div class="heart"><i class="fas fa-heart"></i></div>
                                </div>
                                <img src="img/cont6.jpg" alt="꾸먕의 우주 마스킹테이프">
                            </div>
                        </a>
                        <h4 class="date">2021년 7월</h4>
                        <h3 class="pro">꾸먕의 우주 마스킹 테이프</h3>
                        <p class="disc">은은한 색감의 꾸먕의 우주 마테<br>
                            꾸먕의 목도리가 살던 우주를 마스킹테이프에 담았어요.
                        </p>
                    </div>
                    <div class="box">
                        <a href="https://smartstore.naver.com/ggoomyang/products/4971539542">
                            <div class="imgbox">
                                <div class="circle">
                                    <div class="cart"><i class="fas fa-shopping-cart"></i></div>
                                    <div class="heart"><i class="fas fa-heart"></i></div>
                                </div>
                                <img src="img/cont7.png" alt="꾸차 씰 스티커">
                            </div>
                        </a>
                        <h4 class="date">2020년 10월</h4>
                        <h3 class="pro">꾸차 씰 스티커</h3>
                        <p class="disc">공X 의 버블티가 생각나는 꾸차!<br>
                            디테일이 살아있는 버블티 씰 스티커예요.
                        </p>
                    </div>
                    <div class="box">
                        <a href="https://smartstore.naver.com/ggoomyang/products/5240518413">
                            <div class="imgbox">
                                <div class="circle">
                                    <div class="cart"><i class="fas fa-shopping-cart"></i></div>
                                    <div class="heart"><i class="fas fa-heart"></i></div>
                                </div>
                                <img src="img/cont8.jpg" alt="크리스마스 꾸먕 씰 스티커">
                            </div>
                        </a>
                        <h4 class="date">2021년 3월</h4>
                        <h3 class="pro">크리스마스 꾸먕 씰 스티커</h3>
                        <p class="disc">크리스마스 컨셉의 씰 스티커<br>
                            홀로그램 별 코팅으로 반짝반짝 캐롤이 들리는 느낌!
                        </p>
                    </div>
                    <div class="box">
                        <a href="https://smartstore.naver.com/ggoomyang/products/5240466324">
                            <div class="imgbox">
                                <div class="circle">
                                    <div class="cart"><i class="fas fa-shopping-cart"></i></div>
                                    <div class="heart"><i class="fas fa-heart"></i></div>
                                </div>
                                <img src="img/cont9.jpg" alt="오로라 구름 알파벳 씰 스티커">
                            </div>
                        </a>
                        <h4 class="date">2021년 7월</h4>
                        <h3 class="pro">오로라 구름 알파벳 씰 스티커</h3>
                        <p class="disc">오로라 코팅의 몽글몽글 알파벳 씰 스티커<br>
                            영롱하게 리뉴얼된 꾸먕의 오로라 구름 알파벳 스티커
                        </p>
                    </div>
                    <div class="box">
                        <a href="https://smartstore.naver.com/ggoomyang/products/5240424284">
                            <div class="imgbox">
                                <div class="circle">
                                    <div class="cart"><i class="fas fa-shopping-cart"></i></div>
                                    <div class="heart"><i class="fas fa-heart"></i></div>
                                </div>
                                <img src="img/cont10.jpg" alt="오로라 구름 숫자 씰 스티커">
                            </div>
                        </a>
                        <h4 class="date">2021년 7월</h4>
                        <h3 class="pro">오로라 구름 숫자 씰 스티커</h3>
                        <p class="disc">오로라 코팅의 몽글몽글 숫자 씰 스티커<br>
                            오로라 구름 알파벳과 세트로 꾸밀 수 있어요.
                        </p>
                    </div>
                    <div class="box">
                        <a href="https://smartstore.naver.com/ggoomyang/products/5059144269">
                            <div class="imgbox">
                                <div class="circle">
                                    <div class="cart"><i class="fas fa-shopping-cart"></i></div>
                                    <div class="heart"><i class="fas fa-heart"></i></div>
                                </div>
                                <img src="img/cont11.png" alt="꾸먕 플래닛 씰 스티커">
                            </div>
                        </a>
                        <h4 class="date">2020년 10월</h4>
                        <h3 class="pro">꾸먕 플래닛 씰 스티커</h3>
                        <p class="disc">다양한 행성들이 빼곡히 모인 씰 스티커<br>
                            반짝이는 행성들로 골트래커와 우주로 꾸미고 싶은 곳 어디에나 잘 어울려요.
                        </p>
                    </div>
                    <div class="box">
                        <a href="https://smartstore.naver.com/ggoomyang/products/5213344294">
                            <div class="imgbox">
                                <div class="circle">
                                    <div class="cart"><i class="fas fa-shopping-cart"></i></div>
                                    <div class="heart"><i class="fas fa-heart"></i></div>
                                </div>
                                <img src="img/cont12.png" alt="블루베리 꾸먕 씰 스티커">
                            </div>
                        </a>
                        <h4 class="date">2021년 3월</h4>
                        <h3 class="pro">블루베리 꾸먕 씰 스티커</h3>
                        <p class="disc">군침이 도는 블루베리 꾸먕 씰 스티커<br>
                            폴꾸와 스꾸, 다꾸 어디에나 어울리는 블루베리 꾸먕이에요.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cont4">
            <div class="center">
                <ul class="tab_menu">
                    <li class="on"><a href="#">아트워크</a></li>
                    <li><a href="#">공지사항</a></li>
                </ul>
                <ul class="tab_cont">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper list artwork">
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="img/art01.png">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="img/art02.png">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="img/art03.png">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="img/art04.png">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="img/art01.png">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="img/art02.png">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="img/art03.png">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="img/art04.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <li class="list notice">
                        <div class="notice_text"><a href="#"><p>공지사항입니다. 자세한 사항을 보시려면 클릭해주세요.</p></a><span>2021.09.15</span></div>
                        <div class="notice_text"><a href="#"><p>공지사항입니다. 자세한 사항을 보시려면 클릭해주세요.</p></a><span>2021.09.15</span></div>
                        <div class="notice_text"><a href="#"><p>공지사항입니다. 자세한 사항을 보시려면 클릭해주세요.</p></a><span>2021.09.15</span></div>
                        <div class="notice_text"><a href="#"><p>공지사항입니다. 자세한 사항을 보시려면 클릭해주세요.</p></a><span>2021.09.15</span></div>
                        <div class="notice_text"><a href="#"><p>공지사항입니다. 자세한 사항을 보시려면 클릭해주세요.</p></a><span>2021.09.15</span></div>
                    </li> 
                </ul>
            </div>
        </div>
    </div>
    <?php
        include "footer.php";
    ?>
    <div class="scroll_ani">
        <a href="#">
            <i class="fas fa-arrow-up"></i>
        </a>
    </div>
</body>
</html>