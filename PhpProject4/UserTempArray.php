<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserTempArray
 *
 * @author Dimitri
 */
class UserTempArray {
    
     
    function UserTempArray(){
        $arrayUserTemp = array();
    }
    // add a user in the arrayUserTemp
   function addList($user){
        array_push($arrayUser, $user);
    }
    // search a tempory user thanks to at the pseudo (login) and the password
     function searchUser($pseudo, $password){
        for ($i =0; $i < $arrayUser.count(); $i++) {
    // if the pseudo is not correct or unknown ou the password is wrong -> return message "login or password incorrect"
if($arrayUserTemp->pseudo==$pseudo && $arrayUserTemp->password==$password) {
	return "You are connected";
}
else 
    return "login or password incorrect";
}
    }
}