--TEST--
The right events are emitted in the right order for a successful test that has a size that is configured with annotation
--FILE--
<?php declare(strict_types=1);
$traceFile = tempnam(sys_get_temp_dir(), __FILE__);

$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--no-output';
$_SERVER['argv'][] = '--log-events-text';
$_SERVER['argv'][] = $traceFile;
$_SERVER['argv'][] = __DIR__ . '/../_files/TestSizeConfiguredWithAnnotationTest.php';

require __DIR__ . '/../../bootstrap.php';

(new PHPUnit\TextUI\Application)->run($_SERVER['argv']);

print file_get_contents($traceFile);

unlink($traceFile);
--EXPECTF--
PHPUnit Started (PHPUnit %s using %s)
Test Runner Configured
Test Runner Triggered Deprecation (Metadata found in doc-comment for class PHPUnit\DeprecatedAnnotationsTestFixture\TestSizeConfiguredWithAnnotationTest. Metadata in doc-comments is deprecated and will no longer be supported in PHPUnit 12. Update your test code to use attributes instead.)
Test Suite Loaded (1 test)
Event Facade Sealed
Test Runner Started
Test Suite Sorted
Test Runner Execution Started (1 test)
Test Suite Started (PHPUnit\DeprecatedAnnotationsTestFixture\TestSizeConfiguredWithAnnotationTest, 1 test)
Test Preparation Started (PHPUnit\DeprecatedAnnotationsTestFixture\TestSizeConfiguredWithAnnotationTest::testOne)
Test Prepared (PHPUnit\DeprecatedAnnotationsTestFixture\TestSizeConfiguredWithAnnotationTest::testOne)
Test Passed (PHPUnit\DeprecatedAnnotationsTestFixture\TestSizeConfiguredWithAnnotationTest::testOne)
Test Finished (PHPUnit\DeprecatedAnnotationsTestFixture\TestSizeConfiguredWithAnnotationTest::testOne)
Test Suite Finished (PHPUnit\DeprecatedAnnotationsTestFixture\TestSizeConfiguredWithAnnotationTest, 1 test)
Test Runner Execution Finished
Test Runner Finished
PHPUnit Finished (Shell Exit Code: 0)
