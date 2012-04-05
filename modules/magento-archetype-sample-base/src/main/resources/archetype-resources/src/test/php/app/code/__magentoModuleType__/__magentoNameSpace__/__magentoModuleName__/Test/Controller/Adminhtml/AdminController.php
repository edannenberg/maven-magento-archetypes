<?php 

class ${magentoNameSpace}_${magentoModuleName}_Test_Controller_Adminhtml_AdminController extends EcomDev_PHPUnit_Test_Case_Controller
{
    private $_user;
    private $_role;
    
    public function setUp()
    {
        parent::setUp();
        // use a mockup session
        $this->mockAdminUserSession();
        
        // or create a real one
        /*try {
            // create a admin user and role
            $this->_user = Mage::getModel("admin/user")
            ->setUsername('foobar')
            ->setFirstname('Heinzi')
            ->setLastname('Floppel')
            ->setEmail('floppeltest@heinzi.net')
            ->setPassword('barfoo')
            ->save();
            $this->_role = Mage::getModel("admin/role")
            ->setParent_id(1)
            ->setTree_level(1)
            ->setRole_type('U')
            ->setUser_id($this->_user->getId())
            ->save();
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
        // get a backend session
        Mage::getSingleton('adminhtml/url')->turnOffSecretKey();
        $session = Mage::getSingleton('admin/session');
        $user = $session->login('foobar', 'barfoo');
        */
    }

    public function tearDown()
    {
        // kick admin session
        $adminSession = Mage::getSingleton('admin/session');
        $adminSession->unsetAll();
        $adminSession->getCookie()->delete($adminSession->getSessionName());
        // delete testuser/role if not using mockup
        //$this->_user->delete();
        //$this->_role->delete();
        parent::tearDown();
    }

    /**
     * Admin user is logged in?
     */
    public function testLoggedIn()
    {
        $this->assertTrue(Mage::getSingleton('admin/session')->isLoggedIn());
    }
}
