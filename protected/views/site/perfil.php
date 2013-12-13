<?php

    if(Yii::app()->session['var'] != NULL)
            {

?>

<h1>Mi perfil</h1>



<?php

            }
      
      if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }
            
  ?>