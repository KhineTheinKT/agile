<?php

class UserTest extends \PHPUnit_Framework_TestCase 
{

    public function setup()
    {
        $user = new \MUSICA\User;

    }

    public function testLoginName()
    {

        $this->user->setLoginName('admin123');

        $this->assertEquals($this->user->getLoginName(), 'admin123');
    }

    public function testLoginPassword()
    {
        $this->user->setLoginPassword('12345');

        $this->assertEquals($this->user->getLoginPassword(), '12345');
    }

    public function testEmail()
    {
        $this->user->setEmail();

        $this->assertRegExp(/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/iD, $email)
    }

    #public function testLastName()
    #{
     #   $user = new \MUSICA\User;

      #  $user->setLastName('Lamin');

       # $this->assertEquals($user->getLastName(), 'Lamin');
    #}

    #public function testFullName()
   # {
     #   $user = new \MUSICA\User;

    #    $user->setFirstName('Billy');
       # $user->setLastName('Lamin');

        #$this->assertEquals($user->getFullName(), 'Billy Lamin');
    #}

    public function testNameAreTrimmed()
    {
        $usr = new \MUSICA\User;

        $user->setLoginName('Billy        ');
       # $user->setLastName('      Lamin        ');

        $this->assertEquals($user->getLoginName(), 'admin123');
        #$this->assertEquals($user->getLastName(), 'Lamin');
    }

    public function testEmail()
    {
        $user = new \MUSICA\User;

        $user->setEmail('billy@gmail.com');

        $this->assertEquals($user->getEmail(), 'billy@gmail.com');
    }

    public function testEmailVariable()
    {
        $user = new \MUSICA\User;

        $user->setFirstName('Billy');
        $user->setLastName('Lamin');
        $user->setEmail('Billy@gmail.com');

        $emailVariables = $user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $thsi->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['full_name'], 'Billy Lamin');
        $this->assertEquals($emailVariables['email'], 'billy@gmail.com');
    }
}