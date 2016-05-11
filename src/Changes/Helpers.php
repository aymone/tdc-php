<?php

namespace Tdc\Changes;

/**
 * Class Changes
 * @package Tdc
 */
class Helpers {
    
    /**
     * format date to br
     */
    public function dateToBr($date)
    {
        $toBr = [];
        list($toBr[], $toBr[], $toBr[]) = explode("-", $date);
        return implode("/", $toBr);
    }
    
    public function breakWord($string)
    {   
        
        list($a, $b, $c) = $string;
        return [ $a, $b, $c ];
    }
    
    public function getString(){
        $str = ['123456', 'abcdef'];
        list($num, $string) = $str;
        return $string;
    }
}
