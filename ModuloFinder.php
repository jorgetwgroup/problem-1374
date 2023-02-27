<?php

class ModuloFinder {
    private $x;
    private $y;
    private $n;

    public function __construct($x, $y, $n) {
        $this->x = $x;
        $this->y = $y;
        $this->n = $n;
    }

    public function findMaxK() {
        $maxK = $this->y;
        while ($maxK <= $this->n) {
            if ($maxK % $this->x == $this->y) {
                $k = $maxK;
            }
            $maxK += $this->x;
        }
        return $k;
    }
}

$t = intval(fgets(STDIN));
for ($i = 0; $i < $t; $i++) {
    list($x, $y, $n) = explode(" ", fgets(STDIN));
    $moduloFinder = new ModuloFinder($x, $y, $n);
    echo $moduloFinder->findMaxK() . "\n";
}
