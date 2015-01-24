<?php

class Guess extends Application
{
   
    
    function __construct()
    {
        parent::__construct();
        // view to get the info from.
        $this->data['pagebody'] = 'justone';
    }

    function index()
    {
        // get the last quote from the array
        $quote = $this->quotes->get(4);
        $this->data = array_merge($this->data, $quote);
        $this->render();
       
    }


}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
