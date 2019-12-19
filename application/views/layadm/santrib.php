
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

					<table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Salary</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>$217,500</td>
                      </tr>
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>$345,000</td>
                      </tr>
                      <tr>
                        <td>Yuri Berry</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>$675,000</td>
                      </tr>
                      <tr>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>$106,450</td>
                      </tr>
                      <tr>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sidney</td>
                        <td>$85,600</td>
                      </tr>
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>$1,200,000</td>
                      </tr>
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>$92,575</td>
                      </tr>
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>$357,650</td>
                      </tr>
                      <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>$206,850</td>
                      </tr>
                      <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>$850,000</td>
                      </tr>
                      <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>$163,000</td>
                      </tr>
                      <tr>
                        <td>Michelle House</td>
                        <td>Integration Specialist</td>
                        <td>Sidney</td>
                        <td>$95,400</td>
                      </tr>
                      <tr>
                        <td>Suki Burks</td>
                        <td>Developer</td>
                        <td>London</td>
                        <td>$114,500</td>
                      </tr>
                      <tr>
                        <td>Prescott Bartlett</td>
                        <td>Technical Author</td>
                        <td>London</td>
                        <td>$145,000</td>
                      </tr>
                      <tr>
                        <td>Gavin Cortez</td>
                        <td>Team Leader</td>
                        <td>San Francisco</td>
                        <td>$235,500</td>
                      </tr>
                      <tr>
                        <td>Martena Mccray</td>
                        <td>Post-Sales support</td>
                        <td>Edinburgh</td>
                        <td>$324,050</td>
                      </tr>
                      <tr>
                        <td>Unity Butler</td>
                        <td>Marketing Designer</td>
                        <td>San Francisco</td>
                        <td>$85,675</td>
                      </tr>
                      <tr>
                        <td>Howard Hatfield</td>
                        <td>Office Manager</td>
                        <td>San Francisco</td>
                        <td>$164,500</td>
                      </tr>
                      <tr>
                        <td>Hope Fuentes</td>
                        <td>Secretary</td>
                        <td>San Francisco</td>
                        <td>$109,850</td>
                      </tr>
                      <tr>
                        <td>Vivian Harrell</td>
                        <td>Financial Controller</td>
                        <td>San Francisco</td>
                        <td>$452,500</td>
                      </tr>
                      <tr>
                        <td>Timothy Mooney</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>$136,200</td>
                      </tr>
                      <tr>
                        <td>Jackson Bradshaw</td>
                        <td>Director</td>
                        <td>New York</td>
                        <td>$645,750</td>
                      </tr>
                      <tr>
                        <td>Olivia Liang</td>
                        <td>Support Engineer</td>
                        <td>Singapore</td>
                        <td>$234,500</td>
                      </tr>
                      <tr>
                        <td>Bruno Nash</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>$163,500</td>
                      </tr>
                      <tr>
                        <td>Sakura Yamamoto</td>
                        <td>Support Engineer</td>
                        <td>Tokyo</td>
                        <td>$139,575</td>
                      </tr>
                      <tr>
                        <td>Thor Walton</td>
                        <td>Developer</td>
                        <td>New York</td>
                        <td>$98,540</td>
                      </tr>
                      <tr>
                        <td>Finn Camacho</td>
                        <td>Support Engineer</td>
                        <td>San Francisco</td>
                        <td>$87,500</td>
                      </tr>
                      <tr>
                        <td>Serge Baldwin</td>
                        <td>Data Coordinator</td>
                        <td>Singapore</td>
                        <td>$138,575</td>
                      </tr>
                      <tr>
                        <td>Zenaida Frank</td>
                        <td>Software Engineer</td>
                        <td>New York</td>
                        <td>$125,250</td>
                      </tr>
                      <tr>
                        <td>Zorita Serrano</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>$115,000</td>
                      </tr>
                      <tr>
                        <td>Jennifer Acosta</td>
                        <td>Junior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>$75,650</td>
                      </tr>
                      <tr>
                        <td>Cara Stevens</td>
                        <td>Sales Assistant</td>
                        <td>New York</td>
                        <td>$145,600</td>
                      </tr>
                      <tr>
                        <td>Hermione Butler</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>$356,250</td>
                      </tr>
                      <tr>
                        <td>Lael Greer</td>
                        <td>Systems Administrator</td>
                        <td>London</td>
                        <td>$103,500</td>
                      </tr>
                      <tr>
                        <td>Jonas Alexander</td>
                        <td>Developer</td>
                        <td>San Francisco</td>
                        <td>$86,500</td>
                      </tr>
                      <tr>
                        <td>Shad Decker</td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>$183,000</td>
                      </tr>
                      <tr>
                        <td>Michael Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>$183,000</td>
                      </tr>
                      <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>$112,000</td>
                      </tr>
                    </tbody>
                  </table>

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

