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

class ${magentoNameSpace}_${magentoModuleName}_Test_Controller_GenericFrontTest extends EcomDev_PHPUnit_Test_Case_Controller
{

    /**
     * @test
     */
    public function homePageLayout()
    {
        $this->dispatch('');
        $this->assertLayoutHandleLoaded('cms_index_index');
        $this->assertLayoutBlockCreated('left');
        $this->assertLayoutBlockCreated('right');
        $this->assertLayoutBlockRendered('content');
        $this->assertLayoutBlockTypeOf('left', 'core/text_list');
        $this->assertLayoutBlockNotTypeOf('left', 'core/links');
    }
}

