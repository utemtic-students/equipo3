<?php  
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smart House -Login </title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="letras_login"><img class="icono_login" src="img/0115-users.png">Login</span></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="login_v.php" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            Corrreo</label>
                        <div class="col-sm-9">
                            <input type="email" name="correo" class="form-control" id="correo" placeholder="ejemplo@utem.edu.mx" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Contraseña</label>
                        <div class="col-sm-9">
                            <input type="password" name="contra" class="form-control" id="contra" placeholder="********************" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"/>
                                    Recordar
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success btn-sm">
                                Iniciar Sesión</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Borrar</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="panel-footer">
                   
                    <a href="index.html" class="return">Inicio</a>
                    
                    </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>