<?php

$page = $_REQUEST['page'];
if($page == '1'){
    $a = '{
    "status": 1,
	"page" : 1,
	"pageSize" : 4,
	"totalPage" : 2,
	"total" : 2,
    "data": [
        {
            "catid": "8",
            "title_pic": "./static/img/valk/Kallen.png",
            "list": [
                {
                    "id": "30",
                    "valkyrie_pic": "./static/img/mark-icon-13.jpg",
                    "valkyrie_url": "./valk-details.html"
                },
                {
                    "id": "26",
                    "valkyrie_pic": "./static/img/mark-icon-13.jpg",
                    "valkyrie_url": "./valk-details.html"
                },
				{
                    "id": "30",
                    "valkyrie_pic": "./static/img/mark-icon-13.jpg",
                    "valkyrie_url": "./valk-details.html"
                },
                {
                    "id": "26",
                    "valkyrie_pic": "./static/img/mark-icon-13.jpg",
                    "valkyrie_url": "./valk-details.html"
                },
				{
                    "id": "30",
                    "valkyrie_pic": "./static/img/mark-icon-13.jpg",
                    "valkyrie_url": "./valk-details.html"
                },
                {
                    "id": "26",
                    "valkyrie_pic": "./static/img/mark-icon-13.jpg",
                    "valkyrie_url": "./valk-details.html"
                },
				{
                    "id": "30",
                    "valkyrie_pic": "./static/img/mark-icon-13.jpg",
                    "valkyrie_url": "./valk-details.html"
                },
                {
                    "id": "26",
                    "valkyrie_pic": "./static/img/mark-icon-13.jpg",
                    "valkyrie_url": "./valk-details.html"
                },
				{
                    "id": "30",
                    "valkyrie_pic": "./static/img/mark-icon-13.jpg",
                    "valkyrie_url": "./valk-details.html"
                },
                {
                    "id": "26",
                    "valkyrie_pic": "./static/img/mark-icon-13.jpg",
                    "valkyrie_url": "./valk-details.html"
                }
            ]
        },
        {
            "catid": "7",
            "title_pic": "./static/img/valk/Mei.png",
            "list": [
                {
                    "id": "31",
                    "valkyrie_pic": "./static/img/mark-icon-13.jpg",
                    "valkyrie_url": "./valk-details.html"
                }
            ]
        },
        {
            "catid": "6",
            "title_pic": "./static/img/valk/bronya.png",
            "list": [
                {
                    "id": "32",
                    "valkyrie_pic": "./static/img/mark-icon-13.jpg",
                    "valkyrie_url": "./valk-details.html"
                }
            ]
        },
        {
            "catid": "5",
            "title_pic": "./static/img/valk/himeko.png",
            "list": [
                {
                    "id": "17",
                    "valkyrie_pic": "./static/img/mark-icon-13.jpg",
                    "valkyrie_url": "./valk-details.html"
                }
            ]
        }
    ]
}';
}else if($page == '2'){
    $a = '{
    "status": 1,
	"page" : 2,
	"pageSize" : 4,
	"totalPage" : 2,
	"total" : 2,
    "data": [
        {
            "catid": "8",
            "title_pic": "./static/img/valk/sakura.png",
            "list": [
                {
                    "id": "30",
                    "valkyrie_pic": "./static/img/mark-icon-13.jpg",
                    "valkyrie_url": "./valk-details.html"
                },
                {
                    "id": "26",
                    "valkyrie_pic": "./static/img/mark-icon-13.jpg",
                    "valkyrie_url": "./valk-details.html"
                }
            ]
        },
        {
            "catid": "7",
            "title_pic": "./static/img/valk/Theresa.png",
            "list": [
                {
                    "id": "31",
                    "valkyrie_pic": "./static/img/mark-icon-13.jpg",
                    "valkyrie_url": "./valk-details.html"
                }
            ]
        },
        {
            "catid": "6",
            "title_pic": "./static/img/valk/kiana.png",
            "list": [
                {
                    "id": "32",
                    "valkyrie_pic": "./static/img/mark-icon-13.jpg",
                    "valkyrie_url": "./valk-details.html"
                }
            ]
        },
        {
            "catid": "5",
            "title_pic": "./static/img/valk/fu.png",
            "list": [
                {
                    "id": "17",
                    "valkyrie_pic": "./static/img/mark-icon-13.jpg",
                    "valkyrie_url": "./valk-details.html"
                }
            ]
        }
    ]
}';
}

echo json_decode(json_encode($a));

?>