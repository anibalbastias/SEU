
<?php

    if(Yii::app()->session['var'] != NULL)
            {

        date_default_timezone_set("Chile/Continental");
        
         //            seteo de la hora para peticion jueves(4) 23:00 - 23:59
            $dia_peticion = '4';
            $hora_peticion = '23';
            $min_i_peticion = '00';
            $min_f_peticion = '59';
            
            
//            seteo de la hora para repechaje Viernes(5) 23:00 - 23:59
            $dia_repechaje = '5';
            $hora_repechaje = '23';
            $min_i_repechaje = '00';
            $min_f_repechaje = '59';
            
             //$fecha_dia = date("w");
                $fecha_dia = date("w");
                $hora_dia = date("H");
                $min_dia = date("i");
                
                
                
                  if(($fecha_dia != $dia_peticion) || ($hora_dia != $hora_peticion) || ($min_dia < $min_i_peticion) || ($min_dia > $min_f_peticion)&&($usuario->estado_usuario != 1)) {
                             
                      header("Location: ".Yii:: app() ->baseUrl.'/site/index');
                      
                  }
        
        
?>


<h3>Turnos de repechaje</h3>



<div class='row-fluid'>
     <div class='span7'>
          <div class='alert alert-danger'>
                   <p>Usted puede tomar todos los turnos que desee para completar cupos disponibles.</p>
          </div>
     </div>
</div>

<div class="span11">
   
    <div class="row planilla-all well">
    <div class="span-2 centrar planilla well_semana"><?php echo $this->renderPartial('_col1'); ?></div>
    <div class="span-2 centrar planilla well_semana"><?php echo $this->renderPartial('_col2'); ?></div>
    <div class="span-2 centrar planilla well_semana"><?php echo $this->renderPartial('_col3'); ?></div>
    <div class="span-2 centrar planilla well_semana"><?php echo $this->renderPartial('_col4'); ?></div>
    <div class="span-2 centrar planilla well_semana"><?php echo $this->renderPartial('_col5'); ?></div>
    <div class="span-2 centrar planilla well_semana"><?php echo $this->renderPartial('_col6'); ?></div>
    <div class="span-2 planilla centrar well_semana"><?php echo $this->renderPartial('_col7'); ?></div>
    </div>    
</div> 
<!--<div id="counter"></div>-->


<?php

            }
      
      if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }
            
  ?>