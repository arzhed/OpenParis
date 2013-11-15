<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Location
 *
 * @author Dimitri
 */
class Location extends PHPUnit_Framework_TestCase {
    private $district;
    private $nbautolib;
    private $nbvelib;
    private $nboffice;
    private $nbmetro;
    private $nboutdoormarket;
    private $namemayor;
    
    public function Location($inputdistrict,$inputnbauto,$inputnbvelib,$inputnboffice,$inputmetro,$inputmarket,$inputmayor){
        

        
       /* if( is_null($this->namemayor))
      {
          throw new Exception("The name of mayor can not be null");
      }
        
        if(!var_dump($inputdistrict instanceof Integer))
        {
            echo "It is not a valid type";
        }
        */
  
        $this->district=$inputdistrict;
        $this->nbautolib=$inputnbauto;
        $this->nbvelib=$inputnbvelib;
        $this->nboffice=$inputnboffice;
        $this->nbmetro=$inputmetro;
        $this->nboutdoormarket=$inputmarket;
        $this->namemayor=$inputmayor;
    }
    
    public function getMayor(){
        return $this->$namemayor ;
    }
    public function getDistrict()
    {
        return  $this->district;
    }
}
