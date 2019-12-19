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
		/*if(!isset($_GET['page'])){
			$page = 1;
		} else {
			$page = $_GET['page'];
		}

		$max_results =2;

		$from=(($page*$max_results)-$max_results);*/

        $tmpl = array ('table_open' => '<table class="head" border="1" cellpadding="2" cellspacing="0">');
        $this->table->set_template($tmpl);
        //$data = $this->guest_model->viewGuest();
        $this->table->clear(); // to clear data of table before
        echo heading('View Guest Book',3); // h3
        echo br(2);
        $this->table->set_heading('ID', 'Name', 'Alamat', 'Detail', 'Delete');

        foreach ($query->result() as $item)
        {
            //$this->table->add_row($item['id'], $item['name'], $item['alamat'],anchor('index.php/guest/edit/'.$item['id'],'detail'),anchor('index.php/guest/delete/'.$item['id'],'delete'));
        }

        echo $this->table->generate();
		$this->pagination->create_links();

	/*$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM coba"),0);
	$max=mysql_result(mysql_query("SELECT MAX(id) FROM coba"),0);
	$total_pages = ceil($total_results / $max_results);

	echo "<center>[Page]<br>";


	if($page > 1){
		$prev = ($page - 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."/page/$prev\">&lt;&lt;Prev</a> ";
	}

	for($i = 1; $i <= $total_pages; $i++){
		if(($page) == $i){
			echo "$i ";
			} else {
				//echo "<a href=\"".$_SERVER['PHP_SELF']."/page/$i\">$i</a> ";
				//redirect(base_url().'index.php/Guest/view/page/', 'refresh');
				echo "<a href=\"".base_url()."index.php/Guest/view/page/$i\">$i</a> ";
		}
	}


	if($page < $total_pages){
		$next = ($page + 1);
		echo "<a href=\"".$_SERVER['PHP_SELF']."/page/$next\">Next>></a>";

		} echo"
			<br>
		<br>Terdapat $total_results Pasien
		<br>";*/

?>

</body>
</html>