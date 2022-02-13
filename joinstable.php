<?php 
     //code here....
include "databaseclass.php";
$obj=new Database();
$coloumn="joins.cid,joins.cname,joins.email,joins2.productname";
$join='joins2 ON joins.cid=joins2.cid';

$obj->select('joins',$coloumn,$join,null,null,null);
echo "\n\n select result is";
$result=$obj->getresult();

foreach ($result as $result) {
    echo
    '
    <ol>
    <li>'.$result['cname'].'</li>
    <li>'.$result['email'].'</li>
    <li>'.$result['productname'].'</li>
    </ol>
    
    ';
}








?>