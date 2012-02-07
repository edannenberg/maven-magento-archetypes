<?php 
class ${magentoNameSpace}_${magentoModuleName}_Model_MyModel extends Mage_Core_Model_Abstract
{
	
    protected function _construct()
    {
        $this->_init('${magentoModuleNameLowerCase}/myModel');
    }
	
    public function myModelMethod() {	
    	return $this->getResource()->myResourceMethod();
    }
    
}