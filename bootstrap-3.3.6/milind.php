<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'test');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
//$con=mysql_connect("localhost","root","") or die("cannot connect");
//$db=mysql_select_db("test",$con);

if(isset($_POST['submit'])){
    
   
	  $sql = mysql_query("SELECT * FROM demo1");
	 

	    echo " <table width=1000 height=400 border=1>
   <tr>
<th align=center>SR NO</th>
<th align=center>DESCRIPTION</th>
<th align=center>A+</th>
<th align=center>B+</th>
<th align=center>A</th>
<th align=center>B</th>
<th align=center>O</th>
<th align=center>O+</th>
<th align=center>AB</th>
</tr>";
		
		while($record = mysql_fetch_array($sql)){
echo "<tr>";
echo "<td align=center>" . $record['sr no'] . "</td>";
echo "<td align=center>" . $record['description'] . "</td>";
echo "<td align=center>" . $record['A+'] . "</td>";
echo "<td align=center>" . $record['B+'] . "</td>";
echo "<td align=center>" . $record['A'] . "</td>";
echo "<td align=center>" . $record['B'] . "</td>";
echo "<td align=center>" . $record['O'] . "</td>";
echo "<td align=center>" . $record['O+'] . "</td>";
echo "<td align=center>" . $record['AB'] . "</td>";
echo "</tr>";
}

echo "</table>";
		
}
?>