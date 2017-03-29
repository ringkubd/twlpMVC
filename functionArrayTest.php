<?php

/* 
 * Author: MD. ANWAR JAHID.
 * Email: ajr.jahid@gmail.com
 * FB: www.fb.com/ringkud
 */

function selectall($data=['table'=>'','start'=>'','count'=>'','orderby'=>'']){
        $table = is_array($data)?$data['table']:$data;
        
        $start = is_array($data) && isset($data['start'])?$data['start']:'0';
        
        $count = is_array($data) && isset($data['count'])?",".$data['count']:'';
        
        $limit = "LIMIT ".$start."". $count;
        
        $orderby = is_array($data) && isset($data['orderby'])?"ORDER BY ".$data['orderby']:'';
        
        //$result = $this->connection->query('SELECT * FROM $table $limit $orderby');
        echo $start."<hr/>";
        var_dump('SELECT * FROM '.$table.' '.$limit.' '.$orderby.'');
        //return $result;
        
    }
    selectall(['table'=>'table','start'=>'10','count'=>'10','orderby'=>'ID DESC']);
    echo '<hr/>';
    $dimond= ['cat'=>'catffffffffffff','mew'=>'mew','dog'=>'dog'];
    $dimond = extract($dimond);
    echo $cat;
    
    