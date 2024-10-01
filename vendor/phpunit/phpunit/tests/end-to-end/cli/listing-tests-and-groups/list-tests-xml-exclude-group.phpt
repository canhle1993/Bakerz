--TEST--
phpunit --exclude-group one --list-tests-xml php://stdout ../../_files/listing-tests-and-groups
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--exclude-group';
$_SERVER['argv'][] = 'one';
$_SERVER['argv'][] = '--list-tests-xml';
$_SERVER['argv'][] = 'php://stdout';
$_SERVER['argv'][] = __DIR__ . '/../../_files/listing-tests-and-groups';

require_once __DIR__ . '/../../../bootstrap.php';

(new PHPUnit\TextUI\Application)->run($_SERVER['argv']);
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

<?xml version="1.0"?>
<testSuite xmlns="https://xml.phpunit.de/testSuite">
 <tests>
  <testClass name="PHPUnit\TestFixture\ListingTestsAndGroups\ExampleTest" file="%sExampleTest.php">
   <testMethod id="PHPUnit\TestFixture\ListingTestsAndGroups\ExampleTest::testTwo" name="testTwo"/>
  </testClass>
  <phpt file="%sexample.phpt"/>
 </tests>
 <groups>
  <group name="two">
   <test id="PHPUnit\TestFixture\ListingTestsAndGroups\ExampleTest::testTwo"/>
  </group>
 </groups>
</testSuite>%A
