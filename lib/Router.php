<?php

class Router
{
    
    private static $_routes = array();
    
    public static function add($array)
    {
        
        if (!is_array($array)) {
            return false;
        }
        
        self::$_routes[] = $array;
    }
    
    
    public static function dispatch()
    {
        foreach (self::$_routes as $key => $value) {
            foreach ($value as $pattern => $replacement) {
                
                if (preg_match("#$pattern#", $_SERVER['REQUEST_URI'], $mathces)) {
                    
                    $stmt = preg_replace("#$pattern#", $replacement, $mathces[0]);
                    
                    $stmt = explode('/', $stmt);
                    
                    $controller = ucfirst(array_shift($stmt)) . 'Controller';
                    
                    $controllerFile = APP . '/controller/' . $controller . '.php';
                    
                    if (file_exists($controllerFile)) {
                        
                        require_once($controllerFile);
                    }
                    
                    $object = new $controller;
                    
                    $action = 'action' . ucfirst(array_shift($stmt));
                    
                    
                    
                    call_user_func_array(array(
                        $object,
                        $action
                    ), $stmt);
                    
                    break 2;
                    
                }
            }
            
        }
    }
    
    
}

?>