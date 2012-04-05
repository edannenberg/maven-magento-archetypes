<?php

class ${magentoNameSpace}_${magentoModuleName}_Test_Model_Mysql4_MyResourceModelTest extends EcomDev_PHPUnit_Test_Case
{

    public function setUp()
    {
        parent::setUp();
        $this->myResourceModel = Mage::getModel('${magentoModuleNameLowerCase}/myModel')->getResource();
    }

    /**
     * @test
     */
    public function myResourceCrud()
    {
        $m = $this->myResourceModel;
        $this->assertEquals(get_class($m), "${magentoNameSpace}_${magentoModuleName}_Model_Mysql4_MyModel", "Model is not of type ${magentoNameSpace}_${magentoModuleName}_Model_Mysql4_MyModel");
    }

}
