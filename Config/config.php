<?php 

$DB_C = array('HOST' => 'localhost',
			'USER' => 'root',
			'PASSWORD'=>'cdefgabc',
			'DB'=>'worship'
			 );



function __autoload($class)
{
	if(!is_array($class)){
		$class = array($class);
	}
	foreach ($class as $c) {
		$path = "{$c}.php";
		if(file_exists($path)){
			include_once($path);
		}
	}
}

 ?>