<?php

class IndexControllerTest extends TestCase
{
	/**
	 * @return void
	 */
	public function testCanGetHomePage()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

}
