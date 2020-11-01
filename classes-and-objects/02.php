<?php

class Point
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * @param int $x
     */
    public function setX(int $x): void
    {
        $this->x = $x;
    }

    /**
     * @param int $y
     */
    public function setY(int $y): void
    {
        $this->y = $y;
    }

}

class Swapper
{

    public static function swapPoints(Point $p1, Point $p2): void
    {
        $px1 = $p1->getX();
        $py1 = $p1->getY();

        $px2 = $p2->getX();
        $py2 = $p2->getY();

        $p1->setX($px2);
        $p1->setY($py2);

        $p2->setX($px1);
        $p2->setY($py1);
    }

}


$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);
Swapper::swapPoints($p1, $p2);
echo "(" . $p1->getX() . ", " . $p1->getY() . ")\n";
echo "(" . $p2->getX() . ", " . $p2->getY() . ")\n";