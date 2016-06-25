<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="<?php echo base_url('Smart_1.0/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('Smart_1.0/css/administrador.css');?>">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/principal2.css" rel="stylesheet">
    <script type="text/jscript" src="js/jquery-2.1.3.min.js"></script>
    <script type="text/jscript" src="js/principal2_tablas.js"></script>
</head>
<body>
<!--codigo de botones de opciones-->
<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>
         
            <a href="form_agregar_usuario.php" class="btn btn-sq-lg btn-success">
              <i class="fa fa-user fa-5x"></i><br/>
              Agregar Usuario 
            </a>
           
            <a href="#" class="btn btn-sq-lg btn-warning">
              <i class="fa fa-user fa-5x"></i><br/>
              Modificar Usuario 
            </a>
            <a href="#" class="btn btn-sq-lg btn-danger">
              <i class="fa fa-user fa-5x"></i><br/>
             Eliminar Usuario
            </a>
          </p>
        </div>
	</div>
<!--lista de ´roductos opcionales-->
<div class="container">
	<div class="row">
        <div class="col-md-3">
            <form action="#" method="get">
                <div class="input-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <input class="form-control" id="system-search" name="q" placeholder="Search for" required>
                   <!-- <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </span>-->
                  
                </div>
            </form>
        </div>
		<div class="col-md-4">
    	 <table class="table table-list-search">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Contraseña</th>
                            <th>rol</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Carlos</td>
                            <td>A20130191@utem.edu.mx</td>
                            <td>20130191</td>
                            <td>2</td>
                           

                        </tr>
                        <tr>
                            <td>manuel</td>
                            <td>A20130044@utem.edu.mx</td>
                            <td>20130044</td>
                            <td>1</td>
                           
                            
                        </tr>
                        <tr>
                            <td>Cesar</td>
                            <td>A20130194@utem.edu.mx</td>
                            <td>20130194</td>
                            <td>1</td>
                        </tr>
                            <tr>
                            <td>Neyvia</td>
                            <td>A20130003@utem.edu.mx</td>
                            <td>20130003</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>   
		</div>
	</div>
</div>
 
  <a href="login.php" class="btn btn-success">Regresar</a>
	
</div>
</body>
</html>