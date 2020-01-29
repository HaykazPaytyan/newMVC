<?php

class Model
{
    
    public static function plug($modelName)
    {
        if (!is_string($modelName)) 
        {
            return false;
        }
        
        require_once(APP . '/model/' . $modelName . '.php');
    }
}


?>