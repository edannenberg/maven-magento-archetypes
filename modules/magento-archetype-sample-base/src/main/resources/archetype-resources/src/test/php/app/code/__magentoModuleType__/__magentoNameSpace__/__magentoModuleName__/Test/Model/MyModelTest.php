<?php

class ${magentoNameSpace}_${magentoModuleName}_Test_Model_MyModelTest extends EcomDev_PHPUnit_Test_Case
{

    public function setUp()
    {
        parent::setUp();
        $this->myModel = Mage::getModel('${magentoModuleNameLowerCase}/myModel');
    }

    public function tearDown()
    {
        parent::tearDown();
    }

    /**
     * Test basic read/write
     *
     * @test
     * @loadFixture myModelCrud.yaml
     * @doNotIndexAll
     */
    public function myModelCrud()
    {
        $m = $this->myModel;

        // Check model class has correct type
        $this->assertEquals(get_class($m), "${magentoNameSpace}_${magentoModuleName}_Model_MyModel", "Model is not of type ${magentoNameSpace}_${magentoModuleName}_Model_MyModel");
        
        $m->load(1);
        $this->assertEquals($m->getTextField(), 'test_string', 'Text field does not match expected string.');
        $this->assertEquals($m->getFloatField(), 6.04, 'Float field does not match expected float.');
        $this->assertTrue((boolean)$m->getBooleanField(), 'Float field does not match expected float.');
        
        // Set some fields and save
        $m->setFloatField(6.04);
        $m->save();

        // Model should have an entity id now
        $this->assertNotNull($m->getId(), "Saved model does not have an entity id.");
        $modelId = $m->getId();

        // Reset model
        $m = Mage::getModel('${magentoModuleNameLowerCase}/myModel');

        // Check the model is empty
        $this->assertEquals($m->getFloatField(), null);
        	
        // Load saved model from above and check values
        $m->load($modelId);
        $this->assertEquals($m->getFloatField(), 6.04);
    }

}
?>