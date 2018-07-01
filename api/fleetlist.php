<?php
$page = $_REQUEST['page'];
if($page === '1'){
    $a  = '{
        "status": 1,
        "page" : 1,
        "pageSize" : 3,
        "totalPage" : 4,
        "total" : 5,
        "data": [
            {
                "fleet_id": 1,
                "fleet_cover": "./upload/iframe-6.jpg",
                "fleet_title": "活动名称1",
                "fleet_intro": "真炎角色优缺点分析评价真炎角色优缺点分析评价真炎角色优缺点分析评价真炎角色优缺点分析评价",
                "fleet_auth": "12121"
            },
            {
                "fleet_id": 1,
                "fleet_cover": "./upload/iframe-6.jpg",
                "fleet_title": "活动名称1",
                "fleet_intro": "真炎角色优缺点分析评价真炎角色优缺点分析评价真炎角色优缺点分析评价真炎角色优缺点分析评价",
                "fleet_auth": "12121"
            }
        ]
    }';    
}
if($page === '2'){
    $a  = '{
        "status": 1,
        "page" : 2,
        "pageSize" : 3,
        "totalPage" : 4,
        "total" : 5,
        "data": [
            {
                "fleet_id": 1,
                "fleet_cover": "./upload/iframe-6.jpg",
                "fleet_title": "活动名称1",
                "fleet_intro": "真炎角色优缺点分析评价真炎角色优缺点分析评价真炎角色优缺点分析评价真炎角色优缺点分析评价",
                "fleet_auth": "12121"
            }
        ]
    }';    
}
if($page === '3'){
    $a  = '{
        "status": 1,
        "page" : 3,
        "pageSize" : 3,
        "totalPage" : 4,
        "total" : 5,
        "data": [
            {
                "fleet_id": 1,
                "fleet_cover": "./upload/iframe-6.jpg",
                "fleet_title": "活动名称1",
                "fleet_intro": "真炎角色优缺点分析评价真炎角色优缺点分析评价真炎角色优缺点分析评价真炎角色优缺点分析评价",
                "fleet_auth": "12121"
            }
        ]
    }';    
}
if($page === '4'){
    $a  = '{
        "status": 1,
        "page" : 4,
        "pageSize" : 2,
        "totalPage" : 4,
        "total" : 5,
        "data": [
            {
                "fleet_id": 1,
                "fleet_cover": "./upload/iframe-6.jpg",
                "fleet_title": "活动名称1",
                "fleet_intro": "真炎角色优缺点分析评价真炎角色优缺点分析评价真炎角色优缺点分析评价真炎角色优缺点分析评价",
                "fleet_auth": "12121"
            }
        ]
    }';    
}
echo json_decode(json_encode($a))
?>