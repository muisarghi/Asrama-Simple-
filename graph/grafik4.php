<?php
include('inc.php');	
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
      text: 'TANGGAL LAHIR'   
   };   
   var xAxis = 
		
   {
      categories: 
		[
		
		<?php
		//1,2,3,4,5,6,7,8,9  
		$ax1=mysql_query("select * from sld where codeuker='$codeuker'");
			while($ax=mysql_fetch_array($ax1))
				{
				$nsaldoawala=$ax['saldoawala'];
				$nsaldoawalb=$ax['saldoawalb'];
				$nsaldoawalc=$ax['saldoawalc'];
				}
		
		$a1=mysql_query("select * from backup_sld where codeuker='$codeuker' order by idsld DESC limit 9");
		$no=1;
		while($a=mysql_fetch_array($a1))
			{
			$saldoawala[$no]=$a['saldoawala'];
			$saldoawalb[$no]=$a['saldoawalb'];
			$saldoawalc[$no]=$a['saldoawalc'];
			$tglsld[$no]=$a['tglsld'];
			$no++;
			/*
			$saldoawala[$no]=$a['saldoawala'];
			$saldoawalb[$no]=$a['saldoawalb'];
			$saldoawalc[$no]=$a['saldoawalc'];
			$tglsld[$no]=$a['tglsld'];
			$no++;
			*/

			/*
			$saldoawala[$no]=$a['saldoawala'];
			$saldoawalb[$no]=$a['saldoawalb'];
			$saldoawalc[$no]=$a['saldoawalc'];
			$tglsld[$no]=$a['tglsld'];
			$no++;
			*/
			}
		
		for($h=9; $h>0; $h--)
			{
			?>
			'<?php echo $tglsld[$h]; ?>',
			<?php 
			}
			?>
			'Hari Ini' ],
			
		units: [0, 20000000000, 40000000000, 60000000000, 80000000000, 100000000000]
		};

   var credits = {
      enabled: false
   };

   var series= [
			
			{
			name: '20.000',
            data: [
			<?php  
			/*
			0,0,0,0,0,0,0,0,0,0 */
			for($i=9; $i>0; $i--)
			{
			?>
			<?php echo $saldoawalc[$i]; 
			?>,
			<?php 
			}
			
			echo $nsaldoawalc; 
			?> 
			]
			}, 
			
			{
            name: '50.000',
			data: [
			<?php
			/*0,0,0,0,0,0,0,0,0,0 */
			for($j=9; $j>0; $j--)
			{
			?>
			<?php echo $saldoawala[$j]; ?>,
			<?php 
			}
			// $saldoawala
			echo $nsaldoawala; 
			?> 
			]
			}, 
			
			{
            name: '100.000',
            data: [
			<?php
			/* 0,0,0,0,0,0,0,0,0,0 */
			for($k=9; $k>0; $k--)
			{
			?>
			<?php echo $saldoawalb[$k]; ?>,
			<?php 
			}
			
			echo $nsaldoawalb; 
			?> 
			]
			}
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
