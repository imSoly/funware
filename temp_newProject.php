<?php
try {
  require 'dbInfo.php';
  include 'isSession.php';
  // echo $_SESSION["userName"].' --> My Page';
?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/7637a8f104.js" crossorigin="anonymous"></script>

    <link href='//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSansNeo.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/funware_src/nav.css">
    <link rel="stylesheet" href="css/funware_src/cards.css">
    <link rel="stylesheet" href="css/funware_src/footer.css">

    <title>펀웨어 - 프로젝트 만들기</title>

    <style>
      :root{
        --mainColor: #1a72ec;
        --width: 1280px;
        --gray0: #f8f9fa;
        --gray1: #f1f3f5;
        --gray2: #e9ecef;
        --gray3: #dee2e6;
      }

      /* 배경, 뉴모피즘 테스트 */
      body{
        background: var(--gray1);
      }

      *{
        font-family: 'Spoqa Han Sans Neo', 'sans-serif';
        /* margin: 0;
        padding: 0; */
      }
      li {list-style: none;}
      a {text-decoration: none;}

      #wrap-container{
        display: flex;
        flex-direction: column;
        height: 100%;
        width: 100%;
      }

      #formBox{
        background-color: var(--gray1);
        width: 100%;
        margin-top: 105px;
      }

      /* 탭 메뉴 */
      .tabArea {
        background-color: #fff;
        width: var(--width);
        margin: 0 auto;
        /* padding-top: 80px;
        padding-bottom: 150px; */
      }
      .tabArea .tab{
        background-color: var(--gray1);
        display: flex;
        /* justify-content: center; */
        text-align: center;
        padding: 0;
        /* border-bottom: 1px solid #d1d1d1; */
      }
      .tabArea .tab li{
        width: 230px;
        padding: 24px;
        border-radius: 6px 6px 0 0;
      }
      /* 탭버튼 눌렀을시 글자 색상변경  */
      .tabArea .tab li a {
        font-size: 26px;
        font-weight: 500;
        /* color: #575757; */
        color: #212121;
      }
      /* 탭박스 영역 기본 옵션은 디스플레이 숨김 */
      .tabArea .tab li.on a{
        /* font-weight: bold; */
        /* color: var(--mainColor); */
      }
      .tabArea .tab li.on{
        background-color: white;
        /* border-bottom: 3px solid var(--mainColor); */
        }
      /* 탭버튼이 눌러졌을시 관련된 탭박스 활성화 */
      .tabArea .tabBox {
        background-color: var(--gray1);
        display: none; 
        padding-top: 100px;
      }
      .tabArea .tabBox.on { 
        background-color: #fff;
        display: block; 
      }

      #newProjectForm{
        width: var(--width);
      }
      .wrapForm{
        background-color: #fff;
        border: solid 1px #d1d1d1;
        border-radius: 12px;
      }
      .formTitle{
        font-size: 24px;
        letter-spacing: 0.48px;
        color: #575757;
      }
      .formInputBox{
        width: 100%;
        /* height: 143.5px; */
        border-top: 1px solid #d1d1d1;
        padding: 30px 80px 20px 80px;
      }
      .inputNames{
        font-size: 24px;
        font-weight: 500;
        letter-spacing: -0.48px;
        color: #575757;
      }
      .beforeInputShow{
        font-size: 26px;
        letter-spacing: -0.52px;
        color: #fa6462;
        cursor: pointer;
      }
      .afterInputShow{
        /* background-color: red; */
        width: 100%;
        display: none;
      }
      .wrapInput{
        width: 100%;
        display: flex;
        justify-content: space-between;
      }
      .inputPName{
        width: 403px;
        height: 45px;
        border: solid 1px #d1d1d1;
      }
      .ctgSelect{
        width: 403px;
        height: 45px;
      }
      .btnSave{
        width: 125px;
        height: 30px; 
        border: none;
        border-radius: 6px;
        background-color: var(--mainColor);
        color: #fff;
      }
      


    </style>
