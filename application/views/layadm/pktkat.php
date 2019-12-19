
<script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>



<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Paket</h1>
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
					<strong>Kategori Paket </strong>
					</div>
					
					<div class="card-body">
					<?php

					echo"
					<table class='table table-bordered'>
					<thead>
					<tr>
					<th scope='col'>#</th>
					<th scope='col'>Kode</th>
					<th scope='col'>Nama</th>
					<th scope='col' colspan='2'>Act</th>
					</tr>
					</thead>

					<tbody>
					<tr>
					<form method='post' action='".base_url()."index.php/mda/inpktkat'>
					<td scope='col'></td>
					<td scope='col'>
					<input type='text' name='kode_pktkat' class='form-control'>
					</td>

					<td scope='col'>
					<input type='text' name='nama_pktkat' class='form-control'>
					</td>
					
					
					<th scope='col' colspan='2'><input type='submit' class='btn btn-primary' value='SIMPAN'></th>
					</form>
					</tr>


					";
					$no=1;
					foreach ($pkt as $pkts)
						{
						echo"
						<tr>
						<td scope='row'><b>$no</b></td>
						<td>$pkts->kode_pktkat</td>
						<td>$pkts->nama_pktkat</td>
						<td>
						";
						?>
						<a href="#" data-toggle="modal" data-target="#editpktkat" data-id="<?php echo $pkts->id_pktkat; ?>"><i class="fa fa-edit"></i></td>
						<td>
						<a 
                        href="javascript:;"
						data-id_pktkat="<?php echo $pkts->id_pktkat; ?>"
						data-nama_pktkat="<?php echo $pkts->nama_pktkat; ?>"
						data-kode_pktkat="<?php echo $pkts->kode_pktkat; ?>"
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
			<form method='post' action='".base_url(). "index.php/mda/editingpktkat'>
			"; ?>
			 <div class="modal fade" id="editpktkat" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Edit Kategori Paket  </h5>
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
			<form  action='".base_url(). "index.php/mda/hpspktkat' method='post' >
			"; ?>
			 <div class="modal fade" id="hps" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Hapus Kategori Paket?  </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
							ID:
							<input type="text" class="form-control" id="id_pktkat_" name="id_pktkat_" disabled>
							<input type="hidden" class="form-control" id="id_pktkat" name="id_pktkat" >
							Kode:
							<input type="text" class="form-control" id="kode_pktkat_" name="kode_pktkat_" disabled>
							<input type="hidden" class="form-control" id="kode_pktkat" name="kode_pktkat" >

							Nama:
							<input type="text" class="form-control" id="nama_pktkat_" name="nama_pktkat_" disabled>
							<input type="hidden" class="form-control" id="nama_pktkat" name="nama_pktkat" >

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
        $('#editpktkat').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : "post",
				url : '<?php echo base_url(); ?>index.php/mda/detailpktkat',
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
        modal.find('#id_pktkat').attr("value",div.data('id_pktkat'));
		modal.find('#nama_pktkat').attr("value",div.data('nama_pktkat'));
		modal.find('#id_pktkat_').attr("value",div.data('id_pktkat'));
		modal.find('#nama_pktkat_').attr("value",div.data('nama_pktkat'));
		modal.find('#kode_pktkat').attr("value",div.data('kode_pktkat'));
		modal.find('#kode_pktkat_').attr("value",div.data('kode_pktkat'));
        }
		);
    }
	);
</script>