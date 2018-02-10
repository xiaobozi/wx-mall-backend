<?php
    include "TopSdk.php";
    include "./top/request/TbkItemGetRequest.php";
    date_default_timezone_set('Asia/Shanghai');

    $c = new TopClient;
    $c->appkey = "24799456";
    $c->secretKey = "e952387d2329198293dd59d37afff45c";
    $c->format = 'json';
    $req = new TbkItemGetRequest;
    $req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick");
    $req->setQ("女装");
//    $req->setCat("16,18");
//    $req->setItemloc("杭州");
    $req->setSort("total_sales,降序");
//    $req->setIsTmall("false");
//    $req->setIsOverseas("false");
//    $req->setStartPrice("10");
//    $req->setEndPrice("10");
//    $req->setStartTkRate("1000");
    $req->setEndTkRate("1500");
//    $req->setPlatform("1");
    $req->setPageNo("1");
    $req->setPageSize("10");
    $resp = $c->execute($req);
    echo json_encode($resp);
?>