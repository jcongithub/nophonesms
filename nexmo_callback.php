<?php
	require('freesms.php');
	require('logger.php');

	if(!$_GET){
		echo 'you can only call me from http';
		exit;
	}
	else{
		$logger->info("Query String:".$_SERVER['QUERY_STRING']);
		$logger->info("Jsonized parameters:".json_encode($_GET));

		$from = $_GET['msisdn'];
		$to   = $_GET['to'];
		$messageId = $_GET['messageId'];
		$type = $_GET['type'];
		$time = $_GET['message-timestamp'];
		$content = "";

		if($type == "text"){
			$content = $_GET['text'];
		}
		else{
			//TODO for non-text message, we do need to do?
			$logger->info("Message type:".$type." is not supported yet");
		}

		$freesms->saveSMS($from, $to, $type, $content, date('Y-m-d H:i:s'));
		http_response_code(200);
	}
?>

