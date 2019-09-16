<?php
//preg_match(패턴, 검사할텍스트, 반환할 패텅 일치 결과를 받을 변수)
$pattern = '/^i+$/';//1byte 이상의 값을 검사하기 위해 검사할 문자 뒤에 기호 '+'를 사용합니다

$str = 'ii';//변수 str에 2byte 값인 'ii'를 대입

if (preg_match($pattern, $str , $matches)) {//preg_match()함수를 사용하여 정규식 패턴을 검사, if문을 사용하였으므로 정규식 패턴이 맞다면 실행
  echo "값 {$str}은(는) 정규식 표현에 적합한 값입니다. ";
  echo "<pre>";
  var_dump($matches);//var_dump()함수를 사용하여 정규식과 일치하는 부분을 출력
  echo "</pre>";
}else{
  echo "이름에 특수문자, 한글 또는 숫자가 있는지 확인 요망";//정규식 패턴이 맞지 않을 경우 출력
}
 ?>
