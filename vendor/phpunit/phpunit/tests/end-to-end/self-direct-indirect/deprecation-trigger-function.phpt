--TEST--
The right events are emitted in the right order for a test that runs code which triggers E_USER_DEPRECATED
--FILE--
<?php declare(strict_types=1);
$traceFile = tempnam(sys_get_temp_dir(), __FILE__);

$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-output';
$_SERVER['argv'][] = '--log-events-text';
$_SERVER['argv'][] = $traceFile;
$_SERVER['argv'][] = '--configuration';
$_SERVER['argv'][] = __DIR__ . '/_files/deprecation-trigger-function';

require __DIR__ . '/../../bootstrap.php';

(new PHPUnit\TextUI\Application)->run($_SERVER['argv']);

print file_get_contents($traceFile);

unlink($traceFile);
--EXPECTF--
PHPUnit Started (PHPUnit %s using %s)
Test Runner Configured
Bootstrap Finished (%sautoload.php)
Test Suite Loaded (2 tests)
Event Facade Sealed
Test Runner Started
Test Suite Sorted
Test Runner Execution Started (2 tests)
Test Suite Started (%sphpunit.xml, 2 tests)
Test Suite Started (default, 2 tests)
Test Suite Started (PHPUnit\TestFixture\SelfDirectIndirect\FirstPartyClassTest, 2 tests)
Test Preparation Started (PHPUnit\TestFixture\SelfDirectIndirect\FirstPartyClassTest::testOne)
Test Prepared (PHPUnit\TestFixture\SelfDirectIndirect\FirstPartyClassTest::testOne)
Test Triggered Deprecation (PHPUnit\TestFixture\SelfDirectIndirect\FirstPartyClassTest::testOne, issue triggered by first-party code calling into third-party code, suppressed using operator)
deprecation in third-party code
Test Triggered Deprecation (PHPUnit\TestFixture\SelfDirectIndirect\FirstPartyClassTest::testOne, issue triggered by first-party code calling into first-party code, suppressed using operator)
deprecation in first-party code
Test Passed (PHPUnit\TestFixture\SelfDirectIndirect\FirstPartyClassTest::testOne)
Test Finished (PHPUnit\TestFixture\SelfDirectIndirect\FirstPartyClassTest::testOne)
Test Preparation Started (PHPUnit\TestFixture\SelfDirectIndirect\FirstPartyClassTest::testTwo)
Test Prepared (PHPUnit\TestFixture\SelfDirectIndirect\FirstPartyClassTest::testTwo)
Test Triggered Deprecation (PHPUnit\TestFixture\SelfDirectIndirect\FirstPartyClassTest::testTwo, issue triggered by first-party code calling into third-party code, suppressed using operator)
deprecation in third-party code
Test Triggered Deprecation (PHPUnit\TestFixture\SelfDirectIndirect\FirstPartyClassTest::testTwo, issue triggered by third-party code, suppressed using operator)
deprecation in first-party code
Test Passed (PHPUnit\TestFixture\SelfDirectIndirect\FirstPartyClassTest::testTwo)
Test Finished (PHPUnit\TestFixture\SelfDirectIndirect\FirstPartyClassTest::testTwo)
Test Suite Finished (PHPUnit\TestFixture\SelfDirectIndirect\FirstPartyClassTest, 2 tests)
Test Suite Finished (default, 2 tests)
Test Suite Finished (%sphpunit.xml, 2 tests)
Test Runner Execution Finished
Test Runner Finished
PHPUnit Finished (Shell Exit Code: 0)
