<?php 
include_once('Config/config.php');
$db = new Library\DB();
$a = $db->fetchQuery($db->select('user', 'user.user_id as iasdd')
	                    ->where('username LIKE ?','%car%')
	                   );


var_dump($a);	


?>