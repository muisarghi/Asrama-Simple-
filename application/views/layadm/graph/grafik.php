<html>
	<head>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/highcharts.js" type="text/javascript"></script>
<script type="text/javascript">
	var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },   
         title: {
            text: 'KONDISI ATM '
         },
         xAxis: {
            categories: ['machine']
         },
         yAxis: {
            title: {
               text: 'Jumlah ATM'
            }
         },
              series:             
            [
            <?php 
			include('../../inc/inc.php');
			$sql   = "SELECT * FROM atm group by machine";
            $query = mysql_query( $sql )  or die(mysql_error());
            while( $ret = mysql_fetch_array( $query ) ){
            	$machine=$ret['machine'];
                /*
				
				 $sql_jumlah   = "SELECT jumlah FROM penjualan WHERE merek='$merek'";        
                 $query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
                 while( $data = mysql_fetch_array( $query_jumlah ) )
					 {
						$jumlah = $data['jumlah'];                 
					}     
				
				$sql_jumlah		= "select jumlah from penjualan where merek='$merek'";
					*/
					$jumlah=mysql_result(mysql_query("select count(*)from atm where machine='$machine'"),0);
					//$jumlah=mysql_result(mysql_query("select count(*)from atm where machine='$machine'"),0);
                  ?>
                  {
                      name: '<?php echo $machine; ?>',
                      data: [<?php echo $jumlah; ?>]
                  },
                  <?php } ?>
            ]
      });
   });	
</script>
	</head>
	<body>
		<div id='container' style="width: 480px; height: 280px; margin: 0 auto"></div>		
	</body>
</html>


