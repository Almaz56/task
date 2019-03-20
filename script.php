<?php

if (!empty($_GET)) {
    for ($i=0; $i < count($_GET); $i++) { 
        $arr = array_keys($_GET);
        echo $arr[$i], ': ', $_GET[$arr[$i]], '<br>';
    }
}

elseif (!empty($_POST)) {
    for ($i=0; $i < count($_POST); $i++) { 
        $arr = array_keys($_POST);
        echo $arr[$i], ': ', $_POST[$arr[$i]], '<br>';
    }
}

else
    {
    echo "Empty";
    }
    
?>