<?php
try {
  require 'dbInfo.php';

  // 데이터 받기
  $email    = 'mama@gmail.com';
  $password = 'aodrn';

  echo $email.'<br>'.$password.'<br>';

  // 암호화 function
  function Encrypt($str){
    // secreat key = 'funware', secreat iv = 'tlsrn815'
    $key = hash('sha256', 'funware');
    $iv = substr(hash('sha256', 'tlsrn815'), 0, 16);
    return str_replace("=", "", base64_encode(
                 openssl_encrypt($str, "AES-256-CBC", $key, 0, $iv))
    );
  }
  // 복호화 function
  function Decrypt($str){
    // secreat key = 'funware', secreat iv = 'tlsrn815'
    $key = hash('sha256', 'funware');
    $iv = substr(hash('sha256', 'tlsrn815'), 0, 16);
    return openssl_decrypt(
            base64_decode($str), "AES-256-CBC", $key, 0, $iv
    );
  }
  $de_password = Decrypt('STU3Y2FNMUFFUEJVbDl2TUNoTlI4dz09');
  echo $de_password.'<br>';
  // 이메일 값 검사
  // $q1= $db->query('SELECT f_user_pw FROM tbl_user WHERE f_email = "'.$email.'";');
  // 있다!
  if(true){
  // if($row = $q1->fetch(PDO::FETCH_ASSOC)){
    // pw, token 가져오기
    $q2= $db->query('SELECT f_user_pw, f_token FROM tbl_user WHERE f_email = "'.$email.'";');
    $row_user = $q2->fetch(PDO::FETCH_ASSOC);
    echo $row_user['f_user_pw'].$row_user['f_token'];
    if($row_user['f_user_pw'].$row_user['f_token'] == Encrypt($password).$row_user['f_token']){
      echo "완벽해 완벽해";
    }
//
//
//
//
//
    // PW, token 복호화 확인
    $de_password = Decrypt($password);
    echo $de_password.'<br>';
    // 로그인 성공
    $result['msg'] = true;
  // 없다!
  }else{
    $result['msg'] = false;
  }

}catch(Exception $e) {
  echo $e.'<br>';
  $result['msg'] = '죄송합니다. 서버 오류입니다.';
}finally{
  // 있어보이게 json화
  // echo json_encode($result, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
}
?>
