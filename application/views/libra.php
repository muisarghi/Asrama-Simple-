<?php

//$this->mius->view();
//$data=$this->db->get('coba');
foreach($doto->result() as $dt)
{
echo "<a href='".base_url()."index.php/Guest/libdet/".$dt->id."'>".$dt->nama."</a>";	
echo "-";
echo $dt->alamat;
echo "<hr>";
}


?>