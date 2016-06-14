
<?php
echo form_open('/codigofacilito/recivirdatos');
?>



<?php
$nombre = array(
	'name'=> 'nombre',
	'placeholder'=>'Escribe tu nombre'

	);

$videos = array(
	'name'=>'videos',
	'placeholder'=>'Cantidad de videos de el curso'

	);

?>


<?php echo form_label('Nombre:','nombre'); ?>
<?php echo form_input($nombre); ?>
<br>
<br>

<?php echo form_label('Numero videos:', 'videos'); ?>
<?php echo form_input($videos); ?>
<br>
<?php echo form_submit('','subir curso');?>
<?php echo form_close();?>
</body>
</html>