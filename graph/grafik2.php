<?php

include('inc.php');	

@ini_set('display_errors', 'off');
?>
<html>
<head>

   <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="http://code.highcharts.com/highcharts.js"></script>  -->
   <script src="js/213min.js"></script>
   <script src="js/higcart.js"></script>  
</head>
<body>
<div id="container" style="width: 480px; height: 280px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'SISWA'   
   };      
   var tooltip = {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
   };
   var plotOptions = {
      pie: {
         allowPointSelect: true,
         cursor: 'pointer',
         dataLabels: {
            enabled: true,
            format: '<b>{point.name} </b>: {point.percentage:.1f} %',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
  
	
   var series= [{
      type: 'pie',
      name: 'SISWA',
	  
	  data: [
      <?php
		  /*
		$ca=mysql_result(mysql_query("select count(*)from siswa"),0);
		$a1=mysql_query("select * from siswa where codebranch='$codebranch'");
		while($a=mysql_fetch_array($a1))
			{
			$b=mysql_result(mysql_query("select count(*)from atm where codebranch='$codebranch' and area='$a[namacabang]'"),0);
			?>
			['<?php echo $b;?> - <?php echo "<a href=index.php?tsk=atmz>"; echo $a[namacabang]; echo "</a>"; ?>', <?php echo $b; ?>],
			<?php
			}
		?>
		*/
		$ca=mysql_result(mysql_query("select count(*)from siswa where jk='Laki-laki'"),0);
		$cb=mysql_result(mysql_query("select count(*)from siswa where jk='Perempuan'"),0);?>
			 ['<?php echo $ca;?> - Laki-Laki',  <?php echo $ca; ?> ],
			 ['<?php echo $cb;?> - Perempuan',  <?php echo $cb; ?> ]
	  /* ['Firefox',   45.0],
		 
         ['IE',       26.8],
         {
            name: 'Chrome',
            y: 12.8,
            sliced: true,
            selected: true
         },
         ['Safari',    8.5],
         ['Opera',     6.2],
         ['Others',   0.7]
		 */
	
      ]



   }];     
		      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container').highcharts(json);  
});
</script>
</body>
</html>
