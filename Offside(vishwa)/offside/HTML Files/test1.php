<?php
	$password1="asd";
	$hash_password=password_hash($password1,PASSWORD_DEFAULT);
?>
<?php
	
	$password2="asd";
	echo "$hash_password";
	echo "<br>";
	$p=password_verify($password2,$hash_password);
	echo $p;
	if($p)
		echo "ok";
	else
		echo"p";

?>