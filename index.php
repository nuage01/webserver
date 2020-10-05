<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
try{
  $base = new PDO('mysql:host=localhost;dbname=utilisateurs','root','data01');
} catch (Exception $e){
  die('Erreur : ' . $e->getMessage());
}

$reponse = $base->query('SELECT * FROM  USERS');
$database_users = array();
while($ligne = $reponse->fetch()){

$database_users[$ligne['LOGIN']] = $ligne['PASSWORD'];

 }
 
$reponse->closeCursor();
?>


<form action ="<?php 
session_start();
$bdd_username = array("lyes" => "lyes01", "antoine" => "antoine02", "amjad" => "amjad03", "louis" => "louis03");

if (in_array($_POST['username'], $database_users )  {header("location: main.php"); }
else {}

  ?>"  method ="POST">
<input type ="text" name="username" value="username" >
<input type ="password" name="password" value ="password" >
<input type ="submit" value="LOGIN">


</form>


</body>
</html>



