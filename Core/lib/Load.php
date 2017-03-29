<?php

/*
 * Author: MD. ANWAR JAHID.
 * Email: ajr.jahid@gmail.com
 * FB: www.fb.com/ringkud
 */

namespace Core\lib;
use Core\Models\AJ_Model;

/**
 * Description of Load
 *
 * @author ringku
 */
class Load {
    public function AJ_Model($model)
    {
        require_once '../Apps/Models/'.$model.'.php';
          
        return new $model;
    }
    public function View($view,$data=[])
    {
        if(isset($data))
        {
            extract($data);      
        }
        require_once '../Apps/Views/'.$view.'.php';
        //return new View;
    }
}
