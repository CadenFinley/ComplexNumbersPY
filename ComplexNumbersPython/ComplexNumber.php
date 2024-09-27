<?php
class ComplexNumber
{
    private $number;
    private $imaginary;

    public function __construct($number, $imaginary)
    {
        $this->number = $number;
        $this->imaginary = $imaginary;
    }

    public function add(ComplexNumber $other)
    {
        $newNumber = $this->number + $other->number;
        $newImaginary = $this->imaginary + $other->imaginary;
        return new ComplexNumber($newNumber, $newImaginary);
    }

    public function subtract(ComplexNumber $other)
    {

        $newNumber = $this->number - $other->number;
        $newImaginary = $this->imaginary - $other->imaginary;
        return new ComplexNumber($newNumber, $newImaginary);
    }

    public function multiply(ComplexNumber $other)
    {
        $newNumber = ($this->number * $other->number) - ($this->imaginary * $other->imaginary);
        $newImaginary = (($this->number * $other->imaginary) + ($this->imaginary * $other->number));
        return new ComplexNumber($newNumber, $newImaginary);
    }

    public function divide(ComplexNumber $other)
    {
        $denominator = $other->number * $other->number + $other->imaginary * $other->imaginary;
        $realNumerator = $this->number * $other->number + $this->imaginary * $other->imaginary;
        $imaginaryNumerator = $this->imaginary * $other->number - $this->number * $other->imaginary;
        return new ComplexNumber($realNumerator / $denominator, $imaginaryNumerator / $denominator);
    }

    public function __toString()
    {
        $sign = $this->imaginary >= 0 ? '+' : '';
        return "{$this->number} {$sign} {$this->imaginary}i";
    }
}
