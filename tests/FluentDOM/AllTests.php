<?php
/**
* Definition file for the unit test suite for FluentDOM
*
* @version $Id: AllTests.php 296 2009-07-21 12:15:44Z subjective $
* @license http://www.opensource.org/licenses/mit-license.php The MIT License
* @copyright Copyright (c) 2009 Bastian Feder, Thomas Weinert
*
* @package FluentDOM
* @subpackage unitTests
*/

/**
* Load necessary files
*/
require_once 'PHPUnit/Framework.php';
require_once dirname(__FILE__).'/Loader/AllTests.php';
require_once dirname(__FILE__).'/IteratorTest.php';
require_once dirname(__FILE__).'/StyleTest.php';

PHPUnit_Util_Filter::addFileToFilter(__FILE__);

/**
*
* @package FluentDOM
* @subpackage unitTests
*/
class FluentDOMClasses_AllTests {

  /**
  *
  * @see PHPUnit_Util_Filter::addFileToFilter()
  * @see PHPUnit_Framework_TestSuite::addTestSuite()
  */
  public static function suite() {
    $suite = new PHPUnit_Framework_TestSuite('FluentDOM Classes');
    $suite->addTestSuite('FluentDOMIteratorTest');
    $suite->addTestSuite('FluentDOMStyleTest');
    $suite->addTestSuite('FluentDOMLoader_AllTests');
    return $suite;
  }
}
?>