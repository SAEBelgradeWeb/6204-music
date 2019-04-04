<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConverterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testRomanNumbersConverter()
    {
        $converter = new \App\Converter();
        // 1 -> I
        // 2 -> II
        // 3 -> III
        // 4 -> IV
        // 5 -> V
        // 6 -> VI
        // 7 -> VII
        // 8 -> VIII
        // 9 -> IX
        // 10 -> X
        // 20 -> XX
        // 50 -> L
        // 100 -> C
        // 500 -> D
        // 1000 -> M

        $this->assertEquals('I', $converter->convert(1));
        $this->assertEquals('II', $converter->convert(2));
        $this->assertEquals('III', $converter->convert(3));
        $this->assertEquals('V', $converter->convert(5));
        $this->assertEquals('VI', $converter->convert(6));
        $this->assertEquals('VIII', $converter->convert(8));
        $this->assertEquals('XI', $converter->convert(11));
        $this->assertEquals('XIII', $converter->convert(13));
        $this->assertEquals('XVII', $converter->convert(17));
        $this->assertEquals('XIV', $converter->convert(14));
        $this->assertEquals('LXXXVI', $converter->convert(86));

    }
}
