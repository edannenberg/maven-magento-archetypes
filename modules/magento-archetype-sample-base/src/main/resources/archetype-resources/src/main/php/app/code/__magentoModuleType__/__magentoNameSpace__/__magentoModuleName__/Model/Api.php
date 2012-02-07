<?php

/**
 * ${magentoModuleName} Test API
 *
 * @category   Local
 * @package    ${magentoNameSpace}_${magentoModuleName}
 * @author     Erik Dannenberg <erik.dannenberg@bbe-consulting.de>
 */
class ${magentoNameSpace}_${magentoModuleName}_Model_Api extends ${magentoNameSpace}_${magentoModuleName}_Model_Api_Resource {

	// constructor
    public function __construct()
    {
    }

    /**
     * Says hello
     * 
     * @param string name to greet
     * @return string the greeting
     */
    public function helloWorld($name) {
    	if ( $name != '' ) {
			return sprintf('Hello %s! Nice day isn\'t it?', $name);
    	} else {
    		$this->_fault('myerror_code');
		}
    }
}