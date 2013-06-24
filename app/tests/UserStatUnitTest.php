<?php
/**
* Unit test for UserStat model class
*/
class UserStatUnitTest extends TestCase
{

    public function testCanCreateUserStat()
    {
        $url = 'http://ace.com/users/33';
        $user_stat = new UserStat;
        $user_stat->url = $url;
        $user_stat->event = 'user.updated';
        $user_stat->save();
    }
}
