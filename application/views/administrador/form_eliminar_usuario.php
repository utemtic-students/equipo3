<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="css/form_agregar_usuario.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
   <script type="text/javascript" src="js/insertar_usuarios.js"></script>
   
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            <span><img src="img/0116-user-plus.png" class="icono_principal2">Eliminar usuario</span>
            <form action="#" method="post" class="form" role="form">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="usuario" id="usuari" placeholder="Nombre de usuario" type="text"
                        required autofocus />
                </div>
                
            </div>        
           
            <br />
            <br />
            <button class="btn btn-lg btn-primary btn-block"  id="bte">
                Eliminar</button>
            </form>


              <div class="panel-footer">
                   
                    <a href="principal2.php" class="return">regresar</a>
                    
                    </div>
        </div>
    </div>
</div>
</body>
</html>