<?php

$this->load->helper('html');
$this->load->helper('url');
$this->load->helper('form');
echo doctype('html4-strict');

echo"<html> <body>";

$act_form='index.php/guest/insert_guest';
//$attrForm = array('class' => 'input_form', 'id' => 'myform');

echo form_open_multipart($act_form);

echo"

<table width='80%' border='0'>
<tr>
<td width='40'>". form_label('Name')."</td>
<td>: " . form_input('name', '', 'id=name') ."</td>
</tr>

<tr>
<td width='40'>". form_label('Alamat')."</td>
<td>: " . form_input('alamat', '', 'id=alamat') ."</td>
</tr>

<tr>
<td width='40'>". form_label('Upload')."</td>
<td>: <input type='file' name='file'></td>
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