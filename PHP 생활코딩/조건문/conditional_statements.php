<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
	//conditional statements(조건문)
	//if (표현식) {실행될 코드}
		if(true){
			echo '2<br>';
		}

		if(true){
			echo '2-1<br>';
		} else{
			echo '2-2<br>';
		}
		//check value exists(값이 있는지 체크)
		//isset(값의 유무에 따라 boolean을 도출하는 함수)
		//unset(값을 지워주는 함수)
		$a = "test";
    $b = "anothertest";

		var_dump(isset($a)); //true
		var_dump(isset($a, $b)); //true

		unset($a);

		var_dump(isset($a)); //false
		var_dump(isset($a, $b)); //false
	?>
</body>
</html>
