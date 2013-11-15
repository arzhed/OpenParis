<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LocationTest
 *
 * @author Dimitri
 */
define('i', '0');
define('location', 'NULL');

class LocationTest extends PHPUnit_Framework_TestCase{
    var $locationArray = array(); //contains every instanciated element object
    var $location;

    
    public function setUp(){
        require_once 'Location.php';
        require_once 'LocationArray.php';
        $location = new Location(17,13,8,3,12,6,"Pierre Machin"); //district, # of autolib, # of velib, # of poste office, # of metro, # of outdoor maket, name of mayor    
        array_push($locationArray, $location);
    }
    
    public function testsearchInfoP() //testing the correct insertion and retrievement of data into/from locationArray
    {  
      $result = NULL;
      $location= new Location(9,25,38,9,2,3,"Jacques Bravo");
      array_push($locationArray, $location); // insertion in array
      $expected = "Jacques Bravo"; //expected data inserted into/retrieved from array
      for ($i = 1 ; $i <= count($locationArray); $i++){
            if($locationArray[i]::getMayor()=="Jacques Bravo"){
                $result = $locationArray[i]::getMayor(); //actual data
                break;
            }
                
        }
      $this->assertEquals($expected,$result); //PHPUnit method to compare
              
    } 

    public function testsearchInfoN() 
    {
      $result = NULL;
      $location= new Location("tenth",25,38,9,2,3,"Truc Bidule");//district, # of autolib, # of velib, # of poste office, # of metro, # of outdoor maket, name of mayor    
      array_push($locationArray, $location); //corrupted insertion, digit of district is string instead of integer
      $expected = 9;
      for ($i = 1; $i <= count($locationArray); $i++){
        if($locationArray[i]::getMayor()=="Truc Bidule"){
            $result = $locationArray[i]::getDistrict();
            break;
        }      
      }
      $this->assertFalse(gettype($expected)===gettype($result),"Negative test : integer 'result' has a different type than string 'expected'");
      //comparing types of both districts : 'integer===string' must return false
    } 
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
        //PHPUnit requirement for exceptions
    }
    
    public function testsearchInfoE()
    {
       
      $result = null;
      try{
      $location= new Location(9,25,38,9,2,3,NULL);
      }
      catch (InvalidArgumentException $e) {
        echo 'Exception received : ',  $e->getMessage(), "\n"; //this method should not pass the 'try', aborted at the catch
    }
      array_push($locationArray, $location);
      $expected = "Jacques Bravo";
      for ($i = 1; $i <= count($locationArray); $i++){
            if($locationArray[i]::getMayor()=="Jacques Bravo"){
                $result = $locationArray[i]::getMayor();
                break;
            }
                
      }
      $this->assertEquals($expected,$result);
              
    } 
}
