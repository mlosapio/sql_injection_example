<?php
//var_dump(get_magic_quotes_gpc());
//http://www.satya-weblog.com/2010/11/php-and-mysql-sql-injection-example.html
mysql_connect('localhost', 'L1ttleJ0hnny', '') or die('DB Conn error');
mysql_select_db('J0hnnyDr0pTables');
echo $query = "select * from user where user =  '$_POST[user]' AND password = '$_POST[pass]'";
echo '<br>';
$res = mysql_query($query) ;
if ($res AND mysql_num_rows($res) != 0) {
	while($row = mysql_fetch_assoc($res)) {
		print_r($row);
		echo $row['Ename'] . '<br>' ;
	}
}
else if (!$res) {
	echo 'Error in query' . mysql_error();
}
else if (mysql_num_rows($res) == 0)  {
	echo 'No match.';
}
?>
<form method=post action="">
User: <input type=text name="user">
<br />
Password: <input type=text name="pass">
<input type="submit" name="sbumit1">
</form>
