<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>



<div class="container-fluid row-fluid">
<div class="view">
    <div class="well">
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('nom_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nom_usuario." ".$data->apel1_usuario." ".$data->apel2_usuario); ?>
	<br />
        
        
<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rut_usuario), array('view', 'id'=>$data->id_usuario)); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('nom_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nom_usuario." ".$data->apel1_usuario." ".$data->apel2_usuario); ?>
	<br />-->

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('carrera')); ?>:</b>
	<?php echo $data->carreras->nom_carrera; ?>
	<br />
        -->
<!--        <b><?php echo CHtml::encode($data->getAttributeLabel('universidad')); ?>:</b>
	<?php echo $data->carreras->universidades->nom_univ; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comuna')); ?>:</b>
	<?php echo CHtml::encode($data->comunas->nom_comuna); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('provincia')); ?>:</b>
	<?php echo CHtml::encode($data->comunas->provincias->nom_provincia); ?>
	<br />-->
        
<!--        <b><?php echo CHtml::encode($data->getAttributeLabel('region')); ?>:</b>
	<?php echo CHtml::encode($data->comunas->provincias->regiones->nom_region); ?>
	<br />
        <br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('turnos_tomados')); ?>:</b><br>
	<?php 
        $i=1;
        foreach ($data->usuarios_has_turnos as $usu){
            echo $i.'. <a href="turnos/'.$usu->turnos->id_turno.'">'.$usu->turnos->fecha_turno.'</a> '.$usu->estado."<br />"; 
            $i++;
        }
        ?>
        -->
<!--        <br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('faltas')); ?>:</b><br>
	
        
        <?php 
            $i=1;
                foreach ($data->faltas as $usu){
                    //echo $i.". ".$usu->tipo_falta." ".$usu->fecha_falta."<br />";
                    echo $i.'. <a href="faltas/'.$usu->id_falta.'">'.$usu->fecha_falta.'</a> '.$usu->tipo_falta."<br />"; 
                    $i++;
                }
        ?>
	<br />-->

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dir_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->dir_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->email_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cel_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->cel_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estudios_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->estudios_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fnac_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->fnac_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->genero_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hijos_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->hijos_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pass_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->pass_usuario); ?>
	<br />

	*/ ?>
    </div>
</div>
</div>