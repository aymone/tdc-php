<?php

use PHPUnit_Framework_TestCase as PHPUnit;

use Tdc\Changes\Helpers;

class ChangesTest extends PHPUnit
{
    
    public $Helpers;
    
    public function setUp()
    {
        $this->Helpers = new Helpers;
    }
    
    public function testdateToBr()
    {
        $date = "2007-01-30";
        $result = $this->Helpers->dateToBr($date);
        $this->assertEquals("30/01/2007", $result);
    }
    
    public function testBreakWords() {
        $out = ["o", "l", "a"];
        $this->assertEquals($out, $this->Helpers->breakWord("ola"));
    }
    
    public function testGetString() {
        $out = "abcdef";
        $this->assertEquals($out, $this->Helpers->getString());
    }

} 