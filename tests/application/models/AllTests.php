<?php
require_once dirname(__FILE__) . '/WbTmpTableTest.php';
require_once dirname(__FILE__) . '/WblogbookTest.php';

class ModelsAllTests
{
    public static function main()
    {
        PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Webacula Test Suite - Models');
        $suite->addTestSuite('WbTmpTableTest');
        $suite->addTestSuite('WblogbookTest');
        return $suite;
    }
}
