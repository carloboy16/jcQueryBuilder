<?php 
include_once('Config/config.php');
$db = new Library\Main();
$a = $db->fetchQuery($db->select('user', 'sample.desc as gg')
	                    ->rightJoin('sample',"sample.user_id = user.user_id")
	                    ->having('gg = ?','asdasdasdasdasdasdasd')
	                    );

 ?>