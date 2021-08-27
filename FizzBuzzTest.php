<?php


use PHPUnit\Framework\TestCase;
require "FizzBuzz.php";

class FizzBuzzTest extends TestCase
{
public function testCountGiven1ShouldReturn1(){
    //Arrange
    $fizzBuzz = new FizzBuzz();
    //Act
    $actual = $fizzBuzz->count(1);
    //Assert
    $this->assertEquals("1",$actual);
}

}
