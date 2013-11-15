<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserArray
 *
 * @author Dimitri
 */
class UserArray {
    
    function UserArray(){
        $arrayUser = array();
    }
    
   /*add a user in the arrayUser*/ 
   function addList($user){
        array_push($arrayUser, $user);
    }
    /*search a user id thanks to first name and lastname*/
    function searchUserId($firstname,$lastname){
        
        for ($i =0; $i < $arrayUser.count(); $i++) {
if($arrayUser->fname==$firstName && $arrayUser->lname==$lastName) {
    
	return $arrayUser->iduser;// return id if found
}
else 
    return "User unknown";
}
        
        
    }
   
}