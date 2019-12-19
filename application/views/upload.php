<?php
//echo $error;
echo form_open_multipart('index.php/guest/uploadb');

echo "
<input type='file' size='30' name='file'>
<input type='submit' value='UPLOAD'>
";
echo form_close();
?>