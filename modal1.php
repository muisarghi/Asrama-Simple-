<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Passing Data To Modal</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  </head>
 
  <body>
    <div class="container">
      <div class="row"> 
        <table class="table table-bordered">
          <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th colspan="2">Opsi</th>
          </tr>
          <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "asset";
 
            // Membuat Koneksi
            $koneksi = new mysqli($servername, $username, $password, $dbname);
            
            // Melakukan Cek Koneksi
            if ($koneksi->connect_error) {
                die("Koneksi Gagal : " . $koneksi->connect_error);
            } 
 
            //Melakukan query
            $sql = "SELECT * FROM golongan";
            $hasil = $koneksi->query($sql);
            $no = 1;
            if ($hasil->num_rows > 0) {
                foreach ($hasil as $row) { ?>
                  <tr>     
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['namagol']; ?></td>
                  <?php echo "<td><a href='#' data-target='#myModal' class='btn btn-default btn-small' id='custId' data-toggle='modal' data-id=".$row['idgol'].">Detail</a></td>"; ?>
                  </tr>
            <?php 
            $no++; 
            } 
              } else { 
            echo "0 results"; 
              } $koneksi->close(); 
            ?>
 
        </table>
      </div>
    </div>
 
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detail Barang</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
 
  <script src="assets/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'modal2.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>