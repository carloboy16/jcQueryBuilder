<?php 
include_once('Config/config.php');
$db = new Library\DB();
$a = $db->fetchQuery($db->select('user', 'sample.desc as gg')
	                    ->leftJoin('sample',"sample.user_id = user.user_id")
	                    ->having('gg = ?','asdasdasdasdasdasdasd')
	                    );
var_dump($a);
 ?>