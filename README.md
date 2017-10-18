# jcQueryBuilder
<h1>Hot to use?</h1><br>
Configure the /Config/config.php
<br>
<h1>How to Query?</h1><br>
<h2>Selecting Data</h2>
$q  = new \Library\DB();<br>
Selecting data:
$result = $q->fetchQuery($Q->select('table','table.column')->where('column= ?','1'));
<br>
<br>
<h2>Inserting Data</h2>
$q->insert('table',array(<br>
 'column_name'=>'value',<br>
 'column_name'=>'value'
));
<div>
<h2>Deleting Data</h2>
$q->delete('table') <br>
  ->where('column = ?','1') <br>
  ->run();
  <br>
  it will return true of false;

	
</div>
<div>
	<h2>Updating Data</h2>
$q = $db->update('table') <br>
        ->set('username = ?','carloboy16') <br>
        ->set('password = ?',"xx") <br>
        ->where('user_id = ?','3') <br>
        ->where('email = ?','gg@mail.com') <br>
        ->run();
</div>
<br>