</head>
<body>
<div id="wrap-container">
  <!-- Navbar -->
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
                <a class="nav-brand" href="http://funware.shop/"><b>FunWare</b></a>
            </div>
              <div id="rightBox">
              <form action="search.php" method="get" class="d-flex">
                <input type="text" name="searchText" id="searchInput" class="hideInput">
                <button class="btn-search-submit" type="button"><img src="img/search.png"></button>
              </form>
              <?php
                    if($user_login){
                   ?>
                       <button class="nav-btnMember" onclick="location.href='myPage.php'">
                          <img class="profileImg" src="img/defaultProfile.jpg">
                          <?=$_SESSION["userName"]?> 님
                      </button>
                      <button class="nav-btnMember" onclick="location.href='logout.php'">로그아웃</button>
                  <?php
                     }else{
                   ?>
                      <button class="nav-btnMember" onclick="location.href='login.php'">로그인</button>
                      <button class="nav-btnMember" onclick="location.href='join.php'">회원가입</button>
                   <?php
                     }
                    ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#696969;">더보기</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="notice.php">공지사항</a></li>
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

  <!-- register form -->
  <div id="formBox">

    <section class="tabArea">
      <ul class="tab">
        <li class="on">
          <a href="#!">프로젝트 개요</a>
        </li>
        <li>
          <a href="#!">기업 정보 등록</a>
        </li>
      </ul>
      
      <form id="newProjectForm" action="">

        <div class="tabBox on">
          <p class="formTitle">프로젝트 개요</p>
          <div class="wrapForm">

            <div class="formInputBox">
              <p class="inputNames">프로젝트 이름이 뭐예요?</p>
              <p class="beforeInputShow">▶&nbsp;&nbsp;프로젝트 이름을 입력해 주세요.</p>
              <div class="afterInputShow">
                <p>프로젝트에 멋진 이름을 작성해 주세요!</p>
                <div class="wrapInput">
                  <input type="text" class="inputPName">
                  <button class="btnSave" type="button">저장하기</button>
                </div>
              </div>
            </div>

            <div class="formInputBox">
              <p class="inputNames">프로젝트 카테고리 설정해 주세요! </p>
              <p class="beforeInputShow">▶&nbsp;&nbsp;프로젝트 카테고리를 설정해주세요.</p>
              <div class="afterInputShow">
                <div class="wrapInput">
                <select class="ctgSelect" name="language">
                  <?php 
                    $q1 = $db->query('select f_category_name from tbl_category');
                    while($row = $q1->fetch(PDO::FETCH_ASSOC)){ //$row["f_category_name"]
                      echo '<option class="ctgOption" value="'.$row["f_category_name"].'">'.$row["f_category_name"].'</option>';    
                    }
                  ?>
                </select>
                  <button class="btnSave" type="button">저장하기</button>
                </div>
              </div>
            </div>

            <div class="formInputBox">
              <p class="inputNames">프로젝트 이미지를 등록해 주세요!</p>
              <p class="beforeInputShow">▶&nbsp;&nbsp;프로젝트 이미지를 등록해주세요.</p>
            </div>
            <div class="formInputBox">
              <p class="inputNames">프로젝트 기간을 설정해 주세요!</p>
              <p class="beforeInputShow">▶&nbsp;&nbsp;프로젝트 기간을 설정해주세요.</p>
            </div>
            <div class="formInputBox">
              <p class="inputNames">프로젝트를 설명해주세요!</p>
              <p class="beforeInputShow">▶&nbsp;&nbsp;프로젝트를  설명해주세요.</p>
            </div>
        </div>
          
        </div>

        <div class="tabBox">
          <p>기업 정보 등록</p>
        </div>

      </form>
    </section>
    

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
          <p><small>스타트업 투자는원금 손실과 유동성 및 현금성에 대한 투자위험을 가지고 있습니다.<br>투자 전에 투자위험고지를 꼭 확인해주세요. <a id="risk-a"href="#">투자위험고지 바로가기 ></a></small></p>
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

</div>


  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
// tab menu
    $(document).ready(function(){
        $(".tabArea .tab li a").on("click", function(){
          // 해당 요소를 클릭하는 내 자신의 index 번호를 가져온다. [0], [1]
          const num = $(".tabArea .tab li a").index($(this));
          // 기존에 적용되어 있는 on class 삭제
          $(".tabArea .tab li").removeClass("on");
          $(".tabArea .tabBox").removeClass("on");
          // 다음 요소 클릭시 on class 추가
          $('.tabArea .tab li:eq(' + num + ')').addClass("on");
          $('.tabArea .tabBox:eq(' + num + ')').addClass("on");
        });
      });
      
// 프로젝트 폼 << 버튼 아이디 말고 클래스로 구현
      document.querySelector('.formInputBox').style.border="none";
      $(".ctgOption:first").attr("selected", "selected");

      // 폼 다운
      $(function(){
          $('.beforeInputShow').click(function(){
              $(this).next().slideDown();
              $(this).slideUp();
              $(this).parent().css({"background-color" : "#f7f7f7"});
          });
      });
      // 폼 업
      $(function(){
          $('.btnSave').click(function(){
            // 값 받기
              let pName = $('.inputPName').val();
              let pCtg = $(".ctgSelect option:selected").val();
              // let saveBtns = document.querySelectorAll(".btnSave");
              // let saveBtns = $('.btnSave').get(); 겟 함수는 문서 객체고 this는 제이쿼리 객체라,,
              // let saveBtns = querySelectorAll('.btnSave');
              // console.log(saveBtns);
              // let thisBtn = saveBtns[0];
              // let afterInputShow = thisBtn.closest('div').parent();

              switch (event.target) {
                case saveBtns[0]:
                  if(pName.trim() != ""){
                    // alert('0번');
                    // afterInputShow.prev().text('▶ ' + pName);
                    // afterInputShow.prev().css({"color" : "var(--mainColor)"});
                  }
                case saveBtns[1]:
                  // alert('1번');
                  // afterInputShow.prev().text('▶ ' + pCtg);
                  // afterInputShow.prev().css({"color" : "var(--mainColor)"});
                  
              }

            // 슬라이드
              // afterInputShow.slideUp();
              // afterInputShow.prev().slideDown();
              // afterInputShow.parent().css({"background-color" : "#ffffff"});
              $(this).closest('div').parent().slideUp();
              $(this).closest('div').parent().prev().slideDown();
              $(this).closest('div').parent().parent().css({"background-color" : "#ffffff"});

          });
      });

      let saveBtns = document.querySelectorAll(".btnSave");
      if(event.target === saveBtns[0]){
        console.log('첫번째 버튼');
      }else if(event.target === saveBtns[1]){
        console.log('두번째 버튼');
      }else{
        console.log('얘는 뭐야');
      }
      // console.log(saveBtns[1]);

      
          
  </script>
</body>
</html>
<?php
}catch(Exception $e){
  echo $e;
}
 ?>
