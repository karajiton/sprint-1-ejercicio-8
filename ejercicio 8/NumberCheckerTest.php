<?php
   require_once 'NumberChecker.php';
   use PHPUnit\Framework\TestCase;
   
   class NumberCheckerTest extends testcase {

        public function testIsEven() {
            $par = new NumberChecker(2);
            $this->assertTrue($par->isEven()); 
            $par = new NumberChecker(3);
            $this->assertTrue($par->isEven()); 
            $par = new NumberChecker(-4);
            $this->assertTrue($par->isEven()); 
            $par = new NumberChecker(0);
            $this->assertTrue($par->isEven()); 
        
        }
        public function testIsPositive(){
            $positive = new NumberChecker(2);
            $this-> assertTrue($positive ->isPositive());
            $positive = new NumberChecker(4);
            $this-> assertTrue($positive ->isPositive());
            $positive = new NumberChecker(-9);
            $this-> assertTrue($positive ->isPositive());
            $positive = new NumberChecker(3);
            $this-> assertTrue($positive ->isPositive());
             $positive = new NumberChecker(-5);
            $this-> assertTrue($positive ->isPositive());
         
        }
    }
?>