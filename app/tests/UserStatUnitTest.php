<?php
/**
* Unit test for UserStat model class
*/
class UserStatUnitTest extends TestCase
{

    public function testCanCreateUserStat()
    {
        $url = 'http://ace.com/users/33';
        $event = 'user.updated';
        $user_stat = new UserStat;
        $user_stat->url = $url;
        $user_stat->event = $event;
        $user_stat->save();
        $this->assertSame($url, $user_stat->url);
        $this->assertSame($event, $user_stat->event);
    }

    public function testCanEditUserStat()
    {
        $url = 'http://ace.com/users/33';
        $user_stat = new UserStat;
        $user_stat->url = $url;
        $user_stat->event = 'user.updated';

        $next_url = 'http://ace.com/users/123';
        $user_stat->url = $next_url;
        $this->assertSame($next_url, $user_stat->url);

        $next_event = 'user.changed';
        $user_stat->event = $next_event;
        $this->assertSame($next_event, $user_stat->event);
    }
}
