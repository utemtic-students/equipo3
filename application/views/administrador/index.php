<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="<?php echo base_url('Smart_1.0/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('Smart_1.0/css/administrador/administrador.css');?>">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('Smart_1.0/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <script type="text/jscript" src="<?php echo base_url('Smart_1.0/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('Smart_1.0/js/administrador/script_administrador.js');?>"></script>
</head>
<body>
<!--codigo de botones de opciones-->
<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>
         
            <a href="form_agregar_usuario" class="btn btn-sq-lg btn-success">
              <i class="fa fa-user fa-5x"></i><br/>
              Agregar Usuario 
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



            <tr>
            <td>Rol</td>
            <td>Contraseña</td>
            <td>Correo</td>
            <td>N_usuario</td>

            </tr>

            <?php   
                foreach ($enlaces->result() as $row) {
                    echo "<tr>";
                        echo "<td>".$row->Rol."</td>";
                        echo "<td>".$row->Contrasena."</td>";
                        echo "<td>".$row->Correo."</td>";
                        echo "<td>".$row->N_usuario."</td>";
                    echo "</tr>";
                }

            ?>
                   <!--  <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Contraseña</th>
                            <th>rol</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Carlos</td>
                            <td>A20130191@utem.edu.mx</td>
                            <td>20130191</td>
                            <td>2</td>
                            <td id="modificar_usuario" class="glyphicon glyphicon-asterisk"></td>

                        </tr>
                        
                    </tbody> -->
                </table>   



                


		</div>
	</div>
</div>
 
  <a href="<?php echo site_url('smart/login');?>" class="btn btn-success">Regresar</a>
	
</div>

</body>
</html>