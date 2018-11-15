<?php
$username1 = "johndoe";
if (isset($_POST['btn'])) {
        $username2 = $_POST['username'];
		$password1 = ($_POST['password1']);
		$password2 = ($_POST['password2']);
		if($username1==$username2){
			echo 'Username already has reserved';
		}
		if($password1 != $password2){
			echo 'Passwords needs to be same';
		}
		if(empty($password1) or empty($password1)){
			echo "Passwords should not be empty";
		}
    }
?>
<html>
<head><style>
form{
display:flex;
flex-direction:column;
}
input{
margin:10px;
}
input{
width:30%;
}
</style></head>
<body>
<form action="task101.php" method="post">
	<input type="text" name="username">
	<input type="password" name="password1">
	<input type="password" name="password2">
	<input type="submit" name="btn"/>
</form>
</body>
</html>