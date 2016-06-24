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

 <link rel="stylesheet" href="<?php echo base_url('Smart_1.0/css/bootstrap.min.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('Smart_1.0/css/bootstrap.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('Smart_1.0/css/login.css');?>">
 
 
    
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="letras_login"><img class="icono_login" src="<?php echo base_url('Smart_1.0/img/0115-users.png');?>">Login</span></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="login_acceder" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            Correo</label>
                        <div class="col-sm-9">
                            <input type="email" name="correo" class="form-control" id="correo" placeholder="Ejemplo@utem.edu.mx" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Contraeña</label>
                        <div class="col-sm-9">
                            <input type="password" name="contra" class="form-control" id="contra" placeholder="Contraseña" required>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success btn-sm">
                                Iniciar sesión</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Borrar</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="panel-footer">
                 
                    <a href="<?php echo site_url('smart/index');?>"type="reset" class="btn btn-default btn-sm">Inicio<a/>
                    </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>