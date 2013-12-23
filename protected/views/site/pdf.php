<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php
                $fecha1 = date ( 'l j/m' , strtotime("monday this week"));
                $fecha2 = date ( 'l j/m' , strtotime("sunday this week"));
                
                $f1 = explode(" ", $fecha1);
                $f2 = explode(" ", $fecha2);
                
                
                echo "<h1 class='centrar'>Planilla Semana {$f1[1]} al {$f2[1]}</h1><br>";
?>


    <!--Lunes--> 
<div class="">
    <div class="row-fluid">
    
    <div class="span-12"><?php echo $this->renderPartial('_col1_pdf'); ?></div>
  
    
    </div>    
</div>    
      
    <!--Martes-->
    <div class="">
        <div class="row-fluid">  
        
                <div class="span-12"><?php echo $this->renderPartial('_col2_pdf'); ?></div>
        
        </div>
    </div>
    
    
        <!--Miercoles-->
    <div class="">
        <div class="row-fluid">  
 
               
                 <div class="span-12"><?php echo $this->renderPartial('_col3_pdf'); ?></div>  
        
        </div>
    </div>
    
        <!--jueves-->
    <div class="">
        <div class="row-fluid">  
    
                
 
    <div class="span-12"><?php echo $this->renderPartial('_col4_pdf'); ?></div>
        
        </div>
    </div>
    
        
          <!--Viernes-->
    <div class="">
        <div class="row-fluid">  
   
               <div class="span-12"><?php echo $this->renderPartial('_col5_pdf'); ?></div>  
        
        </div>
    </div>
    
          
          <!--Sabado-->
    <div class="">
        <div class="row-fluid">  
                <div class="span-12"><?php echo $this->renderPartial('_col6_pdf'); ?></div>
        
        </div>
    </div>
    
          
          
          <!--Domingo-->
    <div class="">
        <div class="row-fluid">  
            <div class="span-12"><?php echo $this->renderPartial('_col7_pdf'); ?></div>
        
        </div>
    </div>
    
   
    
    
    