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
    public function dateToBr($date) {
        $toBr = [];
        list($toBr[], $toBr[], $toBr[]) = explode("-", $date);
        return implode("/", $toBr);
    }
}
