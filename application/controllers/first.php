<?php


class First extends Application
{
   
    
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $quote = $this->quotes->first();
        echo $quote;
    }


}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
    
    