<!DOCTYPE html>
<html>
<title>Mr.pro</title>
<head><h1>Xss Challenge</h1></head>
<form method="post|get" action="<?php $_SERVER['REQUEST_SELF'];?>">
Name:
<input type="text" name="name" >
<button type="submit" >check</button>
<?php
if (empty($_REQUEST['name'])){
	echo "Enter name";
}else{
	echo "Hello " . $_REQUEST['name'];
}
?>
<html>
