<?php

/* 
 * Author: MD. ANWAR JAHID.
 * Email: ajr.jahid@gmail.com
 * FB: www.fb.com/ringkud
 */
namespace Core\Controllers;
use Core\lib\Load;
use Core\Models\AJ_Model;


class AJ_Controller
{
    protected $Load;
    protected $Model;
    protected $db;
    protected $error;
    public function __construct() 
    {
        $this->Load     = new Load;
        $this->Model    = new AJ_Model;
    }
    
    //get data by post method from html form
    public function input($type,$name)
    {
        $method = $type =="POST"?INPUT_POST:INPUT_GET;
        //echo $method;
        
        $inputData = filter_input($method, $name,FILTER_SANITIZE_SPECIAL_CHARS);
        if($inputData !== FALSE){
            $inputData = trim($inputData);
            $inputData = htmlspecialchars($inputData);
            return $inputData;
            
        } else {
            $this->error = 'Hey Dude! Dont Try To Give Us Pain';
            return $this->error;
        }

    }
}