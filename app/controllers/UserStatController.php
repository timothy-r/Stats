<?php
/**
* A restful api to add and retrieve User events 
*/
class UserStatController extends BaseController {

	public function getIndex()
	{
		return 'user stats index page';
	}

    public function postEvent()
    {
        // create a new UserStat instace
        // set the url and event properties
        // persist the UserStat
    }
}
