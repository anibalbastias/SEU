<?php
/* @var $this FaltasController */
/* @var $model Faltas */

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
	'Faltas'=>array('index'),
	$model->id_falta=>array('view','id'=>$model->id_falta),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Faltas', 'url'=>array('index')),
	array('label'=>'Crear Faltas', 'url'=>array('create')),
	array('label'=>'Ver Faltas', 'url'=>array('view', 'id'=>$model->id_falta)),
	array('label'=>'Administrar Faltas', 'url'=>array('admin')),
);
?>

<h1>Update Faltas <?php echo $model->id_falta; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); 



}}

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }




?>