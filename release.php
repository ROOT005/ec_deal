<?php  
$con = mysql_connect("127.0.0.1","root","special005");

if($con){
    mysql_select_db("ec_deal", $con);
    //查询积分释放比例
    $sql='SELECT value FROM yang_config where `key`="release_rate"';
    $release_rate = mysql_query($sql);
    $rate = (float)mysql_fetch_array($release_rate)[0]/100;
    //查询yang_score_user并释放积分
    $sql='SELECT * FROM yang_score_user where end_score <> 0';
    $result=mysql_query($sql);

    while($row = mysql_fetch_array($result)){
        $del_sc=$row['source_score']*$rate;
        #修改剩余平台积分
        $sql='UPDATE yang_score_user set end_score=if(end_score-'.$del_sc.'>=0,end_score-'.$del_sc.',0) where id='.$row['id'];
        mysql_query($sql);
        
        #释放后的积分
        $sql='UPDATE yang_currency_user set num=num+'.$del_sc.' where currency_id=1 and member_id='.$row['member_id'];
        mysql_query($sql);
    }
}else{
    die;
}
mysql_close($con);

?>