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


<div class="">
        <div class="row-fluid" style="background-color: #00b2d9; color:white;">
            <div class="span12">
                <h3 style="margin-left: 20px;">Administrar empaques </h3>
            </div>    
        </div>
        </div>

<br>
<div type="button" class="btn btn-info btn-mini"><a target="_blank" href="<?php echo Yii:: app() ->baseUrl.'/usuarios/pdf'?> "> Generar PDF</a></div>
        

<div class="" style="padding-top: 50px;">
<?php 
    
    $criteria = new CDbCriteria();
//    $criteria->limit = 1;
    $criteria->order = "nom_usuario ASC";
    $empaque = Usuarios::model()->findAll($criteria);

    $i = 0;

    foreach ($empaque as $emp){
        
    
    ?> 
    
<div class="row-fluid">
<div class="span-12 
    <?php if($emp->estado_usuario == 1){ 
                        echo 'alert alert-danger';
    
                        }
         else{
             if($emp->estado_usuario != 1){
                 
                    echo 'mis_turnos';
             }
         }
?> style_user ">
           
    
    
        <?php
        
//                $i = $i+1;
        
                if($emp->img_usuario == "1")
                {
                    echo CHtml::image(Yii::app()->request->baseUrl.'/img/users/'.$emp->id_usuario.".jpg","id_usuario",array("width"=>50));
                }
                else
                {
                    echo CHtml::image(Yii::app()->request->baseUrl.'/img/users/gen.png',"id_usuario",array("width"=>50));
                }
                
                ?>
    
	<b><?php echo CHtml::encode($emp->nom_usuario." ".$emp->apel1_usuario." ".$emp->apel2_usuario); ?></b>
	<!--<br />-->
        <div class="pull-right">
            
         <?php 
            if($emp->estado_usuario != 1){
                
                echo "<div type=\"button\" class=\"btn btn-mini btn-danger\" onclick=\"location.href='".Yii::app()->baseUrl."/usuarios/bloquear/".$emp->id_usuario."';\">Bloquear</div>";
            
            }
            else{
                if($emp->estado_usuario == 1){
                  
                        echo "<div type=\"button\" class=\"btn btn-mini btn-success\" onclick=\"location.href='".Yii::app()->baseUrl."/usuarios/desbloquear/".$emp->id_usuario."';\">Desbloquear</div>";
                 
                }
            }
          ?>       
        <div type="button" class="btn btn-info btn-mini"><a href="<?php echo Yii:: app() ->baseUrl.'/usuarios/'.$emp->id_usuario ?>"> Perfil</a></div>
        <div type="button" class="btn btn-warning btn-mini"><a href="<?php echo Yii:: app() ->baseUrl.'/usuarios/update/'.$emp->id_usuario ?>"> Modificar</a></div>
        <div type="button" class="btn btn-success btn-mini"><a href="<?php echo Yii:: app() ->baseUrl.'/usuarios/faltas?id='.$emp->id_usuario ?> "> Faltas</a></div>
<!--        <div type="button" class="btn btn-danger btn-mini"><a  href="<?php //echo Yii:: app() ->baseUrl.'/usuarios/delete/'.$emp->id_usuario ?>"> Eliminar</a></div>-->
        <?php 
            echo CHtml::button(
                'Eliminar',
                array('onClick'=>'location.replace("'.Yii:: app() ->baseUrl.'/usuarios/delete/'.$emp->id_usuario.'")', 
                    'class'=>'btn btn-danger btn-mini','confirm' => '¿Está seguro de eliminar el usuario?')
                );
            ?>
        </div>
        


</div>      
</div>

    <?php
    
    
    
    }

?>

    
      <!-- ######################################## generacion de pdf ############################-->   
 
    
</div>




<br>


