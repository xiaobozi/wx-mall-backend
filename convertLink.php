<?php
    $url = $_GET["url"];
    $pic = $_GET["pic"];
    $title = $_GET["title"];

    include "TopSdk.php";
    date_default_timezone_set('Asia/Shanghai');

    $c = new TopClient;
    $c->appkey = "24799456";
    $c->secretKey = "e952387d2329198293dd59d37afff45c";
    $c->format = 'json';

    $req = new TbkTpwdCreateRequest;
    $req->setUserId("2241216956");
    $req->setText($title);
    $req->setUrl($url);
    $req->setLogo($pic);

    $resp = $c->execute($req);
    echo json_encode($resp);
?>