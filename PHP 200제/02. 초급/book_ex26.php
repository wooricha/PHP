<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$gender = "boy";
		$likePlace = "disneyland";
		
		//변수 gender의 값과 변수 likePlace의 값이 모두 참인지 확인
		if($gender == "boy" && $likePlace == "disneyland"){
			echo "소년은 디즈니랜드를 좋아합니다.";
		}
		
		echo '<br>';
		
		$gender = "girl";
		$likePlace = "Universal Studios";
		
		//변수 gender의 값과 변수 likePlace의 값이 모두 참인지 확인
		if($gender == "girl" && $likePlace == "disneyland"){
			echo "소녀는 디즈니랜드를 좋아합니다.";
		}
	?>
</body>
</html>