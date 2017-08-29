<?php  
$con = mysql_connect("127.0.0.1","root","special005");

if($con){
    mysql_select_db("ec_deal", $con);
    //查询积分释放比例
    $sql='SELECT value FROM yang_config where `key`="release_rate"';
    $release_rate = mysql_query($sql);
    $rate = mysql_fetch_array($release_rate)[0];
    
    print_r($row);
}else{
    die;
}

mysql_close($con);

?>