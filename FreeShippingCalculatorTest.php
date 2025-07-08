<?php 

class FreeShippingCalculatorTest
{
    public function ShouldApply_WhenValueIsAbouveMinimunTest()
    {
        $freight = new FreeShippingCalculator();
        $value = 160;
        $totalWithFreight = $freight->apply($value);

        $expectedValue = true;
        $this->assertEquals($expectedValue, $totalWithFreight);
    }

    public function assertEquals($expectedValue, $actualFreight)
    {
        if($expectedValue !== $actualFreight) {
            $message = 'Expected: ' . $expectedValue . ' but got: ' . $actualFreight . '--------------------';
            throw new Exception($message);
        }

        echo "Test passed!";
    }
}



?>