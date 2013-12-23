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

<div type="button" class="btn btn-info btn-mini"><a target="_blank" href="<?php echo Yii:: app() ->baseUrl.'/usuarios/pdf'?> "> Generar PDF</a></div>
        

<div class="" style="padding-top: 50px;">
<?php 

    $criteria = new CDbCriteria();
//    $criteria->limit = 1;
    $criteria->order = "nom_usuario ASC";
    $empaque = Usuarios::model()->findAll($criteria);

    

    foreach ($empaque as $emp){
        
    
    ?> 
    
<div class="row-fluid">
<div class="span-12 well style_user ">
           
     
	<b><?php echo CHtml::encode($emp->nom_usuario." ".$emp->apel1_usuario." ".$emp->apel2_usuario); ?></b>
	<!--<br />-->
        <div class="pull-right">
        <div type="button" class="btn btn-info btn-mini"><a href="<?php echo Yii:: app() ->baseUrl.'/usuarios/'.$emp->id_usuario ?>"> Perfil</a></div>
        <div type="button" class="btn btn-warning btn-mini"><a href="<?php echo Yii:: app() ->baseUrl.'/usuarios/update/'.$emp->id_usuario ?>"> Modificar</a></div>
        <div type="button" class="btn btn-success btn-mini"><a href="<?php echo Yii:: app() ->baseUrl.'/usuarios/faltas?id='.$emp->id_usuario ?> "> Faltas</a></div>
        <div type="button" class="btn btn-danger btn-mini"><a  href="<?php echo Yii:: app() ->baseUrl.'/usuarios/delete/'.$emp->id_usuario ?>"> Eliminar</a></div>
        
       
        
        </div>
        


</div>      
</div>

    <?php
    
    
    
    }

?>

    
      <!-- ######################################## generacion de pdf ############################-->   
 
    
</div>




<br>


