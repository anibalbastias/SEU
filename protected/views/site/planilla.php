<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php

    if(Yii::app()->session['var'] != NULL)
            {
        
                $fecha1 = date ( 'l j/m' , strtotime("monday this week"));
                $fecha2 = date ( 'l j/m' , strtotime("sunday this week"));
                
                $f1 = explode(" ", $fecha1);
                $f2 = explode(" ", $fecha2);
                
                
                echo "
                    
                    
                    
                    
        <div class='row-fluid' style='background-color: #00b2d9; color:white;'>
            <div class='span12'>
                <h3 style='margin-left: 20px;'>Planilla Semana {$f1[1]} al {$f2[1]} </h3>
                    
    </div>    
        </div>
        
                    
                    ";

?> 





<div class="span11">
    <br>
    <div type="button" class="btn btn-info btn-mini"><a target="_blank" href="<?php echo Yii:: app() ->baseUrl.'/site/pdf'?> "> Generar PDF</a></div>
    <br><br>
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


    
    
<?php

            }
      
      if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }
            
  ?>