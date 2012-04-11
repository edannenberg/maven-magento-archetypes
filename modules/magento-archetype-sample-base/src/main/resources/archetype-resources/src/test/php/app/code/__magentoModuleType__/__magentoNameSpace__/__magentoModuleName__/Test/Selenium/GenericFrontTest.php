<?php 

class ${magentoNameSpace}_${magentoModuleName}_Test_Selenium_GenericFrontTest extends ${magentoNameSpace}_${magentoModuleName}_Test_Selenium_AbstractSeleniumCase
{

    protected function setUp()
    {
        parent::setup();
    }
 
    /**
     * Basic frontend test.
     *
     * @test
     */
    public function HomePage()
    {
        $this->open();
        $this->assertEquals($this->getTitle(), "Home page");
    }

}
