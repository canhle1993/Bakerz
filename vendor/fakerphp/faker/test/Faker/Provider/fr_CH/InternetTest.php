<?php

namespace Faker\Test\Provider\fr_CH;

use Faker\Provider\fr_CH\Company;
use Faker\Provider\fr_CH\Internet;
use Faker\Provider\fr_CH\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class InternetTest extends TestCase
{
    public function testEmailIsValid(): void
    {
        $email = $this->faker->email();
        self::assertNotFalse(filter_var($email, FILTER_VALIDATE_EMAIL));
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);

        yield new Internet($this->faker);

        yield new Company($this->faker);
    }
}
