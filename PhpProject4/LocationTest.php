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
    var $locationarray;
    var $location;
    
    public function setUp(){
        require_once 'Location.php';
        require_once 'LocationArray.php';
        
    }
    
    public function testsearchInfoP()
    {  
      $locationarray = new LocationArray();
      $result = NULL;
      $location= new Location(9,25,38,9,2,3,"Jacques Bravo");//digit of district, number of autolib, number of velib, number of poste office,number of metro, number of outdoor maket, name of mayor   
      $locationarray::addList($location);
      $expected = "Jacques Bravo";
      for ($i = 1 ; $i <= count($locationarray); $i++){
            if($locationarray::getMayor(i)=="Jacques Bravo"){
                $result = $location::getMayor(i);
                break;
            }
                
        }
      $this->assertEquals($expected,$result);
              
    } 
     public function testsearchInfoN()
    {
      $locationarray = new LocationArray();
      $result = NULL;
      $location= new Location("ninth",25,38,9,2,3,"Jacques Bravo");//digit of district, number of autolib, number of velib, number of poste office,number of metro, number of outdoor maket, name of mayor   
      /*if(!is_int($location::getDistrict()))
      {
          echo 'Type not valid';
      }*/
      $locationarray::addList($location);
      $expected = "Jacques Bravo";
      for ($i = 1; $i <= count($locationarray); $i++){
            if($locationarray::getMayor(i)=="Jacques Bravo"){
                $result = $location::getMayor(i);
                break;
            }
                
        }
      $this->assertEquals($expected,$result);
              
    } 
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
        
    }
    
    public function testsearchInfoE()
    {
       
      $location = NULL;
      $locationarray = new LocationArray();
      $result = null;
      try{
      $location= new Location(9,25,38,9,2,3,NULL);//digit of district, number of autolib, number of velib, number of poste office,number of metro, number of outdoor maket, name of mayor   
      }
      catch (InvalidArgumentException $e) {
        echo 'Exception received : ',  $e->getMessage(), "\n";
    }
      $locationarray::addList($location);
      $expected = "Jacques Bravo";
      for ($i = 1; $i <= count($locationarray); $i++){
            if($locationarray::getMayor(i)=="Jacques Bravo"){
                $result = $location::getMayor(i);
                break;
            }
                
        }
      $this->assertEquals($expected,$result);
              
    } 
}
