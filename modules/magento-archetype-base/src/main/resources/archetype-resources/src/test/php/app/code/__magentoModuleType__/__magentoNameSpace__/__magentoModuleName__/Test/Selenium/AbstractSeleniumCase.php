<?php 

class ${magentoNameSpace}_${magentoModuleName}_Test_Selenium_AbstractSeleniumCase extends PHPUnit_Extensions_SeleniumTestCase
{

    protected $_mavenProperties;
    protected $_baseUrl;
    protected $_magentoRoot;
    protected $_backendUser = 'admin';
    protected $_backendPasswd;
    protected $_backendFrontName = 'admin/';

    protected function setUp()
    {
        // read filtered properties file
        $this->_mavenProperties = parse_ini_file("selenium.ini");

        // handle property conventions
        if ($this->_mavenProperties['magento.test.root.link'] != '') {
            $this->_magentoRoot = $this->_mavenProperties['magento.test.root.link'];
        } else {
            $this->_magentoRoot = $this->_mavenProperties['magento.root.local'];
        }
        
        if ($this->_mavenProperties['magento.test.url.base'] != '') {
            $this->_baseUrl = $this->_mavenProperties['magento.test.url.base'];
        } else if ($this->_mavenProperties['magento.url.base'] != '') {
            $this->_baseUrl = $this->_mavenProperties['magento.url.base'];
        } else {
            $this->_baseUrl = 'http://127.0.0.1/'.basename($this->_magentoRoot).'_it/';
        }
        // ensure trailing slash
        if (strripos($this->_baseUrl, '/', strlen($this->_baseUrl)-1) !== (strlen($this->_baseUrl)-1)) {
            $this->_baseUrl .= '/';
        }

        $this->_backendPasswd = $this->_mavenProperties['magento.admin.passwd'];
        if ($this->_mavenProperties['magento.admin.username'] != '') {
            $this->_backendUser = $this->_mavenProperties['magento.admin.username'];
        }
        if ($this->_mavenProperties['magento.backend.frontend.name'] != '') {
            $this->_backendFrontName = $this->_mavenProperties['magento.backend.frontend.name'];
        } 
        
        // selenium config
        $this->setBrowser($this->_mavenProperties['selenium.browser']);
        $this->setBrowserUrl($this->_baseUrl);
    }
    
    /**
     * Login to Magento backend.
     */
    public function magentoAdminLogin()
    {
        // open backend page
        $this->open($this->_backendFrontName);
        // enter login credentials
        $this->type('username', $this->_backendUser);
        $this->type('login', $this->_backendPasswd);
        // login
        $this->clickAndWait('css=input.form-button');
        // close magento unread news popup
        $this->click('css=a[title="close"] > span');
    }

}
