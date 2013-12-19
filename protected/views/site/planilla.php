<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php

    if(Yii::app()->session['var'] != NULL)
            {

?> 


<h1>Planilla generada</h1><br>

<div class="">
    <div class="row planilla-all">
    
    <div class="span-2 centrar planilla"><h3> Lunes </h3><?php echo $this->renderPartial('_col1'); ?></div>
    <div class="span-2 centrar planilla"><h3> Martes </h3><?php echo $this->renderPartial('_col2'); ?></div>
    <div class="span-2 centrar planilla"><h3> Miercoles </h3><?php echo $this->renderPartial('_col3'); ?></div>
    <div class="span-2 centrar planilla"><h3> Jueves </h3><?php echo $this->renderPartial('_col4'); ?></div>
    <div class="span-2 centrar planilla"><h3> Viernes </h3><?php echo $this->renderPartial('_col5'); ?></div>
    <div class="span-2 centrar planilla"><h3> Sabado </h3><?php echo $this->renderPartial('_col5'); ?></div>
    <div class="span-2  planilla centrar"><h3> Domingo </h3><?php echo $this->renderPartial('_col7'); ?></div>
    
    
    </div>    
</div>    
    
    
<?php

            }
      
      if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }
            
  ?>