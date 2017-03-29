<?php

/*
 * Author: MD. ANWAR JAHID.
 * Email: ajr.jahid@gmail.com
 * FB: www.fb.com/ringkud
 */

/**
 * Description of Home
 *
 * @author ringku
 */
use \Core\Controllers\AJ_Controller as controller;

class Home extends controller{
    //put your code here
    public function __construct() 
    {
        parent::__construct();
        $this->users = $this->Load->AJ_Model('User');
        //var_dump( $this->Load->AJ_Model('User'));
    }
    public function Index(){
        //$users = $this->Load->AJ_Model('User');
        //var_dump($users);
        //echo '<hr/>this is home controller<hr/>';
        if(isset($_POST['submit']))
        {
            $text = $this->input('GET','text'); //check and duble checck that you use method name ALL Capital charecter..
            
        } else {
            echo 'Doesnt work';
        }
        
                
        $data['data']       = $this->users->selectall();
        $data['message']    = 'this is succes message';
        $this->Load->View('first_view',$data);
        
    }
}
