<?php 
session_start();
include("config-pdo.php");

$uniqid = uniqid('R');
$providerid = tvalidator("PURIFY", $_POST['providerid'] );
$roomid = tvalidator("PURIFY", $_POST['roomid'] );
$result = pdo_query("1",
        "insert into shares (providerid, sharetype, shareid, sharelocal, sharetitle, 
            shareopentitle,
            shareto, sharedate, shareexpire, securetype, platform, views, likes, 
            setid, proxyfilename,
            collection, roomid ) values (
            $providerid, 'R', '$uniqid', '', '','','Facebook',now(), now(), 
            'C','Facebook',0,0,'','','', $roomid
            )"
        );

