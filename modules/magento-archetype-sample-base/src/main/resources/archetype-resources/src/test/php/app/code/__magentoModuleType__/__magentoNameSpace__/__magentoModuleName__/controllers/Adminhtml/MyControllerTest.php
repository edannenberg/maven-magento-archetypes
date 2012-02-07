<?php
class MyControllerTest extends Ibuildings_Mage_Test_PHPUnit_ControllerTestCase
{
	protected $_user;
	protected $_role;
	
	public function setUp()
	{
		$this->mageBootstrap();
		
		try {
			// create a admin user and role
			$this->_user = Mage::getModel("admin/user")
				->setUsername('admintest23')
				->setFirstname('Heinzi')
				->setLastname('Floppel')
				->setEmail('floppeltest@heinzi.net')
				->setPassword('123passwd')
				->save();
			$this->_role = Mage::getModel("admin/role")
				->setParent_id(1)
				->setTree_level(1)
				->setRole_type('U')
				->setUser_id($this->_user->getId())
				->save();
		} catch (Exception $e) {
			print_r($e);
		}
		// get a backend session
		Mage::getSingleton('adminhtml/url')->turnOffSecretKey();
		$session = Mage::getSingleton('admin/session');
		$user = $session->login('admintest23', '123passwd');
    }
    
    public function tearDown()
    {
    	// kick admin session
    	$adminSession = Mage::getSingleton('admin/session');
        $adminSession->unsetAll();
        $adminSession->getCookie()->delete($adminSession->getSessionName());
        // remove testuser/role
        $this->_user->delete();
        $this->_role->delete();
    }
	
    public function testMyControllerIndex()
    {
    	try {
			// set any post vars if needed via:
			//$this->getRequest()->setPost(array('key_name' => 'foobar'));
			
			$this->assertTrue(Mage::getSingleton('admin/session')->isLoggedIn(), 'Admin user is not logged in.');
			
			// dispatch controller action
			$this->dispatch('${magentoModuleNameLowerCase}/adminhtml_my/index/');	
			$response = $this->getResponse();
			
			// check headers for possible  404
			$headers = $response->getHeaders();
			foreach ($headers as $header) {
				if ($header['name'] === 'Status') {
					$this->assertNotEquals('404 File not found', $header['value'], 'Got http response 404. :(');
				}
			}
		
			// output should contain our translated msg
			$this->assertContains('Hello World!', $response->getBody(), 'Could not find translated string in html output.');
			//$this->assertQueryContentContains('<div>','Hello World!');
			
		} catch (Exception $e) {
			print_r($e);
            throw $e;
        }
    }
    
}
?>