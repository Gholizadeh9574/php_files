<?php

$ndate = getdate();
$nday=$ndate['mday'];
$nmon=$ndate['mon'];
$nyear=$ndate['year'];

if (isset($_GET['day']) && isset($_GET['mon']) && isset($_GET['year'])) {
    $bday=$_GET['day'];
    $bmon=$_GET['mon'];
    $byear=$_GET['year'];
    if ($bday<32 && $bday>0 && $bmon<13 && $bmon>0 && $byear<($nyear+1) && $byear>0 ) {
        $ayear=$nyear-$byear;
        if ($nmon>=$bmon){
            $amon=$nmon-$bmon;
            if ($nday==$bday) {
                $aday=0;
            }elseif ($nday>$bday) {
                $aday=$nday-$bday;
            }else {
                $ayear=$ayear-1;
                $amon=11-$amon;
                $aday=30-($bday-$nday);
            }
        }else {
            $ayear=$ayear-1;
            $amon=12-($bmon-$nmon);
            if ($nday==$bday) {
                $aday=0;
            }elseif ($nday>$bday) {
                $aday=$nday-$bday;
            }else {
                $aday=30-($bday-$nday);
            }
        }
        $finalArr['ok']=true;
        $finalArr['msg']="Everything all right.";
        
        $finalArr=$finalArr+["aday"=>$aday,"amon"=>$amon,"ayear"=>$ayear];
    }
    else {
        $finalArr['ok']=false;
        $finalArr['msg']="Mistake in input value.";
    }
}
else {
    $finalArr['ok']=false;
    $finalArr['msg']="No input value.";
}
echo json_encode($finalArr);

?>