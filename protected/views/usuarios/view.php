<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */


if(Yii::app()->session['var'] != NULL)
{
    $usuario=Usuarios::model()->findByPk(Yii::app()->session['var']);
    
    if( $usuario->rut_usuario != 'admin') 
       {
    
        header("Location: ".Yii:: app() ->baseUrl.'/site/index');
        
       }
    
    if( $usuario->rut_usuario == 'admin') 
       {
    



$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id_usuario,
);

//$this->menu=array(
//	array('label'=>'Listar Usuarios', 'url'=>array('index')),
//	array('label'=>'Crear Usuarios', 'url'=>array('create')),
//	array('label'=>'Modificar Usuarios', 'url'=>array('update', 'id'=>$model->id_usuario)),
//	array('label'=>'Eliminar Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_usuario),'confirm'=>'¿Estas seguro de eliminar este usuario?')),
//	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
//);
//?>


<div class="style_user">
    
    <div class="container-fluid">
        <div class="row-fluid">
            
            
            <div class="span6 well">    
    
                <h3> Foto </h3>
                <?php
                
                if($model->img_usuario == "1")
                {
                    echo CHtml::image(Yii::app()->request->baseUrl.'/img/users/'.$model->id_usuario.".jpg","id_usuario",array("width"=>176));
                }
                else
                {
                    echo CHtml::image(Yii::app()->request->baseUrl.'/img/users/gen.png',"id_usuario",array("width"=>176));
                }
                
                ?>
                
                
            </div>
            
            <div class="span6 well">
    
                 <h3>perfil    
   <?php 
                        $empaque=Usuarios::model()->findByPk($_GET['id']);
                       $nombre=$empaque->nom_usuario;
                       $apellido=$empaque->apel1_usuario;
    
    echo $nombre." ".$apellido;  
        
     
    ?>
    </h3>
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('nom_usuario')); ?>:</b>
	<?php echo CHtml::encode($empaque->nom_usuario." ".$empaque->apel1_usuario." ".$empaque->apel2_usuario); ?>
	<br />

        <b><?php echo CHtml::encode($empaque->getAttributeLabel('rut')); ?>:</b>
        <?php echo $empaque->rut_usuario; ?>
	
	<br />
        
	<b><?php echo CHtml::encode($empaque->getAttributeLabel('carrera')); ?>:</b>
	<?php echo $empaque->carreras->nom_carrera; ?>
	<br />
        
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('universidad')); ?>:</b>
	<?php echo $empaque->carreras->universidades->nom_univ; ?>
	<br />

        <b><?php echo CHtml::encode($empaque->getAttributeLabel('comuna')); ?>:</b>
	<?php echo $empaque->comunas->nom_comuna; ?>
	<br />
	
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('provincia')); ?>:</b>
	<?php echo CHtml::encode($empaque->comunas->provincias->nom_provincia); ?>
	<br />
        
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('region')); ?>:</b>
	<?php echo CHtml::encode($empaque->comunas->provincias->regiones->nom_region); ?>
	<br />
        
        <b><?php // echo CHtml::encode($empaque->getAttributeLabel('pass')); ?>:</b>
	<?php // echo CHtml::encode($empaque->pass_usuario); ?>
	<br />

        <br><br><br>   
                
                
            </div>
            
        </div>
        
      
        
    </div>
    </div>

<?php 


}}




if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }




?>
