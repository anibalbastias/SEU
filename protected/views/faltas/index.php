
<?php
/* @var $this FaltasController */
/* @var $dataProvider CActiveDataProvider */


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
	'Faltas',
);

$this->menu=array(
	array('label'=>'Crear Faltas', 'url'=>array('create')),
	array('label'=>'Administrar Faltas', 'url'=>array('admin')),
);
?>

<div class='row-fluid' style='background-color: #00b2d9; color:white;'>
            <div class='span12'>
                <h3 style='margin-left: 20px;'>Faltas </h3>
                    
    </div>    
        </div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));

}}

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }




?>
