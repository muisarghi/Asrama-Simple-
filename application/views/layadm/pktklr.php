
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
					<strong>Paket Keluar </strong>
					</div>
					
					<div class="card-body">
					<div class="col-sm-8"><?php echo"
					<a href='".base_url()."index.php/mda/exppktklr'>Export Excel</a>";?>
					</div>

					<div class="col-sm-4">
					<?php
					echo"<a href='".base_url()."index.php/mda/formpktklr'>Tambah Data Baru</a>";
					?>
					</div>
					
					
					
					<?php

					echo"
					<table class='table table-bordered'>
					<thead>
					<tr>
					<th scope='col'>#</th>
					<th scope='col'>Tanggal</th>
					<th scope='col'>Pengirim</th>
					<th scope='col'>Asrama</th>
					<th scope='col'>Penerima</th>
					<th scope='col'>Barang</th>
					<th scope='col'>Status</th>
					<th scope='col' colspan='2'>Act</th>
					</tr>
					</thead>

					<tbody>
					
					";
					$no=1;
					foreach ($paket as $a)
						{
						echo"
						<tr>
						<td scope='row'><b>$no</b></td>
						<td>$a->tgl_terima</td>
						<td>$a->nama</td>
						<td>$a->nama_asrama</td>
						<td>$a->pengirim</td>
						<td>$a->nama_paket</td>
						<td>$a->status_paket</td>
						<td>";?>
						<a href="#" data-toggle="modal" data-target="#editpkt" data-ids="<?php echo $a->id_paket;?>"><i class='fa fa-edit'></i>
						
						<!--
						<a href='".base_url()."index.php/mda/detpkt/".$a->id_paket."' ><i class='fa fa-edit'></i>

						
						-->
						</td>
						<td>
						<a 
                        href="javascript:;"
						data-id_paket="<?php echo $a->id_paket; ?>"
						data-nama="<?php echo $a->nama; ?>"
						data-add="pktklr"
						data-nama_paket="<?php echo $a->nama_paket; ?>"
						data-toggle="modal" data-target="#hpspaket">
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
			<form method='post' action='".base_url(). "index.php/mda/uppaket'>
			"; ?>
			 <div class="modal fade" id="editpkt" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Detail Paket  </h5>
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
			<form  action='".base_url(). "index.php/mda/hpspaket' method='post' >
			"; ?>
			 <div class="modal fade" id="hpspaket" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Hapus Data Paket  </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
							ID:
							<input type="text" class="form-control" id="id_paket_" name="id_paket_" disabled>
							<input type="hidden" class="form-control" id="id_paket" name="id_paket" >
							Nama:
							<input type="text" class="form-control" id="nama_" name="nama_" disabled>
							<input type="hidden" class="form-control" id="nama" name="nama" >

							Barang:
							<input type="text" class="form-control" id="nama_paket_" name="nama_paket_" disabled>
							<input type="hidden" class="form-control" id="nama_paket" name="nama_paket" >
							<input type="hidden" class="form-control" id="add" name="add" >

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
        $('#editpkt').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('ids');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : "post",
				url : '<?php echo base_url(); ?>index.php/mda/detpkts',
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
	$('#hpspaket').on('show.bs.modal', function (event) 
		{
		var div = $(event.relatedTarget)
        var modal = $(this)
        modal.find('#id_paket').attr("value",div.data('id_paket'));
		modal.find('#nama').attr("value",div.data('nama'));
		modal.find('#id_paket_').attr("value",div.data('id_paket'));
		modal.find('#nama_').attr("value",div.data('nama'));
		modal.find('#nama_paket').attr("value",div.data('nama_paket'));
		modal.find('#nama_paket_').attr("value",div.data('nama_paket'));
		modal.find('#add').attr("value",div.data('add'));
        }
		);
    }
	);
</script>