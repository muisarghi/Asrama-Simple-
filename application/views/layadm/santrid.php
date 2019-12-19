
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Siswa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                           
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data </strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
						<th>#</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th colspan="2">Act</th>
						</tr>

					<tr>
					<?php
					echo"
					<form method='post' action='".base_url()."index.php/mda/insiswa'>
					<td scope='col'></td>
					<td scope='col'>
					<input type='text' name='nim' class='form-control'>
					</td>

					<td scope='col'>
					<input type='text' name='nama' class='form-control'>
					</td>
					
					<td scope='col'>
					<input type='text' name='tgllahir' class='form-control'>
					</td>
					
					<td scope='col'>
					<select name='jk' class='form-control'>
					<option value='Laki-laki'>Laki-laki</option>
					<option value='Perempuan'>Perempuan</option>
					</select>
					
					</td>
		
					<td scope='col'>
					<input type='text' name='alamat' class='form-control'>
					</td>

					<td scope='col' colspan='2'><input type='submit' class='btn btn-primary' value='SIMPAN'></td>
					</form>"; ?>
					</tr>
                    </thead>
                    <tbody>
					
					<?php
                     $no=1;
					foreach ($santri as $b)
						{
						echo"
						<tr>
						<td><b>$no</b></td>
						<td>$b->nim</td>
						<td>$b->nama</td>
						<td>$b->tgllahir</td>
						<td>$b->jk</td>
						<td>$b->alamat</td>
						<td>
						";
						?>
						
						<a href="#" data-toggle="modal" data-target="#editsantri" data-nim="<?php echo $b->nim; ?>"><i class="fa fa-edit"></i></a></td>
						<td>
						<a 
                        href="javascript:;"
						data-nim="<?php echo $b->nim; ?>"
						data-nama="<?php echo $b->nama; ?>"
						data-alamat="<?php echo $b->alamat; ?>"
						data-toggle="modal" data-target="#hpssantri">
						<i class='fa fa-trash-o'></i>
                        </a>
						</td>
						</tr>
						<?php

						$no++;
						}
					 ?>
					
					
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->



<script type="text/javascript">
    $(document).ready(function(){
        $('#editsantri').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('nim');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : "post",
				url : '<?php echo base_url(); ?>index.php/mda/detailsantri',
				data :  "rowid="+ rowid,
                success : function(data){
                $("#fetched-data").html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>


<script>
$(document).ready(function()
	{
	$('#hpssantri').on('show.bs.modal', function (event) 
		{
		var div = $(event.relatedTarget)
        var modal = $(this)
        modal.find('#nim').attr("value",div.data('nim'));
		modal.find('#nama').attr("value",div.data('nama'));
		modal.find('#nim_').attr("value",div.data('nim'));
		modal.find('#nama_').attr("value",div.data('nama'));
		modal.find('#alamat').attr("value",div.data('alamat'));
		modal.find('#alamat_').attr("value",div.data('alamat'));
        }
		);
    }
	);
</script>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


