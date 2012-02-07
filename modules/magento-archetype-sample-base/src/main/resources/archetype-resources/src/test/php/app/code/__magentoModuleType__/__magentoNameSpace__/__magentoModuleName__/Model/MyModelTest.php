<?php
class MyModelTest extends Zend_Test_PHPUnit_ControllerTestCase
{
	public function setUp()
	{
		$this->myModel = Mage::getModel('${magentoModuleNameLowerCase}/myModel');
	}
	
	public function tearDown()
	{

	}
	
	public function testMyModelCrud()
	{
		$m = $this->myModel;
		
		// Check model class has correct type
		$this->assertEquals(get_class($m), "${magentoNameSpace}_${magentoModuleName}_Model_MyModel", "Model is not of type ${magentoNameSpace}_${magentoModuleName}_Model_MyModel");
		 
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