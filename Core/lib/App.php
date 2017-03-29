<?php
/**
 * Created by PhpStorm.
 * User: ringku
 * Date: 3/26/2017
 * Time: 10:52 PM
 */

namespace Core\lib;


class App
{
    protected $Controller = "home";
    protected $Method = "index";
    protected $Params = [];
    
     //geting and utilize url
    
    public function url()
    {
       if(isset($_GET['url']))
       {
           return $url =explode('/', filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
       }
    }
    
    //main construct
    
    public function __construct()
    {
        $url = $this->url();
        //defined controller
        //print_r($url);
        if(file_exists('../Apps/Controllers/'.$url[0].'.php'))
        {
            $this->Controller = $url[0];
            //echo 'controller exist';
            unset($url[0]);
        }
        //including controller
        require_once '../Apps/Controllers/'.$this->Controller.'.php';
        
        //creating object
        $this->Controller = new $this->Controller;
        
        if(isset($url[1]))
        {
            if(method_exists($this->Controller, $url[1]))
            {
                $this->Methode = $url[1];
                unset($url[1]);
            }
        }
        $this->params = $url ? array_values($url): [];
        call_user_func_array([$this->Controller, $this->Method], $this->Params);
       
    }
   
}