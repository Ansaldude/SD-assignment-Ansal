<?php


use PHPUnit\Framework\TestCase;
class firsttest extends TestCase
{
  public function test_multiplication_of_two_number()
  {
      $a = 5;
      $b = 4;
      $c = 5 + 7;


      $this->assertEquals($c, 9);

  }
}
