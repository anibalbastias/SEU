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
    




$empaque=Usuarios::model()->findByPk(Yii::app()->session['var']);
$controlador = $this->getId();
    $pagina = $this->getAction()->getId();
    $id_url = $_GET['id'];
// echo $id_url;
// echo " ";
// echo $empaque->id_usuario;

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id_usuario=>array('view','id'=>$model->id_usuario),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	array('label'=>'Ver Usuarios', 'url'=>array('view', 'id'=>$model->id_usuario)),
	array('label'=>'Adminstrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Modificar Usuarios <?php echo $model->id_usuario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model));

}}

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }





?>