<?php
class Funcion{
    
    function __construct(){
        
    }
    
    function __destruct(){
        
    }
    
    public function sanitize($input){
        if(is_string($input)){
            return filter_var($input, FILTER_SANITIZE_STRING);
        }
        else{
            return $input;
        }
    }
    
    public function filter_xss($input){
        $filter = new InputFilter();
        if(is_array($input)):
            foreach($input as $key => $value):
                if(!is_array($value)):
                    $input[$key] = $filter->process(addslashes($value));
                endif;
            endforeach;
            return $input;
        else:
            return $filter->process(addslashes($input));
        endif;
    }
}
?>