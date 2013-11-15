<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Dimitri
 */
class User extends PHPUnit_Framework_TestCase {
    
    private $lname;
    private $fname;
    private $iduser;
    
    function User($id,$firstname,$lastname){
        
        
         if(is_null($lastname || $firstname))
      {
          throw new Exception("The last name or the first name can not be null");
      }
       
        $this->iduser=$id;
        $this->fname=$firstname;
        $this->lname=$lastname;
        
    }
    
    function getID()
    {
        return $this->iduser;
    }
    
    function getLastName()
    {
        return $this->lname;
    }
    function getFirstName()
    {
        return $this->fname;
    }
}
