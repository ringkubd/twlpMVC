<?php

/*
 * Author: MD. ANWAR JAHID.
 * Email: ajr.jahid@gmail.com
 * FB: www.fb.com/ringkud
 */

namespace Core\Models;

/**
 * Description of Database
 *
 * @author ringku
 */
class Database {
    public function __construct() {
            require_once ('/../../Apps/Config/Database.php');
            $host   = DB_HOST;
            $user   = DB_USER;
            $pass   = DB_PASS;
            $db     = DB;
            try{
                $this->connection = new \mysqli($host,$user,$pass,$db);
                if($this->connection->connect_error)
                {
                    throw new \Exception('Connection Failed . Please check Apps/config/Database.php');
                }
            } catch (Exception $e) {
                $error = $e->getMessage();
                echo $error;
                return false;

            }
        
    }
}
