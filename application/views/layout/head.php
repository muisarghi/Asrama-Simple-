<?php


echo doctype('xhtml1-strict');

echo "<html xmlns='http://www.w3.org/1999/xhtml'>";

$meta = array(
        array('name' => 'description', 'content' => ''),
        array('name' => 'keywords', 'content' => ''),
        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv'));

echo meta($meta);
echo "<head>";

$link_css = array(
          'href' => base_url().'property/css/css.css',
          'rel' => 'stylesheet',
          'type' => 'text/css',
          'media' => 'screen'
);

echo link_tag($link_css);


$title = empty ($title) ? "Code Igniter" : $title;
echo "<title>{$title}</title>";
echo "</head>";
echo "<body>";
echo "<center>
<div class='main'>
	<div class='banner'>
		<div class='company'>
		Our Code Igniter
		</div>
		<div class='slogan'>
		This My First Code Igniter
		</div>
	</div>
	<div class='menu'>
	<ul id='topmenu'>
	";
	?>
			<li><a href="<?php echo base_url();?>index.php/Guest/index">Home</a></li>
            <li><a href="<?php echo base_url();?>index.php/Guest/profile">Profile</a></li>
            <li><a href="<?php echo base_url();?>index.php/Guest/form">Guestbook</a></li>
            <li><a href="<?php echo base_url();?>index.php/Guest/view">View</a></li>
            <li><a href="<?php echo base_url();?>index.php/Guest/upload">Upload</a></li>
			<li><a href="<?php echo base_url();?>index.php/Guest/content">Content</a></li>
			<li><a href="<?php echo base_url();?>index.php/Guest/lib">Lib</a></li>
			<li><a href="<?php echo base_url();?>index.php/Guest/login">Login</a></li>
      <?php echo"
		</ul>
	</div>


	<div class='botmenu'>
	</div>

	<div class='content'>
		<div class='rightcolumn'>

";

?>




