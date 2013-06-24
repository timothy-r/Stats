<?php

/**
* test the UserStatController class
*/
class UserStatControllerTest extends TestCase {

    public function testGetIndex()
    {
		$crawler = $this->client->request('GET', '/user-stats');
		$this->assertTrue($this->client->getResponse()->isOk());
    }

    public function testPostEvent()
    {
		$crawler = $this->client->request('POST', '/user-stats/event');
		$this->assertTrue($this->client->getResponse()->isOk());
    }
}
