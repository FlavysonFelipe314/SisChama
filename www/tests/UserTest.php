<?php

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUserGettersAndSettersSuccess()
    {
        $this->expectOutputString("Flavyson");

        $User = new User;
        $User->setName("   FLAVYSON");

        echo $User->getName();
    }

}
