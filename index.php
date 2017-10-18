<?php 
include_once('Config/config.php');
$db = new Library\DB();
$a = $db->fetchQuery($db->select('user', 'user.user_id as id')
	                    ->where('user_id = ?','1')
	                   );
$x = $db->update('user')
        ->set('username = ?','carloboy16')
        ->set('password = ?',"xx")
        ->where('user_id = ?','3')
        ->where('email = ?','carloboy16@gmail.com')
        ->run();

var_dump($x);	


?>