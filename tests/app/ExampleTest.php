<?php


namespace Lightit\Automizr\Tests;

/**
 * Class ExampleTest
 * @package Lightit\Automizr\Tests
 * This example test class will show the proper format for this kind of files
 */
class ExampleTest extends BaseTest
{
    /** @test */
    public function example_test()
    {
        // Given
        $firstNumber = 1;
        $secondNumber = 1;

        // Performing
        $total = $firstNumber + $secondNumber;

        // Expect
        $this->assertEquals(2, $total);
    }
}
