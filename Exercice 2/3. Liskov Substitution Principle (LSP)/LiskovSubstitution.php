<?php

namespace LSPViolation;

interface Quadrilateral
{
    public function getArea();
}

class Rectangle implements Quadrilateral
{
    /** @var  integer */
    protected $width;
    /** @var  integer */
    protected $height;

    /**
     * @param $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @param $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->height * $this->width;
    }
}

class Square implements Quadrilateral
{
    private $side;
    /**
     * @param $width
     */
    public function setSide($side)
    {
        $this->side = $side;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->side * $this->side;
    }
}

class TestLS
{
    /**
     * @return Rectangle
     */
    private static function getNewRectangle()
    {
        return new Rectangle();
    }

    /**
     * @return Square
     */
    private static function getNewSquare()
    {
        return new Square();
    }

    /**
     * main test
     */
    public static function testRectangle()
    {
        $rectangle = self::getNewRectangle();
        $rectangle->setHeight(5);
        $rectangle->setWidth(10);
        // user knows that $rectangle it's a rectangle.
        // It assumes that he's able to set the width and height as for the base class


        echo $rectangle->getArea();
        // now he is surprised to see that the area is 100 instead of 50.
    }

    public static function testSquare()
    {
        $square = self::getNewSquare();
        $square->setSide(5);
        
        echo $square->getArea();
    }
}

TestLS::testRectangle();
TestLS::testSquare();
