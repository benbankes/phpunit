<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\TestDouble;

use PHPUnit\Event\Event;
use PHPUnit\Event\Telemetry;

final class PartialMockCreated implements Event
{
    private Telemetry\Info $telemetryInfo;

    /**
     * @psalm-var class-string
     */
    private string $className;

    /**
     * @psalm-var list<string>
     *
     * @var array<int, string>
     */
    private array $methodNames;

    /**
     * @psalm-param class-string $className
     */
    public function __construct(Telemetry\Info $telemetryInfo, string $className, string ...$methodNames)
    {
        $this->telemetryInfo = $telemetryInfo;
        $this->className     = $className;
        $this->methodNames   = $methodNames;
    }

    public function telemetryInfo(): Telemetry\Info
    {
        return $this->telemetryInfo;
    }

    /**
     * @psalm-return class-string
     */
    public function className(): string
    {
        return $this->className;
    }

    /**
     * @psalm-return list<string>
     *
     * @return array<int, string>
     */
    public function methodNames(): array
    {
        return $this->methodNames;
    }
}