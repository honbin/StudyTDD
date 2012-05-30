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

    public function testGetTriangleId() {
        $this->assertEquals(1, $this->tr->getTriangleId(9, 9, 9));
        $this->assertEquals(2, $this->tr->getTriangleId(10, 9, 9));
        $this->assertEquals(3, $this->tr->getTriangleId(8, 9, 10));
    }

}
