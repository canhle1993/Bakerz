--TEST--
The right events are emitted in the right order for a test that runs code which triggers E_USER_DEPRECATED
--FILE--
<?php declare(strict_types=1);
$traceFile = tempnam(sys_get_temp_dir(), __FILE__);

$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--no-output';
$_SERVER['argv'][] = '--log-events-text';
$_SERVER['argv'][] = $traceFile;
$_SERVER['argv'][] = __DIR__ . '/_files/DeprecatedFeatureTest.php';

require __DIR__ . '/../../bootstrap.php';

(new PHPUnit\TextUI\Application)->run($_SERVER['argv']);

print file_get_contents($traceFile);

unlink($traceFile);
--EXPECTF--
PHPUnit Started (PHPUnit %s using %s)
Test Runner Configured
Test Suite Loaded (2 tests)
Event Facade Sealed
Test Runner Started
Test Suite Sorted
Test Runner Execution Started (2 tests)
Test Suite Started (PHPUnit\TestFixture\Event\DeprecatedFeatureTest, 2 tests)
Test Preparation Started (PHPUnit\TestFixture\Event\DeprecatedFeatureTest::testDeprecatedFeature)
Test Prepared (PHPUnit\TestFixture\Event\DeprecatedFeatureTest::testDeprecatedFeature)
Test Triggered Deprecation (PHPUnit\TestFixture\Event\DeprecatedFeatureTest::testDeprecatedFeature, unknown if issue was triggered in first-party code or third-party code)
message
Test Triggered Deprecation (PHPUnit\TestFixture\Event\DeprecatedFeatureTest::testDeprecatedFeature, unknown if issue was triggered in first-party code or third-party code, suppressed using operator)
message
Test Passed (PHPUnit\TestFixture\Event\DeprecatedFeatureTest::testDeprecatedFeature)
Test Finished (PHPUnit\TestFixture\Event\DeprecatedFeatureTest::testDeprecatedFeature)
Test Preparation Started (PHPUnit\TestFixture\Event\DeprecatedFeatureTest::testDeprecatedSuppressedErrorGetLast)
Test Prepared (PHPUnit\TestFixture\Event\DeprecatedFeatureTest::testDeprecatedSuppressedErrorGetLast)
Test Triggered Deprecation (PHPUnit\TestFixture\Event\DeprecatedFeatureTest::testDeprecatedSuppressedErrorGetLast, unknown if issue was triggered in first-party code or third-party code, suppressed using operator)
message
Test Passed (PHPUnit\TestFixture\Event\DeprecatedFeatureTest::testDeprecatedSuppressedErrorGetLast)
Test Finished (PHPUnit\TestFixture\Event\DeprecatedFeatureTest::testDeprecatedSuppressedErrorGetLast)
Test Suite Finished (PHPUnit\TestFixture\Event\DeprecatedFeatureTest, 2 tests)
Test Runner Execution Finished
Test Runner Finished
PHPUnit Finished (Shell Exit Code: 0)
