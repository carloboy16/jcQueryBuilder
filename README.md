# jcQueryBuilder
<h1>Hot to use?</h1><br>
Configure the /Config/config.php
<br>
<h1>How to Query?</h1><br>
$q  = new \Library\DB();<br>
Selecting data:
$result = $q->fetchQuery($Q->select('table','table.column')->where('column= ?','1'));
<br>
$q->insert('table',array(<br>
 'column_name'=>'value',<br>
 'column_name'=>'value'
));
<div>
	
</div>
<br>




