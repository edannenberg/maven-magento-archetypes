<?php 
/*
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * It is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   de.bbe-consulting.magento
 * @package    ta24
 * @copyright  Copyright (c) 2011 de.bbe-consulting.magento
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class ${magentoNameSpace}_${magentoModuleName}_Test_Controller_Adminhtml_MyControllerTest extends ${magentoNameSpace}_${magentoModuleName}_Test_Controller_Adminhtml_AdminController
{

    /**
     * Test if output contains string from our module.
     * 
     * @test
     */
    public function indexOutput()
    {
        $this->dispatch('${magentoModuleNameLowerCase}/adminhtml_my/index/');
        $this->assertResponseBodyContains('Hello World!', "Hello World! not found in response body.", false);
    }

}
