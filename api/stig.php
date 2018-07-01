<?php

$page = $_REQUEST['page'];
    $a = '{
        "status" : 1,
        "data":[{
            "id" : 1,
            "stigImg" : "./upload/IMG_0231.png",
            "stigName" : "累到·轨道1"
        },{
            "id" : 2,
            "stigImg" : "./upload/IMG_0231.png",
            "stigName" : "累到·轨道1"
        }]
    }';


echo json_decode(json_encode($a));

?>