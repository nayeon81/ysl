<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>입생로랑</title>
    <!-- 파비콘 -->
    <link rel="shortcut icon" href="img/fvc.png" type="imgs/icon">
    <!-- 스와이퍼 css를 cdn으로 연결 -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <!-- 외부 css -->
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <!-- 제이쿼리 라이브러리 -->
    <script src="js/jquery-3.6.0.js"></script>
    <!-- easing 플러그인 -->
    <script src="js/jquery.easing.1.3.js"></script>
     <!-- 스와이퍼 js를 cdn으로 연결 -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- 외부 js -->
    <script src="js/main.js"></script>
</head>
<body>
    <div class="wrap">
        <!-- header -->
        <? include "header.html"; ?>
        <!-- section -->
        <section class="visual">
            <!-- swiper플러그인 -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide s1">
                    <a href="#">
                        <img src="img/main.png" alt="벨벳드레스">
                    </a>
                  </div>
                  <div class="swiper-slide s2">
                    <a href="#">
                        <img src="img/main2.png" alt="패션쇼">
                    </a>
                  </div>
                  <div class="swiper-slide s3">
                    <a href="#">
                        <img src="img/main3.png" alt="핸드백 컬렉션">
                    </a>
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
        </section>
        <section class="tab">
            <div class="tab_container">
                <h1>YSL HISTORY</h1>
                <div class="tab_in">
                    <div class="tab_btn">
                        <ul>
                            <li><a href="#" class="active">HIS STORY</a></li>
                            <li><a href="#">OLD FASHION</a></li>
                            <li><a href="#">RAW MATERIAL</a></li>
                        </ul>
                    </div>
                    <div class="tab_img">
                        <ul>
                            <li><a href="#">
                                <img src="img/ysl1.jpg" alt="그의 이야기">
                            </a></li>
                            <li><a href="#">
                                <img src="img/ysl1-2.jpg" alt="지나간 패션쇼">
                            </a></li>
                            <li><a href="#">
                                <img src="img/ysl1-3.jpg" alt="원자재">
                            </a></li>
                        </ul>
                    </div>
                    <div class="tab_des">
                        <ul>
                            <li><a href="#"><h2><br>그의 디자인 철학</h2><br>
                                <p>“나는 우아함(elegant)이라는 단어를 좋아하지 않는다.<br>
                                나는 남성을 즐겁게 하기 위해서 옷을 입는 여성을<br> 
                                매력적(appealing)이라고 생각한다. 매력(appeal)이라는<br>
                                단어가 우아함(elegant)이라는 단어를 대체하였다.<br>
                                옷입는 방식보다 삻의 방식이 중요하다.”</p>
                            </a></li>
                            <li><a href="#"><h2><br>지나간 패션쇼</h2><br>
                                <p>르 베스티아르. 22 가을 컬렉션을 시작으로 르 베스티아의<br>
                                아이코닉한 기성복은 지속 가능하고 추적 가능한 소재로만<br> 
                                제작됩니다. 이 이니셔티브는 생 로랑의 전통과 전통을<br> 
                                보존하면서 탁월한 원단을 만들기 위해 수년간의<br> 
                                연구와 개발의 결과입니다.</p>
                            </a></li>
                            <li><a href="#"><h2><br>생 로랑 원자재</h2><br>
                                <p>원자재 SAINT LAURENT는 원자재와 그 출처에 대한<br> 
                                강력하고 일관된 조사가 환경에 미치는 영향을 줄이는 데<br> 
                                중요하다는 사실을 인식하고 있습니다.<br> 
                                주요 원자재의 100% 추적 가능성과 2025년까지<br> 
                                원자재 및 제조 공정 에 대한 KERING의 표준을<br> 
                                100% 준수하기 위해 순조롭게 진행 중입니다.</p>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="collection">
            <h1>YSL COLLECTION</h1>
            <div class="tab_slide">
                <div class="tab_title">
                    <a href="#" class="new active">신제품</a>
                    <a href="#" class="best">추천제품</a>
                </div>
                <div class="tab_slide_con">
                    <div class="tab_slide_list t1 active">
                        <!-- 신제품 슬라이드 -->
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide new1">
                                <div class="boxx">
                                    <h1>새틴 소재의 롱 슬리브<br>플레이수트</h1>
                                        <p>쇼츠를 갖춘 롱 슬리브 플레이수트. 깊게 파인 V 넥,<br> 
                                            앞면에 버튼 디테일, 겉으로 드러나지 않는 웰트.</p>
                                            <a href="#"><span></span><i>VIEW</i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide new2">
                                    <div class="boxx">
                                        <h1>벨벳 소재의 플레어 팬츠<br></h1>
                                        <p><br>플레어 팬츠. 측면에 겉으로 드러나지 않는<br> 
                                            슬래시 포켓, 허리 밴드, 벨트 루프, 위로 접힌 밑단</p>
                                            <a href="#"><span></span><i>VIEW</i></a>
                                    </div>
                                 </div>
                                <div class="swiper-slide new3">
                                    <div class="boxx">
                                        <h1>모헤어 소재의 크롭 스웨터</h1>
                                            <p><br>크롭 스웨터. 책임 있는 모헤어와 재생 나일론 소재,<br> 
                                            라운드 보트 넥라인, 엑스트라 롱 슬리브.</p>
                                            <a href="#"><span></span><i>VIEW</i></a>
                                        </div>
                                    </div>
                                </div>
                            <!-- swiper 왼쪽, 오른쪽 버튼 -->
                            <div class="swiper-button-next myNex2"></div>
                            <div class="swiper-button-prev myPrev2"></div>
                            <!-- swiper 스크롤바 -->
                            <div class="swiper-scrollbar bar1"></div>
                        </div>
                    </div>
                    <div class="tab_slide_list t2">
                        <!-- 추천제품 슬라이드 -->
                        <div class="swiper mySwiper3">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide best1">
                                <div class="boxx">
                                  <h1>쉐브론 울 소재의 더블<br>브레스트 테일러드 드레스</h1>
                                <p>테일러드 드레스. 피크 라펠, 더블 브레스트,<br>
                                    버튼 4개 디테일, 패드를 덧댄 숄더</p>
                                    <a href="#"><span></span><i>VIEW</i></a>
                                </div>
                            </div>  
                              <div class="swiper-slide best2">
                                <div class="boxx">
                                  <h1>락 크리스탈과 메탈 소재의<br>오버사이즈 멀티 스톤 네크리스</h1>
                                <p>네크리스. 탭에 세팅되어 서로 연결된 오버사이즈<br> 
                                    원석, 뒷면에 청키한 케이블 체인</p>
                                    <a href="#"><span></span><i>VIEW</i></a>
                                </div>
                            </div>  
                              <div class="swiper-slide best3">
                                <div class="boxx">
                                <h1>더블 사블레 소재의 컷아웃<br> 
                                쇼트 드레스</h1>
                                <p>쇼트 드레스. 가슴 아래에 컷아웃 디테일,<br> 
                                    스캘럽 처리한 스퀘어 넥라인과 밑단</p>
                                    <a href="#"><span></span><i>VIEW</i></a>
                                </div>
                            </div>  
                            </div>
                            <!-- swiper 왼쪽, 오른쪽 버튼 -->
                            <div class="swiper-button-next myNext3"></div>
                            <div class="swiper-button-prev myPrev3"></div>
                            <!-- swiper 스크롤바 -->
                            <div class="swiper-scrollbar bar2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner">
            <div class="banner_in">
                <h1>YSL NEWS</h1>
                <div class="banner_box">
                    <div class="banner_title">
                        <h4>입생로랑의<br>새로운 소식을 전해드립니다.</h4>
                    </div>
                    <div class="banner_img">
                        <ul>
                            <li class="event1"><a href="#">
                                <h1>GIFT<br>선물 포장</h1>
                            </a></li>
                            <li class="event2"><a href="#">
                                <h1>POP-UP STORE</h1>
                                <p>2022-04.17~04.27</p>
                                <span>현대백화점 동탄점 4층</span>
                            </a></li>
                            <li class="event3"><a href="#">
                                <h1>동대문 디자인 플라자<br>서울 패션위크</h1>
                                <p>2022.04.22</p>
                                <span>1층 DDP홀 / 외부 광장</span>
                            </a></li>
                        </ul>
                    </div>
                    <div class="banner_btn">
                        <a href="#" class="active">
                            <span>EVENT</span>
                            <P>GIFT 선물 포장 서비스</P>
                        </a>
                        <a href="#">
                            <span>EVENT</span>
                            <P>현대백화점 동탄점<br>팝업스토어 행사</P>
                        </a>
                        <a href="#">
                            <span>EVENT</span>
                            <P>입생로랑 DDP 패션위크 행사 </P>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="news_in">
                <h1>YSL SNS</h1>
                <div class="news_list">
                    <ul>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/8-1.jpg" alt="img1">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/8-2.jpg" alt="img2">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/8-3.jpg" alt="img3">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/8-4.jpg" alt="img4">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/8-5.jpg" alt="img5">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/8-6.jpg" alt="img6">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/8-7.jpg" alt="img7">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/8-8.jpg" alt="img8">
                            </div>
                        </a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- 구글 지도 연결 -->
        <section class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50641.04482276138!2d126.87916176622748!3d37.5063779600499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9efcf4693cab%3A0x1b61ec38f6ee5576!2z7J6F7IOd66Gc656R!5e0!3m2!1sko!2skr!4v1650860428578!5m2!1sko!2skr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- <div class="srch_box">
                <p>현재 고객님과 가까운<br>매장을 안내해 드립니다.</p>

            </div> -->
        </section>
        <section class="icons">
            <div class="icons_in">
                <ul>
                    <li><a href="#">
                        <img src="img/icon5.png" alt="제품 메뉴얼">
                        <p>제품 메뉴얼</p>
                    </a></li>
                    <li><a href="#">
                        <img src="img/icon6.png" alt="A/S 및 상담">
                        <p>A/S 및 상담</p>
                    </a></li>
                    <li><a href="#">
                        <img src="img/icon7.png" alt="자주 묻는 질문">
                        <p>자주 묻는 질문</p>
                    </a></li>
                </ul>
            </div>
        </section>
        <section class="info">
            <div class="custom">
                <div class="custom_center">
                    <h4>고객센터</h4>
                    <p>1599-1234</p>
                    <span>(09:30~18:30, 토요일&공휴일 휴무)</span>
                </div>
                <div class="as">
                    <h4>A/S 문의</h4>
                    <p>080-123-1234</p>
                    <span>(09:30~18:30, 토요일&공휴일 휴무)</span>
                </div>
            </div>
            <div class="app">
                <P>언제 어디서든 입생로랑의<br>패션을 AR APP으로 만나보세요!</P>
                <button>APP STORE<span>APP STORE</span></button>
                <button>GOOGLE PLAY<span>GOOGLE PLAY</span></button>
                <a href="#">more</a>
            </div>
            </div>
        </section>
    </div>
    <!-- footer -->
    <? include "footer.html"; ?>
    <!-- top 버튼 -->
    <div class="top">top</div>
    <!-- 사이트맵 -->
    <? include "site.html"; ?>
</body>
</html>