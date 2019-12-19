<?php
$this->db->select('*');
	$this->db->from('coba');
	$getData = $this->db->get('');
	$a = $getData->num_rows();
	$config['base_url'] = base_url().'index.php/guest/percobaan/'; //set the base url for pagination
	$config['total_rows'] = $a; //total rows
	$config['per_page'] = '2'; //the number of per page for pagination
	$config['uri_segment'] = 3; //see from base_url. 3 for this case
	$config['full_tag_open'] = '<p>';
	$config['full_tag_close'] = '</p>';
	$this->pagination->initialize($config); //initialize pagination
	$data['title'] = 'Guest Book';
	$data['detail'] = $this->guest_model->cobamodel($config['per_page'],$this->uri->segment(3));
	
?>
<h4>Book Data</h4>
<?php if(count($detail) > 0) { ?>
<table border="1">
<tr>
<th>ID</th>
<th>Nama</th>
<th>Alamat</th>
</tr>
<?php
foreach($detail as $rows) {
echo "<tr>";
echo "
<td>". $rows['id']."</td>
<td>". $rows['name'] ."</td>
<td>". $rows['alamat'] ."</td>
"; } ?>
</table>
<?php } ?>
<div> <?php echo $this->pagination->create_links(); ?> </div>

