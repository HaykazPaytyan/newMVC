<?php

 function load($className)
{
        $classPaths = array(
            'lib',
            'controller',
            'model',
        );
        
        foreach ($classPaths as $paths) {
            $filename = APP . '/' . $paths . '/' . $className . '.php';
            
            if (file_exists($filename)) {
                require_once($filename);
            }
        }
}


?>