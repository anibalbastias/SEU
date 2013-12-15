<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Administrar',
);

//$this->menu=array(
//	array('label'=>'Listar Usuarios', 'url'=>array('index')),
//	array('label'=>'Crear Usuarios', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('usuarios-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Administrar Usuarios</h3>

<?php $empaque = Usuarios::model()->findAll();

    
    foreach ($empaque as $emp){
        
    
    ?> 
    
<div class="">
<div class="span-12 well style_user centrar">
           
	<b><?php echo CHtml::encode($emp->nom_usuario." ".$emp->apel1_usuario." ".$emp->apel2_usuario); ?></b>
	<br />
        
        <a href="<?php echo Yii:: app() ->baseUrl.'/usuarios/'.$emp->id_usuario?>"><img src="<?php echo Yii:: app() ->baseUrl.'/img/search-file-icon.png'?>" ></a>
        <a href="<?php echo Yii:: app() ->baseUrl.'/usuarios/update/'.$emp->id_usuario?>"><img src="<?php echo Yii:: app() ->baseUrl.'/img/Gear-icon.png'?>" ></a>
        <a href="#"><img src="<?php echo Yii:: app() ->baseUrl.'/img/Close-2-icon.png'?>" ></a>
        
</div>      
</div>

    <?php
    }

?>






<br>


