<?php
        require "freesms.php";
        if(!array_key_exists('time', $_GET)){
                echo 'Failed, no time defined';
        }
        else{
                $time = $_GET['time'];
                $smsArray = $freesms->findSMS1($time);
                $ret = [];
                $updateTime = new DateTime();
                $ret['timestamp'] = $updateTime->format('Y-m-d H:i:s');
                $ret['sms'] = $smsArray;
                echo json_encode($ret);
        }
?>