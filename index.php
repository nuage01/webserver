<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form action ="<?php 
session_start();
$bdd_username = array("lyes" => "lyes01", "antoine" => "antoine02", "amjad" => "amjad03", "louis" => "louis03");

try{
  $base = new PDO('mysql:host=localhost;dbname=utilisateurs','root','data01');
} catch (Exception $e){
  die('Erreur : ' . $e->getMessage());
}

$reponse = $base->query('select login as l, password as p from  USERS where  Pays is not NULL');
while($ligne = $reponse->fetch()){
  echo ($ligne);

 }

if (in_array($_POST['username'], $bdd_username ) && $bdd_username[$_POST['username']] == $_POST['password']) {header("location: main.php"); }
else {}
  ?>"  method ="POST">
<input type ="text" name="username" value="username" >
<input type ="password" name="password" value ="password" >
<input type ="submit" value="LOGIN">


</form>


</body>
</html>



