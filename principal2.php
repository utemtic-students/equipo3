<?php  
session_start();  
  
if(!$_SESSION['correo'])  
{  
    header("Location: login.php"); 
}  
  
?> 

<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
	<title>PRINCIPAL1</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/principal2.css">
 

</head>
<body>


<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>
            <a href="form_agregar_usuario.php" class="btn btn-sq-lg btn-success">
                <i class="fa fa-user fa-5x"></i><br/>
               <br> añadir nuevo usuario 
            </a>
            <a href="#" class="btn btn-sq-lg btn-warning">
              <i class="fa fa-user fa-5x"></i><br/>
             <br> Modificar usuario 
            </a>
            <a href="#" class="btn btn-sq-lg btn-danger">
              <i class="fa fa-user fa-5x"></i><br/>
              <br> Eliminar usuario 
            </a>          
            
          </p>
        </div>
	</div>
  
</div>


</body>
</html>