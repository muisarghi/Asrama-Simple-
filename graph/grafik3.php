<?php
session_start();
include('../../inc/inc.php');	
include('../../inc/se.php');
@ini_set('display_errors', 'off');
?>
<html>
<head>
<title>Highcharts Tutorial</title>
   <!--
  
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="http://code.highcharts.com/highcharts.js"></script> 
   -->
     <script src="js/213min.js"></script>
   <script src="js/higcart.js"></script>  
</head>
<body>
<!-- 
CATEGORIES - TANGGAL
NAME - DENOM
VALUE - RP
-->
<div id="container" style="width: 480px; height: 200px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
      type: 'column'
   };
   var title = {
      text: 'SALDO HARIAN'   
   };   
   var xAxis = {

      categories: [ 'Sekarang',
		<?php
		
		$a1=mysql_query("select * from backup_sld where codeuker='$codeuker' order by idsld DESC limit 4"); 
		//$no=1;
		while($a=mysql_fetch_array($a1))
			{
			$tglsld=date('d/m/Y', strtotime($a['tglsld']));
			//$saldoawalc=$a['saldoawalc'];
			//$saldoawalb[$no]=$a['saldoawalb'];
			//$saldoawalc[$no]=$a['saldoawalc'];
			?>
			'<?php echo $tglsld; ?>',
			<?php
			//$no++;
			}
			
			// 'a', 'b', 'c', 'd',
		?>
	 ]
   };
   var credits = {
      enabled: false
   };
   var series= [{
      name: '20.000',
            data: [
			<?php  ?>
			<?php
			
			$ax1=mysql_query("select * from sld where codeuker='$codeuker'");
			while($ax=mysql_fetch_array($ax1))
				{
				$nsaldoawala=$ax['saldoawala'];
				$nsaldoawalb=$ax['saldoawalb'];
				$nsaldoawalc=$ax['saldoawalc'];
				}
				echo $nsaldoawalc; ?>,
			<?php
			//$a1=mysql_query("select * from backup_sld where codeuker='$codeuker' order by idsld ASC limit 4"); 
			$b1=mysql_query("select * from backup_sld where codeuker='$codeuker' order by idsld DESC limit 4");
			while($b=mysql_fetch_array($b1))
				{
				$bsaldoawalc=$b['saldoawalc'];
				echo $bsaldoawalc; 
				?>,
				<?php
				}
			?>
			
			]
        }, {
            name: '50.000',
			data: [
			<?php echo $nsaldoawala; ?>,
			<?php
			$c1=mysql_query("select * from backup_sld where codeuker='$codeuker' order by idsld DESC limit 4");
			while($c=mysql_fetch_array($c1))
				{
				$csaldoawala=$c['saldoawala'];
				echo $csaldoawala; 
				?>,
				<?php
				}
				?>	
			]
        }, {
            name: '100.000',
            data: [
			<?php echo $nsaldoawalb; ?>,
			<?php
			$d1=mysql_query("select * from backup_sld where codeuker='$codeuker' order by idsld DESC limit 4");
			while($d=mysql_fetch_array($d1))
				{
				$dsaldoawalb=$d['saldoawalb'];
				echo $dsaldoawalb; 
				?>,
				<?php
				}
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