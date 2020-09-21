<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form action ="<?php 
session_start();
$bdd_username = array("lyes", "antoine", "amjad", "louis");
$bdd_password = array("azerty", "123456");
if (in_array($_POST['username'], $bdd_username )) {header("location: main.php"); }
else {header("location: index.php");
     echo 'WRONG IDS';}
  ?>"  method ="POST">
<input type ="text" name="username" value="username" >
<input type ="text" name="password" value ="password" >
<input type ="submit" value="LOGIN">


</form>


</body>
</html>



