<?php
	require 'rb.phar';
	
	final class SMS{
		private $from;
		private $to;
		private $content;
		private $time;
		
		public function __construct($from, $to, $time, $content){
			$this->from = $from;
			$this->to = $to;
			$this->time = $time;
			$this->content = $content;
		}
		public function getFrom(){
			return $this->from;
		}
		public function getTo(){
			return $this->to;
		}
		public function getTime(){
			return $this->time;
		}
		public function getContent(){
			return $this->content;
		}
	}
	
	final class Number{
		public $country;
		public $number;
		public function __construct($number, $country){
			$this->country = $country;
			$this->number = $number;
		}
		public $smsCount;
	}
	
	final class NoPhoneSMS{
		const TABLE_NAME = "sms";
		public function __construct(){
                        R::setup('mysql:host=localhost;dbname=thrzerze_iplocation', 'thrzerze', '1YelloW-2');
                        R::dispense(self::TABLE_NAME);
                }

		public function getCurrentNumbers(){
			$numbers = [new Number('2123334444', 'US'), 
						new Number('5162344567', 'Poland'), 
						new Number('6315678899', 'China'),
						new Number('9178889999', 'Canada'),
						new Number('4566668888', 'Japan')]; 
			return $numbers;
		}

		public function getLastMessages($number, $count){
			$result = R::findAll(self::TABLE_NAME, 'order by time desc', []);

			$smsArray = [];
                        foreach($result as $row){
                                $sms = new SMS($row['from'], $row['to'], $row['time'], $row['content']);
                                array_push($smsArray, $sms);
                        }
                        return $smsArray;
		}
		
		public function getNumbersForSell(){
			$numbers = [new Number('2123334444', 'US'),
					new Number('5162344567', 'Poland'),
					new Number('6315678899', 'China'),
					new Number('9178889999', 'Canada'),
					new Number('4566668888', 'Japan')];
			return $numbers;
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
		
		
		
		public function getHomeURL(){
			//return "http://".$_SERVER['HTTP_HOST'];
			return "http://www.3000freegames.com/nophonesms";
		}
	
	}
	
	
	$nophonesms = new NoPhoneSMS();
?>
