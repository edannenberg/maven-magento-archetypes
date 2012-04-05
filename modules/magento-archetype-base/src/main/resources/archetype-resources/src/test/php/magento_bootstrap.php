<?php

require_once('app/Mage.php');

// standard bootstrap
//Mage::app('default');

// start ecomdev bootstrap

/* replace server variables for proper file naming */
$_SERVER['SCRIPT_NAME'] = dirname(__FILE__) . DS . 'index.php';
$_SERVER['SCRIPT_FILENAME'] = dirname(__FILE__) . DS . 'index.php';

Mage::app('admin');
Mage::getConfig()->init();

/* only needed for single test invocations, also need to change testPostfix in your pom.xml. */
// const XML_PATH_UNIT_TEST_APP = 'phpunit/suite/app/class';
// $appClass = (string) Mage::getConfig()->getNode(XML_PATH_UNIT_TEST_APP);
// $reflectionClass = EcomDev_Utils_Reflection::getRelflection($appClass);

// if ($reflectionClass->hasMethod('applyTestScope')) {
//     $reflectionClass->getMethod('applyTestScope')->invoke(null);
// }

// end ecomdev bootstrap

?>