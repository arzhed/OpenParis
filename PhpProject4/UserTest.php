<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserTest
 *
 * @author Dimitri
 */
class UserTest extends PHPUnit_Framework_TestCase {
    
    public function setUp(){
        require_once 'User.php';
        require_once 'UserTemp.php';
        require_once 'UserArray.php';
        require_once 'ExceptionTest.php';
        
    }
     
     
        public function testResgisterP(){
        $userarray = new UserArray();
        $user = new User(125,"John","MacDonalds");
        $userarray::addList($user);
        $expected = 125;
        $this->assertEquals($expected,$userarray::searchUserID("John","MacDonalds"));
        
        
                
    }
      public function testResgisterN(){
        $userarray = new UserArray();
        $user = new User("one hundred twenty five","John","MacDonalds");
        $userarray::addList($user);
        $expected = 125;
        $this->assertEquals($expected,$userarray::searchUserID("John","MacDonalds"));
    //put your code here
      }
      
      public function testResgisterE(){
        $userarray = new UserArray();
        try{
        $user = new User(125,NULL,NULL);
        }
        catch (Exception $e) {
        echo 'Exception received : ',  $e->getMessage(), "\n";
        }
        $userarray::addList($user);
        $expected = 125;
        $this->assertEquals($expected,$userarray::searchUserID("John","MacDonalds"));
    //put your code here
      }
      
      
      
      public function testConnexionP(){
        $userarray = new UserArray();
        $user = new UserTemp("JC1992","NewYork234");
        $userarray::addList($user);
        $expected = "NewYork234";
        $result = $userarray::searchUser("JC1992");
        $this->assertEquals($expected,$result);
                
        
        
                
    }
      public function testConnexionN(){
        $userarray = new UserArray();
        $user = new UserTemp(1992,"NewYork234");
        $userarray::addList($user);
        $expected = "NewYork234";
        $result = $userarray::searchUser("JC1992");
        $this->assertEquals($expected,$result);
                
        
        
                
    }
    /**
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
        
    }   
    
      
      public function testConnexionE(){
        $userarray = new UserArray();
        try{
        $user = new UserTemp("JC1992",NULL);
        }
        catch (InvalidArgumentException $attendu) {
        return;
        }
        $userarray::addList($user);
        $expected = "NewYork234";
        $result = $userarray::searchUser("JC1992");
        $this->assertEquals($expected,$result);
    //put your code here
      }
      
      
      
    
      
}
