
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
					<strong>Asrama </strong>
					</div>
					
					<div class="card-body">
					<?php

					echo"
					<table class='table table-bordered'>
					<thead>
					<tr>
					<th scope='col'>#</th>
					<th scope='col'>Nama Asrama</th>
					<th scope='col'>Gedung</th>
					<th scope='col' colspan='2'>Act</th>
					</tr>
					</thead>

					<tbody>
					<tr>
					<form method='post' action='".base_url()."index.php/mda/inasrama'>
					<th scope='col'></th>
					<th scope='col'>
					<input type='text' name='nama_asrama' class='form-control'>
					</th>

					<th scope='col'>
					<input type='text' name='gedung' class='form-control'>
					</th>
					
					
					<th scope='col' colspan='2'><input type='submit' class='btn btn-primary' value='SIMPAN'></th>
					</form>
					</tr>


					";
					$no=1;
					foreach ($asr as $asra)
						{
						echo"
						<tr>
						<td scope='row'><b>$no</b></td>
						<td>$asra->nama_asrama</td>
						<td>$asra->gedung</td>
						<td>
						";
						?>
						<a href="#" data-toggle="modal" data-target="#editasrama" data-id="<?php echo $asra->id_asrama; ?>"><i class="fa fa-edit"></i></td>
						<td>
						<a 
                        href="javascript:;"
						data-id_asrama="<?php echo $asra->id_asrama; ?>"
						data-nama_asrama="<?php echo $asra->nama_asrama; ?>"
						data-gedung="<?php echo $asra->gedung; ?>"
						data-toggle="modal" data-target="#hps">
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
			<form method='post' action='".base_url(). "index.php/mda/editingasrama'>
			"; ?>
			 <div class="modal fade" id="editasrama" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Edit Asrama  </h5>
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
			<form  action='".base_url(). "index.php/mda/hpsasrama' method='post' >
			"; ?>
			 <div class="modal fade" id="hps" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Hapus Asrama?  </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
							ID:
							<input type="text" class="form-control" id="id_asrama_" name="id_asrama_" disabled>
							<input type="hidden" class="form-control" id="id_asrama" name="id_asrama" >
							Nama:
							<input type="text" class="form-control" id="nama_asrama_" name="nama_asrama_" disabled>
							<input type="hidden" class="form-control" id="nama_asrama" name="nama_asrama" >

							Gedung:
							<input type="text" class="form-control" id="gedung_" name="gedung_" disabled>
							<input type="hidden" class="form-control" id="gedung" name="gedung" >

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


<script type="text/javascript">
    $(document).ready(function(){
        $('#editasrama').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : "post",
				url : '<?php echo base_url(); ?>index.php/mda/detailasrama',
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
	$('#hps').on('show.bs.modal', function (event) 
		{
		var div = $(event.relatedTarget)
        var modal = $(this)
        modal.find('#id_asrama').attr("value",div.data('id_asrama'));
		modal.find('#nama_asrama').attr("value",div.data('nama_asrama'));
		modal.find('#id_asrama_').attr("value",div.data('id_asrama'));
		modal.find('#nama_asrama_').attr("value",div.data('nama_asrama'));
		modal.find('#gedung').attr("value",div.data('gedung'));
		modal.find('#gedung_').attr("value",div.data('gedung'));
        }
		);
    }
	);
</script>