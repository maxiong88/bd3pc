<?php

$page = $_REQUEST['page'];
if($page == '1'){
    $a = '{
        "status" : 1,
        "page" : 1,
        "pageSize" : 20,
        "totalPage" : 6,
        "total" : 10,
        "data":[{
            "id" : 1,
            "armsImg" : "./upload/IMG_0231.png",
            "armsName" : "累到·轨道1",
            "armsgj" : "267",
            "armshx" : "83"
        },{
            "id" : 2,
            "armsImg" : "./upload/IMG_0231.png",
            "armsName" : "累到·轨道1",
            "armsgj" : "267",
            "armshx" : "83"
        }]
    }';
}else if($page == '2'){
    $a = '{
        "status" : 1,
        "page" : 2,
        "pageSize" : 20,
        "totalPage" : 6,
        "total" : 10,
        "data":[{
            "id" : 3,
            "armsImg" : "./upload/IMG_0231.png",
            "armsName" : "累到·轨道2",
            "armsgj" : "267",
            "armshx" : "83"
        }]
    }';
}else if($page == '3'){
    $a = '{
        "status" : 1,
        "page" : 3,
        "pageSize" : 20,
        "totalPage" : 6,
        "total" : 10,
        "data":[{
            "id" : 4,
            "armsImg" : "./upload/IMG_0231.png",
            "armsName" : "累到·轨道3",
            "armsgj" : "267",
            "armshx" : "83"
        },{
            "id" : 5,
            "armsImg" : "./upload/IMG_0231.png",
            "armsName" : "累到·轨道3",
            "armsgj" : "267",
            "armshx" : "83"
        }]
    }';
}else if($page == '4'){
    $a = '{
        "status" : 1,
        "page" : 4,
        "pageSize" : 20,
        "totalPage" : 6,
        "total" : 10,
        "data":[{
            "id" : 6,
            "armsImg" : "./upload/IMG_0231.png",
            "armsName" : "累到·轨道4",
            "armsgj" : "267",
            "armshx" : "83"
        }]
    }';
}else if($page == '5'){
    $a = '{
        "status" : 1,
        "page" : 5,
        "pageSize" : 20,
        "totalPage" : 6,
        "total" : 10,
        "data":[{
            "id" : 7,
            "armsImg" : "./upload/IMG_0231.png",
            "armsName" : "累到·轨道5",
            "armsgj" : "267",
            "armshx" : "83"
        },{
            "id" : 8,
            "armsImg" : "./upload/IMG_0231.png",
            "armsName" : "累到·轨道5",
            "armsgj" : "267",
            "armshx" : "83"
        }]
    }';
}else if($page == '6'){
    $a = '{
        "status" : 1,
        "page" : 6,
        "pageSize" : 20,
        "totalPage" : 6,
        "total" : 10,
        "data":[{
            "id" : 9,
            "armsImg" : "./upload/IMG_0231.png",
            "armsName" : "累到·轨道ee",
            "armsgj" : "267",
            "armshx" : "83"
        },{
            "id" : 11,
            "armsImg" : "./upload/IMG_0231.png",
            "armsName" : "累到·轨道5",
            "armsgj" : "267",
            "armshx" : "83"
        }]
    }';
}

echo json_decode(json_encode($a));

?>