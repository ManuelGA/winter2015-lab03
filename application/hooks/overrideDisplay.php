<?php



class overrideDisplay
{





    function display_override()
    {
        $this->CI = & get_instance();
        // get the current output
        $output = $this->CI->output->get_output();
       
        // the regular expression that matchess <p class="lead"> </p>
        $regularExp = "/(<p\s+class\=\"lead\">.*<\/p>)/";
        
     
        
        
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>