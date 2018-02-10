<?php
    $url = $_GET["url"];

    include "TopSdk.php";
    date_default_timezone_set('Asia/Shanghai');

    $c = new TopClient;
    $c->appkey = "24799456";
    $c->secretKey = "e952387d2329198293dd59d37afff45c";
    $c->format = 'json';

    $req = new WirelessShareTpwdCreateRequest;
    $tpwd_param = new GenPwdIsvParamDto;
    $tpwd_param->ext="{\"xx\":\"xx\"}";
    $tpwd_param->logo="http://m.taobao.com/xxx.jpg";
    $tpwd_param->url=$url;
    $tpwd_param->text="淘货er超值活动，惊喜活动多多";
    $tpwd_param->user_id="2241216956";
    $req->setTpwdParam(json_encode($tpwd_param));

    $resp = $c->execute($req);
    echo json_encode($resp);
?>