<?php
/* @var $this FaltasController */
/* @var $data Faltas */
?>

<div class="view">
    <div class="well">

	<b><?php echo CHtml::encode($data->getAttributeLabel('falta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->desc_falta), array('view', 'id'=>$data->id_falta)); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo $data->usuarios->nom_usuario." ".$data->usuarios->apel1_usuario." ".$data->usuarios->apel2_usuario; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_falta')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_falta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_falta')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_falta); ?>
	<br />
        
        <div type="button" class="btn btn-danger btn-mini"><a  href="<?php echo Yii:: app() ->baseUrl.'/faltas/delete/'.$data->id_falta ?>"> Eliminar</a></div>
     
        
    </div>

</div>