<?php 
    
if ( ! defined('BASEPATH')) 
exit('No direct script access allowed'); 

class testimonials extends Base_Model 
{ 
    public function __construct() 
    { 	
        parent::__construct(); 
        $this->table = 'testimonials';
    } 
}

 ?>