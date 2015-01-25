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
        
        // look for regular expression
        if (preg_match($regularExp, $output, $newoutput))
        {
            // regex that looks for all the capital letters and the rest of the word
            // and will bold the whole word
            $newoutput[0] = preg_replace("/([A-Z]+[^-\s]*)/", "<strong>$1</strong>", $newoutput[0]); 
            
            // will replace the normal output with the newooutput for all the paragraphs
            // of 'lead' class (those matching the regularExp)
            $output = preg_replace($regularExp, $newoutput[0], $output);
        }
        
        
        echo $output;
        
        
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>