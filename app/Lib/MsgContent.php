<?php


namespace App\Lib;
class MsgContent{
	
	public $name,$phone,$email,$message;
	function __construct($name,$phone,$email,$message) {
		$this->name=$name;
		$this->phone=$phone;
		$this->email=$email;
		$this->message=$message;

		
	}
	
	
	
}


