<?php

class Client extends MY_Controller{
    
    public function __construct() {
        parent::__construct();
        
    }
    
    public function index(){
        echo "Hello World";
    }
}