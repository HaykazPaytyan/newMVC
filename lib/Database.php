<?php

class Database
{
    
    public static function connect()
    {
        return new PDO(DSN, USR, PSW);
    }
}

?>