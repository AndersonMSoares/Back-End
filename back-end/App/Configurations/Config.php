<?php
	
	namespace App\Configurations;
	class Config{
		
		public static $config_json = "./Config.json";
		
		public static $config;
		
		public static function start(){
			Config::$config = json_decode(file_get_contents(__DIR__ . "/" . Config::$config_json), true)['config'];
		}
	}
	Config::start();
?>