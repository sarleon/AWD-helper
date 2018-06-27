<?php




function check_array($input_array){
    foreach ($input_array as $key => $value){
        safe_check($key);
        safe_check($value);
    }
}

function safe_check($input_string){


}


check_array($_COOKIE);
check_array($_POST);
check_array($_GET);