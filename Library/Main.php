<?php 
namespace Library;
class Main  extends DB
{
	function __construct()
	{
		parent::__construct();
		// var_dump();
		/*$param = '1';
		$q = $this->fetchQuery($this->select('user','user.email')
			                         ->where('user_id = ?',$param)
			                         ->where('name = ?','asda')
			                     	 ->where('username = ?','asdasd'));
		// var_dump($this);
		var_dump($q);*/
	}
}
 ?>