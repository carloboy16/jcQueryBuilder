<?php 
include_once('Config/config.php');
$db = new Library\Main();
// $a = $db->fetchQuery($db->select('user', 'user.username as gg'));
$a = $db->insert('user',array(
			'username'=>'carlo',
			'password'=>'12345',
		    'email'=>'carloboy16@gmail.com'));
var_dump($a);
?>