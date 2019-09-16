<?php
  //preg_match(패턴, 검사할텍스트, 반환할 패텅 일치 결과를 받을 변수)
  //패턴대입(문자열의 값이 i인지 확인하는 패턴)
  $pattern = '/^i$/';//i로 시작하고 i로 끝나는 패턴식

  $str = 'i';//패턴을 검사할 문자열 i를 대입

  if (preg_match($pattern, $str , $matches)) {//preg_match()함수를 사용하여 정규식 패턴을 검사, if문을 사용하였으므로 정규식 패턴이 맞다면 실행
    echo "값 {$str}은(는) 정규식 표현에 적합한 값입니다. ";
    echo "<pre>";
    var_dump($matches);//var_dump()함수를 사용하여 정규식과 일치하는 부분을 출력
    echo "</pre>";
  }else{
    echo "이름에 특수문자, 한글 또는 숫자가 있는지 확인 요망";//정규식 패턴이 맞지 않을 경우 출력
  }
 ?>
