
<script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>



<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                
				<?php
				echo $this->session->flashdata('msg');
				//$iduser=$this->session->userdata('iduser');
				//echo"$iduser"; 
				?>
				
				
				<div class="card">
					<div class="card-header">
					<strong>Santri </strong>
					</div>
					
					<div class="card-body">
					<?php
					
					/*
					<table id="bootstrap-data-table" class="table table-striped table-bordered">
					<table class='table table-bordered'>
					*/
					echo"
					<table id='bootstrap-data-table' class='table table-striped table-bordered'>
					<thead>
					<tr>
					<th>#</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Alamat</th>
					<th colspan='2'>Act</th>
					</tr>
					</thead>

					<tbody>
					<tr>
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
					</form>
					</tr>
					

					";
					$no=1;
					foreach ($santri as $b)
						{
						echo"
						<tr>
						<td scope='row'><b>$no</b></td>
						<td>$b->nim</td>
						<td>$b->nama</td>
						<td>$b->tgllahir</td>
						<td>$b->jk</td>
						<td>$b->alamat</td>
						<td>
						";
						?>
						<a href="#" data-toggle="modal" data-target="#editsantri" data-nim="<?php echo $b->nim; ?>"><i class="fa fa-edit"></i></td>
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
					echo"
					</tbody>
					</table>
					";
					?>

					

					</div>

				</div>

            </div>

			
			<?php echo"
			<form method='post' action='".base_url(). "index.php/mda/editingsantri'>
			"; ?>
			 <div class="modal fade" id="editsantri" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Edit User  </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                           <div id="fetched-data"></div>
						  
						
							</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
                                <input type="submit" class="btn btn-primary" value='SIMPAN'></button>
                            </div>
                        </div>
                    </div>
                </div>
				</form>
          

			
			<?php echo"
			<form  action='".base_url(). "index.php/mda/hpssantri' method='post' >
			"; ?>
			 <div class="modal fade" id="hpssantri" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Hapus User?  </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
							ID:
							<input type="text" class="form-control" id="nim_" name="nim_" disabled>
							<input type="hidden" class="form-control" id="nim" name="nim" >
							Nama:
							<input type="text" class="form-control" id="nama_" name="nama_" disabled>
							<input type="hidden" class="form-control" id="nama" name="nama" >

							Alamat:
							<input type="text" class="form-control" id="alamat_" name="alamat_" disabled>
							<input type="hidden" class="form-control" id="alamat" name="alamat" >

							</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
                                <input type="submit" class="btn btn-danger" value='HAPUS'></button>
                            </div>
                        </div>
                    </div>
                </div>
				</form>


            
            



        </div> <!-- .content -->
    </div><!-- /#right-panel 
	-->

<script src="<?php echo base_url();?>assets/js/vendor/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins.js"></script>
	<script src="<?php echo base_url();?>assets/js/main.js"></script>

<script src="<?php echo base_url();?>assets/js/lib/data-table/datatables.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/lib/data-table/dataTables.buttons.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/lib/data-table/jszip.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/lib/data-table/pdfmake.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/lib/data-table/vfs_fonts.js"></script>
	<script src="<?php echo base_url();?>assets/js/lib/data-table/buttons.html5.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/lib/data-table/buttons.print.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/lib/data-table/buttons.colVis.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/lib/data-table/datatables-init.js"></script>

<script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

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

