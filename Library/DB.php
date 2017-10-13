<?php 
namespace Library;
class DB 
{
	protected $_connection;
	protected $_query = '';
	protected $_param = array();
	function __construct()
	{	
		global $DB_C;
		// var_dump($DB_C);
		$this->_connection =new \mysqli($DB_C['HOST'],$DB_C['USER'],$DB_C['PASSWORD'],$DB_C['DB']);
	}
	public function select($table,$option = ""){
		$option = $option== null ||$option=="" ? "*":$option;
		if($table==null){
			return false;
		}
		 $this->_query = "SELECT {$option} FROM {$table}";
		 return $this;
	}
	function where($option,$param){
		if( !is_array($param)){
			 array_push($this->_param,$param);
		}
		 if(strpos($this->_query,'WHERE')){
		 	$this->_query.= " AND {$option} ";
		 }else{
		 	 $this->_query.= " WHERE {$option} ";
		 }
		
		 return $this;
	}
	function whereOR($option,$param){
		if( !is_array($param)){
			 array_push($this->_param,$param);
		}
		 if(strpos($this->_query,'WHERE')){
		 	$this->_query.= " OR {$option} ";
		 }
		
		 return $this;
	}
	public function order($option){
		 $this->_query.= " Order by {$option} ";
		return $this;
	}
	public function leftJoin($table,$option){
		$this->_query.=" LEFT JOIN {$table} ON {$option}";
		
		return $this;
	}
	public function innerJoin($table,$option){
		$this->_query.=" INNER JOIN {$table} ON {$option}";
		
		return $this;
	}
	public function rightJoin($table,$option){
		$this->_query.=" RIGHT JOIN {$table} ON {$option}";
		
		return $this;
	}
	public function having($option,$param){
		if( !is_array($param)){
			 array_push($this->_param,$param);
		}
	   if(strpos($this->_query,'HAVING')){
		 	$this->_query.= " AND {$option} ";
		 }else{
		 	 $this->_query.= " HAVING {$option} ";
		 }
		 return $this;

		 
	}
	public function fetchQuery($q){
			$q = $q->_query	;

			$type=array();
			$wherebind = "";
			$st = $this->_connection->prepare($q);
			// var_dump($this->_param);
			if($this->_param != null || count($this->_param) != 0){
			foreach ($this->_param as $par) {
			 $type[]=$this->GetType(gettype($par));
			}
			$input = array();
			$input[] = &implode($type);
			
			for($i=0;$i<count($this->_param);$i++) {
			$input[]= &$this->_param[$i] ;
			}
			
			call_user_func_array(array($st,'bind_param'),$input);

				
			}
			;
			$st->execute();
			$res = $st->get_result();
			$d = array();
			while($i = $res->fetch_assoc()){
				$d[] = $i;
			}
			$this->_query = '';
			$this->_param = array();
			return json_decode(json_encode($d));

	}
	Private function GetType($Item)
	{
    switch (gettype($Item)) {
        case 'NULL':
        case 'string':
            return 's';
            break;

        case 'integer':
            return 'i';
            break;

        case 'blob':
            return 'b';
            break;

        case 'double':
            return 'd';
            break;
    }
    return '';
	}

}
 ?>