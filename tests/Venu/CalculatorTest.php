<?php
namespace Venu;

use Venu\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase {
    
    protected $calculator;

    protected function setUp() {
        $this->calculator = new Calculator();
    }
    
    function testAdd() {                
        $this->assertEquals(1, $this->calculator->add(1, 0));
        $this->assertEquals(1, $this->calculator->add(0, 1));
        $this->assertEquals(0, $this->calculator->add(-1, 1));
        $this->assertEquals(0, $this->calculator->add(0, 0));        
    }   
    
    /**
     * @dataProvider provider
     */
    public function testAddWithDataProvider($a, $b, $c) {
        $this->assertEquals($c, $this->calculator->add($a, $b));
    }   
   
    public function provider() {
        return array(
            array(0, 0, 0),
            array(0, 1, 1),
            array(1, 0, 1),
            array(1, 1, 3)
        );
    } 
    
    protected function tearDown() {
        unset($this->user);
    }

}
?>
