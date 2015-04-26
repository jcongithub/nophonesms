<?php
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
	}
	
	final class NoPhoneSMS{
		public function getCurrentNumbers(){
			$numbers = [new Number('2123334444', 'US'), 
						new Number('5162344567', 'Poland'), 
						new Number('6315678899', 'China'),
						new Number('9178889999', 'Canada'),
						new Number('4566668888', 'Japan')]; 
			return $numbers;
		}
		public function getLastMessages($number, $count){
			$smsList = [];
			$i = 0;
			for($i=0; $i < $count; $i++){
				$smsList[$i] = new SMS("1234567890", $number, '2015-04-01 12:13:14', "this is a test");
			}
			return $smsList;
		}
		
		public function getNumbersForSell(){
			$numbers = [new Number('2123334444', 'US'),
					new Number('5162344567', 'Poland'),
					new Number('6315678899', 'China'),
					new Number('9178889999', 'Canada'),
					new Number('4566668888', 'Japan')];
			return $numbers;
		}

		
		
		public function getHomeURL(){
			return "http://".$_SERVER['HTTP_HOST'];
		}
	
	}
	
	
	$nophonesms = new NoPhoneSMS();
?>