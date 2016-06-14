<?php

//pagina -- consultas para moestrar el resultado de las inseciones.
foreach ($cursos->result() as $curso) {?>



<ul>
	<li> <?php  echo $cursos->nombreCurso; ?></li>
</ul>


 } ?>


</body>
</html>