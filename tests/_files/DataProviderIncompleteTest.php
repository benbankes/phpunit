<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use PHPUnit\Framework\TestCase;

class DataProviderIncompleteTest extends TestCase
{
    public static function providerMethod()
    {
        return [
          [0, 0, 0],
          [0, 1, 1],
        ];
    }

    /**
     * @dataProvider incompleteTestProviderMethod
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     */
    public function testIncomplete($a, $b, $c)
    {
        $this->assertTrue(true);
    }

    /**
     * @dataProvider providerMethod
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     */
    public function testAdd($a, $b, $c)
    {
        $this->assertEquals($c, $a + $b);
    }

    public function incompleteTestProviderMethod()
    {
        $this->markTestIncomplete('incomplete');

        return [
          [0, 0, 0],
          [0, 1, 1],
        ];
    }
}
