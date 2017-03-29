<?php

/*
 * Author: MD. ANWAR JAHID.
 * Email: ajr.jahid@gmail.com
 * FB: www.fb.com/ringkud
 */

namespace Core\Models;
use Core\Models\Database;

/**
 * Description of Model
 *
 * @author ringku
 */
class AJ_Model {
    public $host;
    public $user;
    public $pass;
    public $db;
    public $storage = array();
    
    public function __construct() {
        
        $this->storage = new Database;
        $this->storage = $this->storage->connection;
        
       
    }
    //Mysqli Connect
//    public function connect($config=array())
//    {
//        
//        
//    }
    //select data from table
    public function aj_selectall($data=['table'=>'','start'=>'','count'=>'','orderby'=>'']){
        //var_dump($this->storage);
        $table = is_array($data)?$data['table']:$data;
        
        $start = is_array($data) && isset($data['start'])?$data['start']:'';
        
        $count = is_array($data) && isset($data['count'])?",".$data['count']:'';
        
        $limit = !empty($start)?"LIMIT ".$start."". $count:"";
        
        $orderby = is_array($data) && isset($data['orderby'])?"ORDER BY ".$data['orderby']:'';
        
        $result = $this->storage->query('SELECT * FROM '.$table.' '.$limit.' '.$orderby.'');
        //var_dump('SELECT * FROM '.$table.' '.$limit.' '.$orderby.'');
        //var_dump($result);
        if($result->num_rows>0)
        {
            //var_dump($result->fetch_array());
             return $result;
        } else {
            return FALSE;
        }
       
    }
}
