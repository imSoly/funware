<?php
  try{
    require 'dbInfo.php';
?>

<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href='//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSansNeo.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">

    <title>main</title>

    <style type="text/css">
      :root{
        --mainColor: #2075ec;
        --width: 1280px;
      }

      *{font-family: 'Spoqa Han Sans Neo', 'sans-serif';}
      li {list-style: none;}
      a {text-decoration: none;}

      #wrap-container{
        /* background-color: grey; */
        display: flex;
        flex-direction: column;
        height: 100%;
        width: 100%;
        margin: 0 auto;
      }
      #carouselExampleWhite{
        /* background-color: orange; */
        height: 455px;
        width: var(--width);
        margin: 0 auto;
      }
      #main-container{
        background-color: #c8c8c8;
        width: var(--width);
        margin: 0 auto;
      }

      .containers{
        /* display: flex;
        justify-content: center;
        align-items: center; */
      }
      .container-fluid{
        background-color: white;
      }

      @media (max-width: 1300px) {
        #wrap-contents{
          width:1000px;
          margin: 0 auto;
        }
      }

      .main-content{
        margin-top: 90px;
      }

      #ourActivites{
        margin-bottom: 90px;
      }

      .main-titles{
        font-size: 34px;
        font-weight: bold;
        margin-bottom : 0;
      }

      .mainCards{
        width: var(--width);
      }

      /* 플랫디자인! */
      #move-top-btn{
        width: 35px;
        height:35px;
        position: fixed;
        /* display: none; */
        z-index: 999;
        right: 2%;
        bottom: 50px;
        /* border: solid 1px #acacac; */
        border-radius: 3px;
        cursor: pointer;
        box-shadow: 2px 2px 4px #acacac;
      }

      #searchInput{
        width:150px;
        height:25px;
        padding:10px;
        margin:0;
        margin-top:5px;
        transition: .5s ease;
        background-color:#EEEEEE;
        border: 0px;
        border-radius:15px;
      }
      .hideInput {
        opacity: 0;
        visibility: hidden;
        transition: .5s ease;
      }

    </style>


  </head>
  <body>
    <div id="wrap-container">

      <!-- navbar -->
      <div id="more-nav-container">
        <div id="nav-container">
          <!-- NavBar -->
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div id="leftBox">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <button class="nav-btnProject" onclick = "location.href='login.php'">프로젝트 둘러보기</button>
                      <button class="nav-btnProject" onclick = "location.href='newProject.php'">프로젝트 만들기</button>
                    </li>
                  </ul>
                </div>
                <div id="logo">
                    <a class="nav-brand" href="main.php"><b>FunWare</b></a>
                </div>
                  <div id="rightBox">
                  <form action="search.php" method="get" class="d-flex">
                    <input type="text" name="searchText" id="searchInput" class="hideInput">
                    <button class="btn-search-submit" type="button"><img src="img/search.png"></button>
                  </form>
                  <button class="nav-btnMember" onclick = "location.href='login.php'">로그인</button>
                  <button class="nav-btnMember" onclick = "location.href='join.php'">회원가입</button>
                  <button class="nav-btnMember" onclick = "location.href='#'">도움말</button>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#696969;">더보기</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">하나</a></li>
                      <li><a class="dropdown-item" href="#">둘</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">기타</a></li>
                    </ul>
                  </li>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
            </div>
          </nav>
        </div>
      </div>


      <div id="carouselExampleWhite" class="carousel carousel-white slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleWhite" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleWhite" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleWhite" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
    <img src="img/carousel1.png" class="d-block w-100" alt="img/carousel1.png">

    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <img src="img/carousel1.png" class="d-block w-100" alt="img/carousel1.png">

    </div>
    <div class="carousel-item">
    <img src="img/carousel1.png" class="d-block w-100" alt="img/carousel1.png">

    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleWhite" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleWhite" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

      <!-- main -->
      <div id="main-container" class="containers">
        <div>
          <div id="newProject" class="main-content">
            <div class="new-title">
              <p class="main-titles">신규 프로젝트👀</p>
              <p>최근에 나온 프로젝트를 만나보세요</p>
            </div>
            <div id="new-cards" class="mainCards">카드 카드 카드<br>카드 카드 카드<br>더보기</div>
          </div>
          <div id="recommendProject" class="main-content">
            <div class="recommend-title">
              <p class="main-titles">추천 프로젝트🔥</p>
              <p>엄선된 스타트업을 만나보세요</p>
            </div>
            <div id="recommend-cards" class="mainCards">카드 카드 카드<br>카드 카드 카드<br>더보기</div>
          </div>
          <div id="categoryProject" class="main-content">
            <div class="category-title">
              <p class="main-titles">프로젝트 골라보기</p>
              <p>카테고리별 프로젝트를 한 눈에 봐요 &nbsp; 카테고리</p>
            </div>
            <div id="category-cards" class="mainCards">카드 카드 카드<br>카드 카드 카드<br>더보기</div>
          </div>
          <!-- <div class="soonProject">Comming Soon</div> -->
          <div id="ourIntroduction" class="main-content">our Introduction</div>
          <div id="notice" class="main-content">
            <div class="recommend-title">
              <p class="main-titles">공지사항</p>
              <p>새로운 소식을 전달해 드립니다</p>
            </div>
            <div id="recommend-cards" class="mainCards">카드 카드<br>카드 카드<br>카드 카드<br>더보기</div>
          </div>
          <div id="ourActivites" class="main-content">
            <div class="recommend-title">
              <p class="main-titles">불타는 Funny</p>
              <p>펀딩이 불탄다!</p>
            </div>
            <div id="recommend-cards" class="mainCards">< 캐러셀 카드 카드 카드 ></div>
          </div>
        </div>
      </div>

      <!-- footer -->
      <div id="footer-container" class="containers">
        <div class="footer-contents">
          <div>
            <br>
            <p style="color:var(--mainColor);font-size:32px;margin-bottom:0;"><b>FunWare</b></p>
            <p style="color:var(--mainColor);font-size:20px;">®FunWare. INC</p>
          </div><br><br>
          <div class="footer-contentBox">
            <div class="risk-notice">
              <p style="color:var(--mainColor)"><b>투자위험고지</b></p>
              <p><small>스타트업 투자는원금 손실과 유동성 및 현금성에 대한 투자위험을 가지고 있습니다.<br>투자 전에 투자위험고지를 꼭 확인해주세요. <a href="#">투자위험고지 바로가기 ></a></small></p>
              <p><small>㈜FunWare는 중개업(온라인고액투자중개 및 통신판매중개)을 영위하는 플랫폼 제공자로 자금을 모집하는<br>당사자가 아닙니다. 따라서 투자손실의 위험을 보전하거나 리워드 제공을 보장해 드리지 않으며 이에 대한 법적인<br>책임을 지지 않습니다.</small></p>
              <p><small><br>경기도 성남시 수정구 대왕판교로 815 기업지원허브 1004호   |   리워드   031-0000-0000  |   투자  010-0000-0000,    031-0000-0000</small></p>
              <p><small><br>통신판매업신고 : 2021-성남 꿀벌-0000  |  사업자등록번호 : 000 - 00 - 00001  |  대표자  :  이재영,  꿀벌<br>벤처인증기업 : 제 20210000001호</small></p>
            </div>
            <div class="about-us">
              <ul>
                <li><b>ABOUT US</b></li><br>
                <li>Project-Manager 이재영</li>
                <li>Front-end 김민솔</li>
                <li>Back-end 오준석</li>
                <li>Design 이대희</li>
              </ul>
            </div>
            <div class="help">
              <ul>
                <li><b>HELP</b></li><br>
                <li>도움말</li>
                <li>회원가입 기본약관</li>
                <li>FUNWARE 리워드 이용약관</li>
                <li>FUNWARE 투자 이용약관</li>
                <li>개인정보 처리방침(리워드)</li>
                <li>개인정보 처리방침(투자)</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- move top button -->
      <img src="img/topArrow.png" id="move-top-btn">

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script>
      var myCarousel = document.querySelector('#myCarousel')
      var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000,
        wrap: true,
        pause: "hover",
      });

      // myCarousel.addEventListener('slide.bs.carousel', function () {
      // // do something...
      // alert("asd");
      // });


      clickToggle = () => {
        $("#searchInput").hasClass('hideInput') ? searchInput.classList.toggle("hideInput") : searchForm.submit();
      }

      $("#searchInput").blur(()=>{
        $("#searchInput").addClass('hideInput');
      });
      let searchInput = document.querySelector("#searchInput");
      let searchBtn = document.querySelector(".btn-search-submit");
      let searchForm = document.querySelector(".d-flex");
      searchBtn.addEventListener("click", clickToggle, false);


    </script>
  </body>
</html>
<?php
}catch(Exception $e) {
  $result['msg'] = '죄송합니다. 서버 오류입니다.';
}
 ?>
