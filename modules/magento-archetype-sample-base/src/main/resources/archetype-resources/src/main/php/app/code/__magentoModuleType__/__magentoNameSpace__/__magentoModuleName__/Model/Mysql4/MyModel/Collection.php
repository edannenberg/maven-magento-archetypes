<?php

class ${magentoNameSpace}_${magentoModuleName}_Model_Mysql4_MyModel_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{

    public function _construct()
    {
    	parent::_construct();
        $this->_init('${magentoModuleNameLowerCase}/myModel');
    }
}