<?

session_start();
include 'connection.php';
if ($_SESSION["Username"] == ""){
	  $header_menu = "		<a href='form_login.php'>เข้าสู่ระบบ</a>
		<a href='Register.html'>ลงทะเบียนฟรี</a>";

}else{
	$username = $_SESSION["Username"];
	$header_menu ="		<a href'>สวัสดีคุณ $username</a>
		<a href='logout.php'>ออกจากระบบ</a>";

}


?>

<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<style type="text/css">
body{
	background-color: #424A55;
	color : white;
}
.header{
	background-color: white;
	color : white;
	padding: 20px;
	margin:0px auto;
    top:0;
    left:0;
    right:0;
    font-family: 'Prompt', sans-serif;

}
.header_logo{
	font-size: 2em;
	display: inline;
	color: #4483DF;
}
.header_menu{
	display: inline;
	right: 10px;
	float: right;
    text-align: right;
    width: auto;
    padding-top: 15px;
}
.header_menu a{
	color: #646D79;
	text-decoration: none;
	padding: 0px 15px;
	transition: 0.25s;
}
.header_menu a:hover{
	color: #4483DF;
	border-bottom: 2px solid #4483DF;
}
.header_menu p{
	display: inline;
	color: #646D79;
	text-decoration: none;
	padding: 0px 15px;
	transition: 0.25s;
}

</style>
<div class='header'>
	<div class='header_logo'><a href="index.php">logo</a></div>
	<div class='header_menu'>
		<? echo$header_menu;?>
	</div>
</div>
