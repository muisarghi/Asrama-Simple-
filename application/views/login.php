<?php
$this->load->helper('html');
$this->load->helper('url');
$this->load->helper('form');
echo doctype('html4-strict');

echo"<html> <body>";

$act_form='index.php/guest/pro_login';


echo form_open($act_form);

echo"

<table width='80%' border='0'>
<tr>
<td width='40'>". form_label('Username')."</td>
<td>: " . form_input('user', '', 'id=user') ."</td>
</tr>

<tr>
<td width='40'>". form_label('Password')."</td>
<td>: " . form_password('pass', '', 'id=pass') ."</td>
</tr>

<tr>
<td colspan='2'>".form_submit('mysubmit', 'SIMPAN')."</td>

</tr>

</table>
";

echo form_close();
?>
</body>
</html>


