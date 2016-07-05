<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('Smart_1.0/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('Smart_1.0/css/administrador/form_agregar_usuario.css');?>">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
   <script type="text/javascript" src="js/insertar_usuarios.js"></script>
   
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            <span><img src="img/0116-user-plus.png" class="icono_principal2">Formulario de registro de Usuarios</span>
            <form class="form-horizontal" role="form" action="insertar_usuario" method="post">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="usuario" id="usuari" placeholder="Nombre de usuario" type="text"
                        required autofocus />
                </div>
                
            </div>
            <input class="form-control" name="correo" id="corre" placeholder="Correo electronico" type="email" />
            <input class="form-control" name="contra" id="contr" placeholder="contraseña" type="password" />
            <label for="">
                Birth Date</label>
            <div class="row">
               
                <div class="col-xs-4 col-md-4">
                    <select class="form-control" name="rol" id="rol">
                        <option value="1">Rol 1</option>
                        <option value="2">Rol 2</option>
                    </select>
                </div>
            </div>
           
            <br />
            <br />
            <button class="btn btn-lg btn-primary btn-block" >
                Registrar</button>
            </form>






              <div class="panel-footer">

                    <a href="<?php echo site_url('administrador/index');?>" class="return">regresar</a>
                    
                    </div>
        </div>
    </div>
</div>
</body>
</html>