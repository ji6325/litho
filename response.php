<?php
$servername = 'localhost';
$username   = 'moonjong2';
$password   = 'anstjswhd0105';
$dbname     = 'moonjong2';

$conn = mysqli_connect($servername,$username,$password,$dbname);
mysqli_set_charset($conn, 'utf8');

  if( !$conn ){
    die('DATABASE 접속 실패');
  }


  //폼 정보를 $변수를 설정 그리고 $변수에 기억
  $email = $_POST['email'];
  $code  = $_POST['code'];

  //DB내에 TABLE(email_table) 에 입력하는 SQL 코딩
  $sql = "insert into email_table (email) values ('$email')";
  $result = mysqli_query($conn, $sql);


  //서버(Server)가  클라이언트(Client)에 응답
  echo '<p>축하합니다. 메일 리스트에 저장되었습 니다.</p>'.$email.'<br>'.$code;


  mysqli_close($conn); 

?>