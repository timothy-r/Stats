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
		$crawler = $this->client->request('POST', '/user-stats/event');
		$this->assertTrue($this->client->getResponse()->isOk());
    }
}
