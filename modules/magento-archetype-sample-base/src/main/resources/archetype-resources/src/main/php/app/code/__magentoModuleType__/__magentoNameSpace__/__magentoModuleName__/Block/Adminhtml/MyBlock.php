<?php

class ${magentoNameSpace}_${magentoModuleName}_Block_Adminhtml_MyBlock extends Mage_Adminhtml_Block_Widget
{	
	
    public function __construct()
    {
        parent::__construct();
        $this->setId('${magentoModuleNameLowerCase}_myBlock');
        // set template manually if you dont want to use layout.xml:
        //$this->setTemplate('${magentoModuleNameLowerCase}/index.phtml');
        
    }
}