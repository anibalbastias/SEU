
<?php

    if(Yii::app()->session['var'] != NULL)
            {

?>


<h1>Turnos de repechaje</h1>


<?php

            }
      
      if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }
            
  ?>