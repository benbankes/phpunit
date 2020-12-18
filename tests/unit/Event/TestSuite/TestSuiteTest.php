<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\TestSuite;

use PHPUnit\Framework\TestCase;

/**
 * @covers \PHPUnit\Event\TestSuite\TestSuite
 */
final class TestSuiteTest extends TestCase
{
    public function testConstructorSetsName(): void
    {
        $name          = 'Unit Tests';
        $numberOfTests = 9001;

        $testSuite = new TestSuite(
            $name,
            $numberOfTests
        );

        $this->assertSame($name, $testSuite->name());
        $this->assertSame($numberOfTests, $testSuite->numberOfTests());
    }
}
