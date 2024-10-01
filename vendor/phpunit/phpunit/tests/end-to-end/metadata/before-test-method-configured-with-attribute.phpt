--TEST--
The right events are emitted in the right order for a successful test that has a before-test method that is configured with attribute
--FILE--
<?php declare(strict_types=1);
$traceFile = tempnam(sys_get_temp_dir(), __FILE__);

$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--no-output';
$_SERVER['argv'][] = '--log-events-text';
$_SERVER['argv'][] = $traceFile;
$_SERVER['argv'][] = __DIR__ . '/../_files/BeforeTestMethodWithAttributeTest.php';

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
Test Suite Started (PHPUnit\DeprecatedAnnotationsTestFixture\BeforeTestMethodWithAttributeTest, 1 test)
Test Preparation Started (PHPUnit\DeprecatedAnnotationsTestFixture\BeforeTestMethodWithAttributeTest::testOne)
Before Test Method Called (PHPUnit\DeprecatedAnnotationsTestFixture\BeforeTestMethodWithAttributeTest::beforeMethod)
Before Test Method Finished:
- PHPUnit\DeprecatedAnnotationsTestFixture\BeforeTestMethodWithAttributeTest::beforeMethod
Test Prepared (PHPUnit\DeprecatedAnnotationsTestFixture\BeforeTestMethodWithAttributeTest::testOne)
Test Passed (PHPUnit\DeprecatedAnnotationsTestFixture\BeforeTestMethodWithAttributeTest::testOne)
Test Finished (PHPUnit\DeprecatedAnnotationsTestFixture\BeforeTestMethodWithAttributeTest::testOne)
Test Suite Finished (PHPUnit\DeprecatedAnnotationsTestFixture\BeforeTestMethodWithAttributeTest, 1 test)
Test Runner Execution Finished
Test Runner Finished
PHPUnit Finished (Shell Exit Code: 0)
