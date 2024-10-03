--TEST--
The right events are emitted in the right order for a test that runs code which triggers an E_USER_NOTICE
--FILE--
<?php declare(strict_types=1);
$traceFile = tempnam(sys_get_temp_dir(), __FILE__);

$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--no-output';
$_SERVER['argv'][] = '--log-events-text';
$_SERVER['argv'][] = $traceFile;
$_SERVER['argv'][] = __DIR__ . '/_files/UserNoticeTest.php';

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
Test Suite Started (PHPUnit\TestFixture\Event\UserNoticeTest, 2 tests)
Test Preparation Started (PHPUnit\TestFixture\Event\UserNoticeTest::testUserNotice)
Test Prepared (PHPUnit\TestFixture\Event\UserNoticeTest::testUserNotice)
Test Triggered Notice (PHPUnit\TestFixture\Event\UserNoticeTest::testUserNotice)
message
Test Passed (PHPUnit\TestFixture\Event\UserNoticeTest::testUserNotice)
Test Finished (PHPUnit\TestFixture\Event\UserNoticeTest::testUserNotice)
Test Preparation Started (PHPUnit\TestFixture\Event\UserNoticeTest::testUserNoticeErrorGetLast)
Test Prepared (PHPUnit\TestFixture\Event\UserNoticeTest::testUserNoticeErrorGetLast)
Test Triggered Notice (PHPUnit\TestFixture\Event\UserNoticeTest::testUserNoticeErrorGetLast)
message
Test Passed (PHPUnit\TestFixture\Event\UserNoticeTest::testUserNoticeErrorGetLast)
Test Finished (PHPUnit\TestFixture\Event\UserNoticeTest::testUserNoticeErrorGetLast)
Test Suite Finished (PHPUnit\TestFixture\Event\UserNoticeTest, 2 tests)
Test Runner Execution Finished
Test Runner Finished
PHPUnit Finished (Shell Exit Code: 0)
