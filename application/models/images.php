<?php 
    
if ( ! defined('BASEPATH')) 
exit('No direct script access allowed'); 

class images extends Base_Model 
{ 
    public function __construct() 
    { 	
        parent::__construct(); 
        $this->table = 'background';
    } 
}

 ?>