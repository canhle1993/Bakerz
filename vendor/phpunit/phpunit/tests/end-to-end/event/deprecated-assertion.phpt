--TEST--
The right events are emitted in the right order for a successful test that uses a deprecated assertion
--FILE--
<?php declare(strict_types=1);
$traceFile = tempnam(sys_get_temp_dir(), __FILE__);

$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--no-output';
$_SERVER['argv'][] = '--log-events-text';
$_SERVER['argv'][] = $traceFile;
$_SERVER['argv'][] = __DIR__ . '/_files/DeprecatedAssertionTest.php';

require __DIR__ . '/../../bootstrap.php';

(new PHPUnit\TextUI\Application)->run($_SERVER['argv']);

print file_get_contents($traceFile);

unlink($traceFile);
--EXPECTF--
PHPUnit Started (PHPUnit %s using %s)
Test Runner Configured
Test Suite Loaded (1 test)
Event Facade Sealed
Test Runner Started
Test Suite Sorted
Test Runner Execution Started (1 test)
Test Suite Started (PHPUnit\TestFixture\DeprecatedAssertionTest, 1 test)
Test Preparation Started (PHPUnit\TestFixture\DeprecatedAssertionTest::testUsingDeprecatedAssertion)
Test Prepared (PHPUnit\TestFixture\DeprecatedAssertionTest::testUsingDeprecatedAssertion)
Test Triggered PHPUnit Deprecation (PHPUnit\TestFixture\DeprecatedAssertionTest::testUsingDeprecatedAssertion)
assertStringNotMatchesFormat() is deprecated and will be removed in PHPUnit 12 without replacement.
Test Passed (PHPUnit\TestFixture\DeprecatedAssertionTest::testUsingDeprecatedAssertion)
Test Finished (PHPUnit\TestFixture\DeprecatedAssertionTest::testUsingDeprecatedAssertion)
Test Suite Finished (PHPUnit\TestFixture\DeprecatedAssertionTest, 1 test)
Test Runner Execution Finished
Test Runner Finished
PHPUnit Finished (Shell Exit Code: 0)
