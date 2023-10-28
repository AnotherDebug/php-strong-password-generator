<?php

function genPass($p_length, $characters)
{
    $password = '';
    $characters_list_length = strlen($characters);

    for ($i = 0; $i < $p_length; $i++) {
        $random_index = rand(0, $characters_list_length - 1);
        $password .= $characters[$random_index];
    }

    return $password;
};


function checkPass($pass) {
    if(strlen($pass) >= 8 && strlen($pass) <= 32) {
        return true;
    }else {
        return false;
    }
};
