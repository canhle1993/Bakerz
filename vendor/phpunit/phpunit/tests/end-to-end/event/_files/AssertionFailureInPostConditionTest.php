<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TestFixture\Event;

use PHPUnit\Framework\Attributes\PostCondition;
use PHPUnit\Framework\TestCase;

final class AssertionFailureInPostConditionTest extends TestCase
{
    #[PostCondition]
    public function postCondition(): void
    {
        $this->assertTrue(false);
    }

    public function testOne(): void
    {
        $this->assertTrue(true);
    }
}
