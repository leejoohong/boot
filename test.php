<?php
    $id = $_GET["userid"];
    $pw = $_GET["userpw"];
    $value = $_GET["optradio01"];
// 네임에 적혀있는 값을 받아옴
// GET은 평문으로 POST는 암호문으로 보내짐 고로 GET은 스피드가 빠름, POST는 약간느림
// 오류가 뜨면 on line(숫자가 뜨는데) php파일 몇째 줄을 보라는 뜻이다.
    echo("당신의 ID는 {$id}이고 PW는 {$pw} 입니다.");
    // php에서 echo는 단순히 화면에 출력해주는거라서 위에것들이 오류가 떠도 echo 되어있는게 그냥 나간다.
    echo("라디오 버튼의 값은 {$value}입니다.");
  
?>