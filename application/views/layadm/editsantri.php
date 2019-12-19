<?php
//
echo"
<form method='post' action='".base_url()."index.php/mda/editingsantri'>
<table class='table table-bordered'>
<tr>
<td width='20%'>NIM</td>
<td><input type='text' name='nim' value='$nim' class='form-control'></td>
</tr>


<tr>
<td >Nama</td>
<td><input type='text' name='nama' value='$nama' class='form-control'></td>
</tr>

<tr>
<td >Tanggal Lahir</td>
<td><input type='text' name='tgllahir' value='$tgllahir' class='form-control'></td>
</tr>

<tr>
<td >Jenis Kelamin</td>
<td><select name='jk' class='form-control'>
<option value='Laki-laki' ";
if($jk=='Laki-laki') {echo"selected";} else {echo"";} 
echo">Laki-laki</option>

<option value='Perempuan' ";
if($jk=='Perempuan') {echo"selected";} else {echo"";}
echo">Perempuan</option>
</select>
</td>
</tr>

<tr>
<td >Alamat</td>
<td><input type='text' name='alamat' value='$alamat' class='form-control'></td>
</tr>

</table>
";


?>