<?php
// test.php for test in /home/kim_etna/FDI-DPHP/testTwitter
// 
// Made by POBA VANZI Kimberley
// Login   <pobava_k@etna-alternance.net>
// 
// Started on  Wed Nov 25 16:35:50 2015 POBA VANZI Kimberley
// Last update Wed Nov 25 17:12:32 2015 POBA VANZI Kimberley
//

require_once("ctwitter_stream.php");
echo "AAA\n";
$t = new ctwitter_stream();

$t->login('kw7uTjsFrnmkJDQL5ha7oxZLR', 'lfBQSMXd6si5nb4TegCBMe1VLZCbpoOq1O90fANtP0IilMnv9T', '1665500222-tGoJnmY7Ue2JSQnM3CM6fllaZAtP92lYxOx3SkH', 'MltZcOoX9IqKQKOVxxNLsxzgEAfETttvLvSz6kY7MdiET');

$t->start(array(' ETNA ', ' alternance '));