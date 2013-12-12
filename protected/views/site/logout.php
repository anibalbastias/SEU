<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


        unset(Yii::app()->session['var']);
        header('Location: '. Yii:: app() ->baseUrl.'/');


?>
