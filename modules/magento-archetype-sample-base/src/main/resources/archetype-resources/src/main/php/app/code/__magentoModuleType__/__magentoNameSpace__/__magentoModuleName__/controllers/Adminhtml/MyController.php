<?php

class ${magentoNameSpace}_${magentoModuleName}_Adminhtml_MyController extends Mage_Adminhtml_Controller_Action
{	
	// default action
	public function indexAction() {    	
		$this->loadLayout();
		$this->_setActiveMenu( '${magentoModuleNameLowerCase}' );
    	// if you dont want to use layout.xml:
		// $this->_addContent( $this->getLayout()->createBlock( '${magentoModuleNameLowerCase}/adminhtml_myBlock' ) );
		
		Mage::getModel('${magentoModuleNameLowerCase}/myModel')->myModelMethod();
		
        $this->renderLayout();
    }
    
}