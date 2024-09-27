<?php

include 'ComplexNumber.php';
//test
//didnt know if u wanted full test cases using PHPunit so I just did conditional statements
function testAdd()
{
    $first = new ComplexNumber(3,4);
    $second = new ComplexNumber(2,1);
    $expected = "5 + 5i";
    $check = $first->add($second);
    if($check == $expected){
        echo "pass ";
        echo $check."\n";
    }
    else{
        echo "not pass\nexpected: ".$expected." and got ".$check."\n";
    }
}
function testSubtract()
{
    $first = new ComplexNumber(3,4);
    $second = new ComplexNumber(2,1);
    $expected = "1 + 3i";
    $check = $first->subtract($second);
    if($check == $expected){
        echo "pass ";
        echo $check."\n";
    }
    else{
        echo "not pass\nexpected: ".$expected." and got ".$check."\n";
    }
}
function testMultiply()
{
    $first = new ComplexNumber(3,4);
    $second = new ComplexNumber(2,1);
    $expected = "2 + 11i";
    $check = $first->multiply($second);
    if($check == $expected){
        echo "pass ";
        echo $check."\n";
    }
    else{
        echo "not pass\nexpected: ".$expected." and got ".$check."\n";
    }
}
function testDivide()
{
    $first = new ComplexNumber(3,4);
    $second = new ComplexNumber(2,1);
    $expected = "2 + 1i";
    $check = $first->divide($second);
    if($check == $expected){
        echo "pass ";
        echo $check."\n";
    }
    else{
        echo "not pass\nexpected: ".$expected." and got ".$check."\n";
    }
}

//test functions
testAdd();
testSubtract();
testMultiply();
testDivide();