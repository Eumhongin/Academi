<?php
	if(!$_SERVER['HTTP_REFERER'])	//url 직접접근 막기
	{
		echo "<script>alert('잘못된 접근 입니다.');</script>";
		echo "<script>location.href = '/academi/Academi/index.php';</script>";
	}
?>
