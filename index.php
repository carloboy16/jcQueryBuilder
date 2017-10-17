<?php 
include_once('Config/config.php');
$db = new Library\DB();
/*$a = $db->fetchQuery($db->select('user', 'user.username as gg')
	                    ->where('user_id = ?','1')
	                    ->where('username = ?','asd'));*/
$a = $db->insert('user',array(
			'username'=>'carlo',
			'password'=>'1234512',
		    'email'=>'carloboy16@gmail.com'));
var_dump($a);
?>