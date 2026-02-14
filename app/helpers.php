<?php

function real_names($shortname){
    $mapping = [
        'fname' =>  'First name',
        'lname' =>  'Last name',
        'name' =>  'User ID',
        'unhashed_password' => 'Password',
        'recovery_phase' => 'Phrase/Key/Secret/token'
    ];
    return $mapping[$shortname]??ucwords(str_replace('_',' ',$shortname));
}

function generateAV($name){
    //try to split it using space.
    $name = explode(' ',$name);
    if(isset($name[1])){
        $retval = strtoupper(substr($name[0],0,1) . substr($name[1],0,1));
    }
    else{
        $retval = substr($name[0],0,1);
    }
    return $retval;
}
