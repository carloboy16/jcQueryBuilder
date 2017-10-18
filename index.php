<?php 
include_once('Config/config.php');
$db = new Library\DB();
$a = $db->fetchQuery($db->select('user', 'user.user_id as id')
	                    ->where('user_id = ?','1')
	                   );

	$x = $db->delete('user')
	         ->where('user_id = ?','2')
	         ->where('username = ?','carlo')
	         ->run();

var_dump($x);	


?>