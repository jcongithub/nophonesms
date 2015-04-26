<?php
	ini_set('display_errors', 1);
	ini_set('html_errors', false);
	error_reporting(E_ALL);

	require 'rb.phar';

	final class FreeSMS{
		const TABLE_NAME = "sms";
	
		public static function instance(){
			static $inst = null;
			if($inst == null){
				$inst = new FreeSMS();
			}
			return $inst;
		}

		private function __construct(){
			R::setup('mysql:host=localhost;dbname=thrzerze_iplocation', 'thrzerze', '1YelloW-2');
			R::dispense(self::TABLE_NAME);
		}

		public function findSMS1($time){
			return self::convert(R::findAll(self::TABLE_NAME, 'time > :time', [':time' => $time]));

		}
	
		public function findSMS22($number, $time){
			return self::convert(R::findAll(self::TABLE_NAME, ' to = :to and time > :time ORDER BY time DESC', [':to' => $number, ':time' => $time]));
		}

		public function saveSMS($from, $to, $type, $content, $time){
			$sms = R::dispense(self::TABLE_NAME);
			$sms->from = $from;
			$sms->to = $to;
			$sms->type = $type;
			$sms->content = $content;
			$sms->time = $time;
			
			R::store($sms);
		}
		
		public function getNumbers(){
			$numbers = [];
			$numbers['Australia'] = '212-333-444';
			$numbers['Austria'] = '212-333-444';
			$numbers['Belgium'] = '212-333-444';
			$numbers['Canada'] = '212-333-444';
			$numbers['Costa Rica'] = '212-333-444';
			$numbers['Chile'] = '212-333-444';
			$numbers['Czech Republic'] = '212-333-444';
			$numbers['Denmark'] = '212-333-444';
			return $numbers;
		}
		
		private function convert($result){
		        $smsArray = [];
        		foreach($result as $row){
                		$sms = [];
                		$sms['id'] = $row['id'];
                		$sms['from'] = $row['from'];
                		$sms['to'] = $row['to'];
                		$sms['content'] = $row['content'];
                		$sms['time'] = $row['time'];

                		array_push($smsArray, $sms);
        		}
			return $smsArray;
		}
	}
	
	$freesms = FreeSMS::instance();
	#$result = $freesms->findSMS1('2015-01-01');
	#var_dump($smsArray);
	#$smsArray = [];
	#foreach($result as $row){
	#	$sms = [];
	#	$sms['id'] = $row['id'];
	#	$sms['from'] = $row['from'];
	#	$sms['to'] = $row['to'];
	#	$sms['content'] = $row['content'];
	#	$sms['time'] = $row['time'];
	#	
	#	array_push($smsArray, $sms);	
	#}
	#echo json_encode($smsArray);
?>

