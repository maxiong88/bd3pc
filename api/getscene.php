<?php

$a = '{
    "status": 1,
    "data": [
        {
            "id": "62",
            "name": "「帕凡提」"
        },
        {
            "id": "61",
            "name": "「吼姆王」"
        },
        {
            "id": "60",
            "name": "「湮灭沉灵」"
        },
        {
            "id": "59",
            "name": "「姬麟·黑」"
        }
    ],
    "msg": ""
}';

echo json_decode(json_encode($a));
?>