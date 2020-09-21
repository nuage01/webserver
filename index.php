<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form action ="<?php 
session_start();
$bdd_username = array("lyes" => "lyes01", "antoine" => "antoine02", "amjad" => "amjad03", "louis" => "louis03");
echo($_POST['password']);
echo($bdd_username[$_POST['username']);

if (in_array($_POST['username'], $bdd_username ) && $bdd_username[$_POST['username']] == $_POST['password']) {header("location: main.php"); }
else {}
  ?>"  method ="POST">
<input type ="text" name="username" value="username" >
<input type ="text" name="password" value ="password" >
<input type ="submit" value="LOGIN">


</form>


</body>
</html>



