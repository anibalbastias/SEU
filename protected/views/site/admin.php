<?php

    if(Yii::app()->session['var'] != NULL)
            {

?>  


<div class="panel">
<h2>Panel de administracion</h2>

<div class="container">
    <div class="row-fluid">
<div class="span4 centrar">

    <h2> Usuarios </h2>
    
    <div class="nav">
    <li><a href="<?php echo Yii:: app() ->baseUrl.'/usuarios/index' ?>"><i class="icon-list-alt"></i> Listar usuarios</a></li>
    <li><a href="<?php echo Yii:: app() ->baseUrl.'/usuarios/create' ?>"><i class="icon-plus-sign"></i>Crear usuarios</a></li>
    
    </div>
</div>


<div class="span4 centrar">
    
    <h2>Planilla</h2>
    <div class="nav">
    <li><a href="<?php echo Yii:: app() ->baseUrl.'/site/admin' ?>"><i class="icon-list-alt"></i> Listar turnos</a></li>
    <li><a href="<?php echo Yii:: app() ->baseUrl.'/turnos/create' ?>"><i class="icon-plus-sign"></i> Crear turnos</a></li>
    <!--<li><a href="<?php echo Yii:: app() ->baseUrl.'/site/admin' ?>">Eliminar turnos</a></li>-->
    <li><a href="<?php echo Yii:: app() ->baseUrl.'/site/planilla' ?>">Generar planilla</a></li>
    </div>
</div>  
        
<div class="span4 centrar">
    
    <h2>Faltas</h2>
    <div class="nav ">
    <li><a href="<?php echo Yii:: app() ->baseUrl.'/site/admin' ?>"><i class="icon-list-alt"></i> Listar turnos</a></li>
    <li><a href="<?php echo Yii:: app() ->baseUrl.'/turnos/create' ?>"><i class="icon-plus-sign"></i>Crear turnos</a></li>
    <!--<li><a href="<?php echo Yii:: app() ->baseUrl.'/site/admin' ?>">Eliminar turnos</a></li>-->
    <li><a href="<?php echo Yii:: app() ->baseUrl.'/site/planilla' ?>">Generar planilla</a></li>
    </div>
</div>         
        
    </div>
</div>

</div>

<?php

            }
      
      if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }
            
  ?>