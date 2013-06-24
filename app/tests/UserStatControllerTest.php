<?php

/**
* test the UserStatController class
*/
class UserStatControllerTest extends TestCase {

    public function testCanGetIndex()
    {
		$crawler = $this->client->request('GET', '/user-stats');
		$this->assertTrue($this->client->getResponse()->isOk());
    }

    public function testCanPostEvent()
    {
        $data = json_encode(array('url' => 'http://ace.com/user/1', 'event'=>'user.created'));
		$response = $this->action('POST', 'UserStatController@postEvent', array(), array('event' => $data));
		$this->assertTrue($this->client->getResponse()->isOk());
        // expect Location header?
        // expect a UserStat to be created
    }
}
