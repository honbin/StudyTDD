<?php
require_once 'PHPUnit/Autoload.php';
require_once '../Triangle.php';

class TriangleTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        $this->tr = new Triangle();
    }

    public function testValidateInt() {
        try {
            $this->tr->validateInt('a', 2, 1);
        } catch(Exception $e) {
            $this->assertTrue(true);
        }
    }

    public function testValidateRange() {
        try {
            $this->tr->validateRange(0, 0, 0);
        } catch(Exception $e) {
            $this->assertTrue(true);
        }
    }

    public function testValidateFormation() {
        try {
            $this->tr->validateFormation(20, 9, 9);
        } catch(Exception $e) {
            $this->assertTrue(true);
        }
    }

    public function testGetEquilateralId() {
        $this->assertEquals(1, $this->tr->getEquilateralId(9, 9, 9));
    }

    public function testGetIsoscelesId() {
        $this->assertEquals(2, $this->tr->getIsoscelesId(10, 9, 9));
    }

    public function testGetScaleneId() {
        $this->assertEquals(3, $this->tr->getScaleneId(9, 8, 7));
    }

}
