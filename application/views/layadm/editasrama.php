<?php
//
echo"
<form method='post' action='".base_url()."index.php/mda/editingasrama'>
<table class='table table-bordered'>
<tr>
<td width='20%'>Nama Asrama</td>
<td><input type='text' name='nama_asrama' value='$nama_asrama' class='form-control'></td>
</tr>

<tr>
<td>Gedung</td>
<td><input type='text' name='gedung' value='$gedung' class='form-control'>
<input type='hidden' name='id_asrama' value='$id_asrama' class='form-control'>
</td>
</tr>



</table>
";


?>