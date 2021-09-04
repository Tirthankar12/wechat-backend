<?php
    //request input stream
    $json = file_get_contents('php://input');
    //decode json to php
    $data = json_decode($json);
    
    $response = array("loogedIn"=> true, "age"=> 23);
    //encode php response to json
    echo json_encode($data)
?>