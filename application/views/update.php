<?php

$this->load->helper('html');
$this->load->helper('url');
$this->load->helper('form');
echo doctype('html4-strict');

echo"<html> <body>";

$act_form='index.php/guest/update_guest';
//$hidden = array('idk' => $idk);
$attrForm = array('class' => 'input_form', 'id' => 'myform');

//echo form_open($act_form);



$data = array(
              'name'        => 'id',
              'id'          => 'id',
              'value'       => $id,
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:20%',
              'class'       => 'textbox'
            );

// data1
$data1 = array(
              'name'        => 'name',
              'id'          => 'name',
              'value'       => $name,
              'maxlength'   => '50',
              'size'        => '50',
              'style'       => 'width:50%',
              'class'       => 'textbox'
            );
// data 2
//
$data2 = array(
              'name'        => 'alamat',
              'id'          => 'alamat',
              'value'       => $alamat,
              'maxlength'   => '50',
              'size'        => '50',
              'style'       => 'width:50%',
              'class'       => 'textbox'
            );

echo form_open($act_form,$attrForm);
echo form_hidden('id',$id);
echo"

<table width='100%' border='0'>

<tr>
<td width='40'>". form_label('Name')."</td>
<td>: " . form_input($data1) ."</td>
</tr>

<tr>
<td width='40'>". form_label('Alamat')."</td>
<td>: " . form_input($data2) ."</td>
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