<?php 

class FreeShippingCalculatorTest
{
    public function ShouldApply_WhenValueIsAbouveMinimunTest()
    {
        $freight = new FreeShippingCalculator();
        $value = 142;
        $totalWithFreight = $freight->apply($value);

        $expectedValue = true;
        $this->assertEquals($expectedValue, $totalWithFreight);
    }

    public function assertEquals($expectedValue, $actualFreight)
    {
        if($expectedValue !== $actualFreight) {
            $message = 'Expected: ' . $expectedValue . ' but got: ' . $actualFreight . 'FALSE';
            throw new Exception($message);
        }

        echo "Test passed!";
    }
}



?>