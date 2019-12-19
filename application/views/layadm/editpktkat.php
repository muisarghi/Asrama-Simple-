<?php
//
echo"
<form method='post' action='".base_url()."index.php/mda/editingpktkat'>
<table class='table table-bordered'>
<tr>
<td width='20%'>Kode Kategori</td>
<td><input type='text' name='kode_pktkat' value='$kode_pktkat' class='form-control'></td>
</tr>

<tr>
<td>Gedung</td>
<td><input type='text' name='nama_pktkat' value='$nama_pktkat' class='form-control'>
<input type='hidden' name='id_pktkat' value='$id_pktkat' class='form-control'>
</td>
</tr>



</table>
";


?>