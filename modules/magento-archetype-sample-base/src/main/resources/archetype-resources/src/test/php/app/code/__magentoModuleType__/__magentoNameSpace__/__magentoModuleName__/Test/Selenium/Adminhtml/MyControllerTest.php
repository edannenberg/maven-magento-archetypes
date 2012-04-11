<?php 

class ${magentoNameSpace}_${magentoModuleName}_Test_Selenium_Adminhtml_MyControllerTest extends ${magentoNameSpace}_${magentoModuleName}_Test_Selenium_AbstractSeleniumCase
{

    protected function setUp()
    {
        parent::setup();
    }
    
    /**
     * Test index action of mycontroller.
     *
     * @test
     */
    public function MyControllerIndex ()
    {
        $this->magentoAdminLogin();

        // click menu and test for module output
        $this->clickAndWait("//ul[@id='nav']/li[11]/ul/li/a/span");
        $this->isTextPresent('Hello World!');
    }

}
