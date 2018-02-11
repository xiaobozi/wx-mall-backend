<?php
    $q = $_GET["q"];
    $page = $_GET["page"];

    include "TopSdk.php";
    date_default_timezone_set('Asia/Shanghai');

    $c = new TopClient;
    $c->appkey = "24799456";
    $c->secretKey = "e952387d2329198293dd59d37afff45c";
    $c->format = 'json';

    $req = new TbkDgItemCouponGetRequest;
    $req->setAdzoneId("242922082");
    $req->setPlatform("1");
//    $req->setCat("16,18");
    $req->setPageSize("20");
    $req->setQ($q);
    $req->setPageNo($page);

    $resp = $c->execute($req);
    echo json_encode($resp);
?>