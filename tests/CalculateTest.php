 <?php

 use pf\test\Calculate;
 use PHPUnit\Framework\TestCase;

 /**
  * 简单的类测试
  * Class CalculateTest
  */
 class CalculateTest extends TestCase{

     public function testSum(){
         $sum = new Calculate();
         $this->assertEquals($sum->sum(5,6),11);
         $this->assertEquals($sum->sum(11,22),33);
     }
 }