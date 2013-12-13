<?php

    if(Yii::app()->session['var'] != NULL)
            {

?>  




<?php

            }
      
      if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }
            
  ?>