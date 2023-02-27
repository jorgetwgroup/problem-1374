<?php

use PHPUnit\Framework\TestCase;

require_once 'ModuloFinder.php';

class ModuloFinderTest extends TestCase {
    public function testFindMaxK() {
        $moduloFinder = new ModuloFinder(7, 5, 12345);
        $this->assertEquals(12339, $moduloFinder->findMaxK());

        $moduloFinder = new ModuloFinder(5, 0, 4);
        $this->assertEquals(0, $moduloFinder->findMaxK());

        $moduloFinder = new ModuloFinder(10, 5, 15);
        $this->assertEquals(15, $moduloFinder->findMaxK());

        $moduloFinder = new ModuloFinder(17, 8, 54321);
        $this->assertEquals(54306, $moduloFinder->findMaxK());

        $moduloFinder = new ModuloFinder(499999993, 9, 1000000000);
        $this->assertEquals(999999995, $moduloFinder->findMaxK());

        $moduloFinder = new ModuloFinder(10, 5, 187);
        $this->assertEquals(185, $moduloFinder->findMaxK());

        $moduloFinder = new ModuloFinder(2, 0, 999999999);
        $this->assertEquals(999999998, $moduloFinder->findMaxK());
    }
}
