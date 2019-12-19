<?php
session_start();
include('../../inc/inc.php');	
include('../../inc/se.php');
@ini_set('display_errors', 'off');
?>
<html>
<head>
<title>Highcharts Tutorial</title>
<script src="js/213min.js"></script>
<script src="js/higcart.js"></script>  
</head>
<body>
<!-- 
CATEGORIES - TANGGAL
NAME - DENOM
VALUE - RP
-->
<div id="container" style="width: 480px; height: 280px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
      type: 'line'
   };
   var title = {
      text: 'JUMLAH RPL'   
   };   
   var xAxis = 
		
   {
      categories: 
		[
		
		<?php
		//1,2,3,4,5,6,7,8,9  
		
		for($j=9; $j>0; $j--)
			{
			$lalu[$j]=mktime(0, 0, 0, date("m")  , date("d")-$j, date("Y"));
			$tgls[$j]=date('Y-m-d', $lalu[$j]);
			?>
			'<?php echo $tgls[$j]; ?>',
			<?php
			}
			?>
		
			'Hari Ini' ]
		
		};
	
   var credits = {
      enabled: false
   };

   var series= [
			
			{
			name: 'RPL',
            data: [
			<?php  
			/*
			0,0,0,0,0,0,0,0,0,0 */
			$jrpln=mysql_result(mysql_query("select count(*)from rpl_order, rpl_validate where rpl_order.id_order=rpl_validate.id_order and rpl_order.codeuker='$codeuker'"),0);
			for($k=9; $k>0; $k--)
			{
			$lalu[$k]=mktime(0, 0, 0, date("m")  , date("d")-$k, date("Y"));
			$tgls[$k]=date('Y-m-d', $lalu[$k]);
			$jrpl[$k]=mysql_result(mysql_query("select count(*)from backup_rpl_order, backup_rpl_validate where backup_rpl_order.id_order=backup_rpl_validate.id_order and backup_rpl_order.date='$tgls[$k]' and backup_rpl_order.codeuker='$codeuker'"),0);
			?>
			<?php echo $jrpl[$k]; 
			?>,
			<?php 
			}
			
			echo $jrpln; 
			?> 
			]
			}, 
					
		];  
	
   var json = {};
   json.chart = chart;
   json.title = title;
   json.xAxis = xAxis;
   json.credits = credits;
   json.series = series;
   $('#container').highcharts(json);
});

</script>
</body>

</html>

