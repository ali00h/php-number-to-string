<?php
class sEncoder{
    private $allChars = array();
    private $codeSize = 0;
    
    function __construct() {
        $this->allChars = array();
	    $characters = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    
        for ($i = 0; $i < strlen($characters); $i++) {
            for ($j = 0; $j < strlen($characters); $j++) {
                for ($k = 0; $k < strlen($characters); $k++) {
                    $this->allChars[] = $characters[$i] . $characters[$j] . $characters[$k];
                }
            }
        }
        
        $this->codeSize = sizeof($this->allChars)-1;
    }    
    
    public function encode($number){
        $number = (int)$number;
        if($number < $this->codeSize) return $this->allChars[$number];
        $a1 = (int)($number / $this->codeSize);
        $a2 = (int)($number - ($this->codeSize * $a1));     
        return $this->encode($a1) . $this->allChars[$a2];
    }
    
    
}
?>
