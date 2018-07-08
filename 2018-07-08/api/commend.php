<?php

$page = $_REQUEST['page'];
if($page=='1'){
    $a = '{
        "error" : 0,
        "msg" : "成功",
        "page" : 1,
        "totalPage": 11,
        "data" : {
            "totalCount" : 2000,
            "comments" : [{
                "commentId" : 10000,
                "commentType" : 2,
                "parentId" : 100,
                "commentAuthorId" : "1234567890",
                "commentAuthorName" : "我是第一个人",
                "commentAuthorImg" : "./upload/25479170020671271_01.png",
                "tm" : "04-12 15:13",
                "zanCount" : 100,
                "caiCount" : 44,
                "subMsgCount" : 100,
                "zanByMe":0,
                "commentContent" : "N次 泰国 自由行，再加 泰国 待了一年，所以 泰国 基本逛遍了～ 不管去哪，我一般都会选择自由行，因为时间自由，不需要体验到此一游的游客体验，想去哪里自己决定 And我的行程里一般没有景...",
                "subMessages" : [{
                    "msgId":10001,
                    "msgType":1,
                    "msgContent":"泰国 自由行，再加 泰国 待了一年，所以 ",
                    "msgAuthorId":12345678901,
                    "parentId":10000,
                    "msgAuthorName":"我的一个人1",
                    "msgAuthorImg":"./upload/25479170020671271_01.png",
                    "read":0,
                    "tm":"04-12 15:13"
                },{
                    "msgId":10002,
                    "msgType":1,
                    "msgContent":"泰国 自由行，再加 泰国 待了一年，所以 ",
                    "msgAuthorId":12345678901,
                    "parentId":10000,
                    "msgAuthorName":"我的一个人1",
                    "msgAuthorImg":"./upload/25479170020671271_01.png",
                    "read":0,
                    "tm":"04-12 15:13"
               }]
            },{
                "commentId" : 20000,
                "commentType" : 2,
                "parentId" : 100,
                "commentAuthorId" : "12345678902",
                "commentAuthorName" : "我是第二个人",
                "commentAuthorImg" : "./upload/25479170020671271_01.png",
                "tm" : "04-12 15:13",
                "zanCount" : 110,
                "caiCount" : 44,
                "subMsgCount" : 100,
                "zanByMe":1,
                "commentContent" : "N次 泰国 自由行，再加 泰国 待了一年，所以 泰国 基本逛遍了～ 不管去哪，我一般都会选择自由行，因为时间自由，不需要体验到此一游的游客体验，想去哪里自己决定 And我的行程里一般没有景...",
                "subMessages" : [{
                    "msgId":20001,
                    "msgType":1,
                    "msgContent":"泰国 自由行，再加 泰国 待了一年，所以 ",
                    "msgAuthorId":12345678901,
                    "parentId":20000,
                    "msgAuthorName":"我的一个人1",
                    "msgAuthorImg":"./upload/25479170020671271_01.png",
                    "read":0,
                    "tm":"04-12 15:13"
                },{
                    "msgId":20002,
                    "msgType":1,
                    "msgContent":"泰国 自由行，再加 泰国 待了一年，所以 ",
                    "msgAuthorId":12345678901,
                    "parentId":20000,
                    "msgAuthorName":"我的一个人1",
                    "msgAuthorImg":"./upload/25479170020671271_01.png",
                    "read":0,
                    "tm":"04-12 15:13"
               }]
            },{
                "commentId" : 30000,
                "commentType" : 2,
                "parentId" : 100,
                "commentAuthorId" : "12345678903",
                "commentAuthorName" : "我是第三个人",
                "commentAuthorImg" : "./upload/25479170020671271_01.png",
                "tm" : "04-12 15:13",
                "zanCount" : 110,
                "caiCount" : 44,
                "subMsgCount" : 100,
                "zanByMe":1,
                "commentContent" : "N次 泰国 自由行，再加 泰国 待了一年，所以 泰国 基本逛遍了～ 不管去哪，我一般都会选择自由行，因为时间自由，不需要体验到此一游的游客体验，想去哪里自己决定 And我的行程里一般没有景...",
                "subMessages" : [{
                    "msgId":30001,
                    "msgType":1,
                    "msgContent":"泰国 自由行，再加 泰国 待了一年，所以 ",
                    "msgAuthorId":12345678901,
                    "parentId":30000,
                    "msgAuthorName":"我的一个人1",
                    "msgAuthorImg":"./upload/25479170020671271_01.png",
                    "read":0,
                    "tm":"04-12 15:13"
                },{
                    "msgId":30002,
                    "msgType":1,
                    "msgContent":"泰国 自由行，再加 泰国 待了一年，所以 ",
                    "msgAuthorId":12345678901,
                    "parentId":30000,
                    "msgAuthorName":"我的一个人1",
                    "msgAuthorImg":"./upload/25479170020671271_01.png",
                    "read":0,
                    "tm":"04-12 15:13"
               }]            
            }]
        }
    }';
}else if($page=='2'){
    $a = '{
        "error" : 0,
        "msg" : "成功",
        "page" : 2,
        "totalPage": 2,
        "data" : {
            "totalCount" : 2000,
            "comments" : [{
                "commentId" : 10000,
                "commentType" : 2,
                "parentId" : 100,
                "commentAuthorId" : "1234567890",
                "commentAuthorName" : "我是第一个人2222",
                "commentAuthorImg" : "./upload/25479170020671271_01.png",
                "tm" : "04-12 15:13",
                "zanCount" : 100,
                "caiCount" : 44,
                "subMsgCount" : 100,
                "zanByMe":0,
                "commentContent" : "N次 泰国 自由行，再加 泰国 待了一年，所以 泰国 基本逛遍了～ 不管去哪，我一般都会选择自由行，因为时间自由，不需要体验到此一游的游客体验，想去哪里自己决定 And我的行程里一般没有景...",
                "subMessages" : [{
                    "msgId":10001,
                    "msgType":1,
                    "msgContent":"泰国 自由行，再加 泰国 待了一年，所以 ",
                    "msgAuthorId":12345678901,
                    "parentId":10000,
                    "msgAuthorName":"我的一个人1",
                    "msgAuthorImg":"./upload/25479170020671271_01.png",
                    "read":0,
                    "tm":"04-12 15:13"
                },{
                    "msgId":10002,
                    "msgType":1,
                    "msgContent":"泰国 自由行，再加 泰国 待了一年，所以 ",
                    "msgAuthorId":12345678901,
                    "parentId":10000,
                    "msgAuthorName":"我的一个人1",
                    "msgAuthorImg":"./upload/25479170020671271_01.png",
                    "read":0,
                    "tm":"04-12 15:13"
               }]
            },{
                "commentId" : 20000,
                "commentType" : 2,
                "parentId" : 100,
                "commentAuthorId" : "12345678902",
                "commentAuthorName" : "我是第二个人dddddd",
                "commentAuthorImg" : "./upload/25479170020671271_01.png",
                "tm" : "04-12 15:13",
                "zanCount" : 110,
                "caiCount" : 44,
                "subMsgCount" : 100,
                "zanByMe":1,
                "commentContent" : "N次 泰国 自由行，再加 泰国 待了一年，所以 泰国 基本逛遍了～ 不管去哪，我一般都会选择自由行，因为时间自由，不需要体验到此一游的游客体验，想去哪里自己决定 And我的行程里一般没有景...",
                "subMessages" : [{
                    "msgId":20001,
                    "msgType":1,
                    "msgContent":"泰国 自由行，再加 泰国 待了一年，所以 ",
                    "msgAuthorId":12345678901,
                    "parentId":20000,
                    "msgAuthorName":"我的一个人1",
                    "msgAuthorImg":"./upload/25479170020671271_01.png",
                    "read":0,
                    "tm":"04-12 15:13"
                },{
                    "msgId":20002,
                    "msgType":1,
                    "msgContent":"泰国 自由行，再加 泰国 待了一年，所以 ",
                    "msgAuthorId":12345678901,
                    "parentId":20000,
                    "msgAuthorName":"我的一个人1",
                    "msgAuthorImg":"./upload/25479170020671271_01.png",
                    "read":0,
                    "tm":"04-12 15:13"
               }]
            },{
                "commentId" : 30000,
                "commentType" : 2,
                "parentId" : 100,
                "commentAuthorId" : "12345678903",
                "commentAuthorName" : "我是第三个人",
                "commentAuthorImg" : "./upload/25479170020671271_01.png",
                "tm" : "04-12 15:13",
                "zanCount" : 110,
                "caiCount" : 44,
                "subMsgCount" : 100,
                "zanByMe":1,
                "commentContent" : "N次 泰国 自由行，再加 泰国 待了一年，所以 泰国 基本逛遍了～ 不管去哪，我一般都会选择自由行，因为时间自由，不需要体验到此一游的游客体验，想去哪里自己决定 And我的行程里一般没有景...",
                "subMessages" : [{
                    "msgId":30001,
                    "msgType":1,
                    "msgContent":"泰国 自由行，再加 泰国 待了一年，所以 ",
                    "msgAuthorId":12345678901,
                    "parentId":30000,
                    "msgAuthorName":"我的一个人1",
                    "msgAuthorImg":"./upload/25479170020671271_01.png",
                    "read":0,
                    "tm":"04-12 15:13"
                },{
                    "msgId":30002,
                    "msgType":1,
                    "msgContent":"泰国 自由行，再加 泰国 待了一年，所以 ",
                    "msgAuthorId":12345678901,
                    "parentId":30000,
                    "msgAuthorName":"我的一个人1",
                    "msgAuthorImg":"./upload/25479170020671271_01.png",
                    "read":0,
                    "tm":"04-12 15:13"
               }]            
            }]
        }
    }';
}


echo json_decode(json_encode($a));
?>