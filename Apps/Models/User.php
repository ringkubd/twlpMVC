<?php

/*
 * Author: MD. ANWAR JAHID.
 * Email: ajr.jahid@gmail.com
 * FB: www.fb.com/ringkud
 */

/**
 * Description of User
 *
 * @author ringku
 */
use Core\Models\AJ_Model;
class User extends AJ_Model{
    public function __construct() 
    {
        parent::__construct();
    }
    public function selectall(){
        $result = $this->aj_selectall('categories');
        return $result;
    }
}
