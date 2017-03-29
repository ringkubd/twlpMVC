<?php

/* 
 * Author: MD. ANWAR JAHID.
 * Email: ajr.jahid@gmail.com
 * FB: www.fb.com/ringkud
 */
use \Core\Controllers\AJ_Controller as controller;
class Test extends controller
{
    public function __construct() {
        parent::__construct();
    }
    public function Index(){
        $this->Load->View('first_view');
    }
}
