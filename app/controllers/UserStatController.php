<?php
/**
* A restful api to add and retrieve User events 
*/
class UserStatController extends BaseController {

    public function __construct()
    {
        #$this->beforeFilter('csrf', array('on' => 'post'));
    }

    /**
    * @todo return a list of events
    */
	public function getIndex()
	{
		return 'user stats index page';
	}

    /**
    * @todo validate event data
    * @todo get data from url and store it locally
    */
    public function postEvent()
    {
        $event = json_decode(Input::get('event'));
        // create a new UserStat instance
        $user_stat = new UserStat;
        // set the url and event properties
        $user_stat->url = $event->url;
        $user_stat->event = $event->event;
        // persist the UserStat
        $user_stat->save();
        // return success response
    }
}
