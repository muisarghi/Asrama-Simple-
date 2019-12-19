<?php

/*foreach($doto->result_array() as $dt)

{
//if($dt->id==$id)
///	{
	echo "<a href='".base_url()."index.php/Guest/libdet/".$dt->id."'>".$dt->nama."</a>";	
	echo "-";
	echo $dt->alamat;
	echo "<hr>";
	//}
//else
//	{}
}
*/

echo "<a href='".base_url()."index.php/Guest/libdet/".$id."'>".$nama."</a>";	
	echo "-";
	echo $alamat;
	echo "<hr>
	<br>
	<a href='".base_url()."index.php/Guest/lib'>[kembali]</a>
	";
?>