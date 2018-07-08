<?php

$page = $_REQUEST['page'];
if($page == '1'){
    $a = '{
    "status": 1,
	       "page" : 1,
        "pageSize" : 20,
        "totalPage" : 2,
        "total" : 2,
    "data": [
        {
            "info_cover": "./upload/IMG_0231.png",
            "info_title": "【崩坏3】游戏内各种伤害机制与伤害加成说明1",
            "info_intro": "作者： 知识的探求者",
            "info_date": "2018-02-08",
            "info_auth": "admin",
			"info_msg": "更新循环结束之后执行延迟回调。在修改数据之后立即使用这个方法，获取更新后的",
            "info_url": "\/ap\/info\/cont?id=45"
        },
        {
            "info_cover": "./upload/IMG_0231.png",
            "info_title": "【角色攻略】影骑士·月轮2",
            "info_intro": "作者    知识",
            "info_date": "2018-06-16",
            "info_auth": "admin",
			"info_msg": "更新循环结束之后执行延迟回调。在修改数据之后立即使用这个方法，获取更新后的",
            "info_url": "\/ap\/info\/cont?id=470"
        }
    ]
}';
}else if($page == '2'){
    $a = '{
    "status": 1,
	       "page" : 2,
        "pageSize" : 20,
        "totalPage" : 2,
        "total" : 2,
    "data": [
        {
            "info_cover": "./upload/IMG_0231.png",
            "info_title": "【崩坏3】游戏内各种伤害机制与伤害加成说明3",
            "info_intro": "作者： 知识的探求者",
            "info_date": "2018-02-08",
            "info_auth": "admin",
			"info_msg": "更新循环结束之后执行延迟回调。在修改数据之后立即使用这个方法，获取更新后的",
            "info_url": "\/ap\/info\/cont?id=45"
        },
        {
            "info_cover": "./upload/IMG_0231.png",
            "info_title": "【角色攻略】影骑士·月轮4",
            "info_intro": "作者    知识",
            "info_date": "2018-06-16",
            "info_auth": "admin",
			"info_msg": "更新循环结束之后执行延迟回调。在修改数据之后立即使用这个方法，获取更新后的",
            "info_url": "\/ap\/info\/cont?id=470"
        }
    ]
}';
}

echo json_decode(json_encode($a));

?>