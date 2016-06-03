<?php  
session_start();  
  
if(!$_SESSION['correo'])  
{  
    header("Location: login.php"); 
}  
  
?> 

<!DOCTYPE html>
<html>
<head>
	<title>PRINCIPAL1</title>
</head>
<body>
<h1>Se pudo entrar con el login a principal |1</h1>
</body>
</html>