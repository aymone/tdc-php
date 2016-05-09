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
        return implode("/", array_reverse(explode("-", $date)));
    }
}
