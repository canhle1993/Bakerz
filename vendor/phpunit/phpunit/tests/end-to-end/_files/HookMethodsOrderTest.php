<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\DeprecatedAnnotationsTestFixture;

use PHPUnit\Framework\Attributes\After;
use PHPUnit\Framework\Attributes\Before;
use PHPUnit\Framework\TestCase;

final class HookMethodsOrderTest extends HookMethodsOrderTestCase
{
    protected function setUp(): void
    {
    }

    protected function tearDown(): void
    {
    }

    public function testOne(): void
    {
        $this->assertTrue(true);
    }

    #[Before]
    protected function beforeSecond(): void
    {
    }

    #[Before]
    protected function beforeFirst(): void
    {
    }

    #[Before(priority: 1)]
    protected function beforeWithPriority(): void
    {
    }

    #[After]
    protected function afterFirst(): void
    {
    }

    #[After]
    protected function afterSecond(): void
    {
    }

    #[After(priority: 1)]
    protected function afterWithPriority(): void
    {
    }
}

abstract class HookMethodsOrderTestCase extends TestCase
{
    #[Before]
    protected function beforeInParent(): void
    {
    }

    #[Before(priority: 1)]
    protected function beforeWithPriorityInParent(): void
    {
    }

    #[After]
    protected function afterInParent(): void
    {
    }

    #[After(priority: 1)]
    protected function afterWithPriorityInParent(): void
    {
    }
}
