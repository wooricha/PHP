<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$num = 10;
		//++가 변수 뒤에 위치하므로 10을 반환 후 11이 됨
		echo "num++의 값 : ".$num++;
		
		//줄바꿈
		echo "<br>";
		
		//값이 11이 되었는지 확인
		echo "num++가 작동 후의 값 : ".$num;
	?>
</body>
</html>