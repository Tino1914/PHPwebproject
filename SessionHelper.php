<?php

//Start session
session_start();


function isLoggedIn(){
    if(isset($_SESSION['username'])){
        return true;
    }
    else{
        return false;
    }
}



function isAdminLoggedIn(){
    if(isLoggedIn()){
        if($_SESSION['username']=='admin'){
            return true;
        }
        else
        return false;
        
    }
    return false;

}








