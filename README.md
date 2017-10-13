# jcQueryBuilder
<h1>Hot to use?</h1><br>
Configure the /Config/config.php
<br>
<h1>Hot to Query?</h1><br>
$Q  = new \Library\DB();
$result = $Q->fetchQuery($Q->select('table','table.column')->where('column= ?','1'))
<br>




