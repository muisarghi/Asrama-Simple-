 <?php
	$this->load->database();
	$this->load->helper('html');
	$this->load->helper('url');
	$this->load->helper('form');
	echo doctype('html4-strict');
?>

<html>
<body>
<?php
echo"
		<h2 align='center'>DATA</h2>
		<form method='post' action='".base_url()."index.php/test/proses'>
		Input Text :
		<input type='text' name='data' size='60'>

		<input type='submit' value='SIMPAN'>
		</form>
		<br>
		<table width='100%' border='1'>
		<tr>
		<td>ID</td>
		<td>NAME</td>
		<td>AGE</td>
		<td>CITY</td>
		</tr>";
		$a1=mysql_query("select * from tes order by id ASC");
		while($a=mysql_fetch_array($a1))
			{
			echo"
			<tr>
			<td>$a[id]</td>
			<td>$a[name]</td>
			<td>$a[age]</td>
			<td>$a[city]</td>
			</tr>
			";
			}
		echo"
		</table>
		";		
?>

</body>
</html>