<html>
</head>
</head>

<body>
Welcome
<?php
$this->load->library('session');
echo $this->session->userdata('username');
?>
</body>
</html>