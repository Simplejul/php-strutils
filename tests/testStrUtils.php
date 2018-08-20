<?php
include 'StrUtils.class.php';
class testStrUtils extends \PHPUnit\Framework\TestCase
{
    public function testBold($t){
        $test = new StrUtils;
        $this->assertEquals("'<b>'.$t.'</b>'", $test->bold($t));
    }
}

?>