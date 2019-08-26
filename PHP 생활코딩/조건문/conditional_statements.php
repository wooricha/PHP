<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		if(true){
			echo '2<br>';
		}

		if(true){
			echo '2-1<br>';
		} else{
			echo '2-2<br>';
		}
		$a = "test";
    $b = "anothertest";

		var_dump(isset($a)); //true
		var_dump(isset($a, $b)); //true

		unset($a);

		var_dump(isset($a)); //false
		var_dump(isset($a, $b)); //false
		//isset(값의 유무에 따라 boolean을 도출하는 함수)
		//unset(값을 지워주는 함수)
	?>
</body>
</html>
