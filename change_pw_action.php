<!--
::: CONTENTS :::
Project		: php_website
Version		: 1.0
Filename	: join_action.php
Date		: 2020/01/05
Purpose		: Ready for studying secure coding of WEB(PHP)
Programmer	: Yoobi (ubyung1@gmail.com)
Reviewer	:
-->

<?php
	//Connect MYSQL
	$connect = mysqli_connect('localhost', 'yoobi', 'toor', 'php_db') or die("fail");

	$id=$_GET["id"];
	$pw=$_GET["pw"];

	//Save user entered value in DB	
	//"update board set title='$title', content='$content', date='$date', name_orig='$file_name', name_save='$name_save'";
	$query = "update member set pw='$pw' where id=$id";
	$result = $connect->query($query);

	if($result)
	{
?>
		<script>
			alert('Passwd Successfully Changed!');
			location.replace("./login.php");
		</script>

<?php
	}
	else
	{
?>
		<script>
			alert("fail");
		</script>
<?php
	}

	mysqli_close($connect);
?>


