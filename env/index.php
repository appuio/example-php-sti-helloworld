<?php 

$envs = getenv();

foreach ($envs as $key => $value){
    print("Var: " . $key . "=" . $value . "/n");
}
?>