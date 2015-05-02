<?php
$getArray = array(
    'Type' => 'Unset'
);

//check for parameters
$url = parse_url($_SERVER['REQUEST_URI']);
if (!isset($url['query'])){
    $getArray['Parameters'] = 'NULL';
}

//fill array with key/value pairs
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $getArray['Type'] = 'GET';
    foreach($_GET as $key => $value){
        $getArray[$key] = $value;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $getArray['Type'] = 'POST';
    foreach($_POST as $key => $value){
        $getArray[$key] = $value;
    }
}


//encode to JSON
echo json_encode($getArray);

?>