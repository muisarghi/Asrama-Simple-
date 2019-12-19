
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
					<strong>Detail Paket</strong>
					</div>
					
					<div class="card-body">
					<?php
					echo"
					<form action='".base_url()."index.php/mda/inpaket'  method='post' class='form-horizontal'>";
					?>
					<div class="row form-group">
						<div class="col col-md-4">
						Nama Paket
						</div>

						<div class="col col-md-8">
						<input type="text" id="text-input" name="nama_paket" placeholder="" <?php echo"value='$nama_paket'"; ?>class="form-control">
						</div>

					</div>
					
					<!------------->

					<div class="row form-group">
						<div class="col col-md-4">
						Tanggal Terima
						</div>
							
						<div class="col col-md-2">
						<select name="tgl" class="form-control">
						<option value="0">[ Tanggal ]</option>
						<?php
						$per=date('d');
						for($x=1;$x<32;$x++)
							{
							echo"<option value='$x'";
							if($x==$per)
								{echo" selected ";}
							else
								{echo" ";}
							echo">$x</option>";
							}
							?>
						</select>
						<small class="form-text text-muted">Tanggal</small>
						</div>
							
						<div class="col col-md-2">
						<select name="bln" class="form-control">
						<option value="0">[ Bulan ]</option>
						<?php
						$perbl=date('m');
						for($y=1;$y<13;$y++)
							{
							echo"<option value='$y' ";
							if($y==$perbl)
								{echo" selected ";}
							else
								{echo" ";}
							echo">$y</option>";
							}
								
						?>
						</select>
						<small class="form-text text-muted">Bulan</small>
						</div>
							
						<div class="col col-md-2">
						<input type="text" class="form-control" <?php 
						$thn=date('Y');
						echo"value='$thn'"; ?> name="thn">
						<small class="form-text text-muted">Tahun</small>
						</div>
							
						<div class="col col-md-2">
							
						</div>


						</div>

						<!--------------------->
						<div class="row form-group">
						<div class="col col-md-4">
						Kategori Paket
						</div>

						<div class="col col-md-8">
						<select name="kategori_paket" class="form-control">
						<?php
						foreach($pkt as $pkts)
							{
							echo"
							<option value='$pkts->id_pktkat'>$pkts->nama_pktkat</option>
							";
							}
						?>
						</select>
						</div>

					</div>
					
					

					<!--------------------->
						<div class="row form-group">
						<div class="col col-md-4">
						Penerima
						</div>

						<div class="col col-md-8">
						<select name="penerima" class="form-control">
						<?php
						foreach($santri as $santris)
							{
							echo"
							<option value='$santris->nis'>$santris->nama [$santris->nama_asrama]</option>
							";
							}
						?>
						</select>
						</div>

					</div>
					
					<!------------->
					
					<div class="row form-group">
						<div class="col col-md-4">
						Pengirim
						</div>

						<div class="col col-md-8">
						<input type="text" id="text-input" name="pengirim" placeholder="" class="form-control">
						</div>

					</div>
					
					<!------------->
					
					<div class="row form-group">
						<div class="col col-md-4">
						Isi Disita
						</div>

						<div class="col col-md-8">
						<textarea id="text-input" name="isi_disita" placeholder="" class="form-control"></textarea>
						</div>

					</div>
					
					<!------------->

					<div class="row form-group">
						<div class="col col-md-4">
						Status Paket
						</div>

						<div class="col col-md-8">
						<select id="text-input" name="status_paket" placeholder="" class="form-control">
						<option value=''></option>
						<option value='Sudah Diambil'>Sudah Diambil</option>
						<option value='Belum Diambil'>Belum Diambil</option>
						</select>
						</div>

					</div>
					
					<!------------->
					

					<div class="card-footer">
					<input type="hidden" name="add" value="pktmsk">
					<input type="hidden" name="jns_paket" value="masuk">
					
					<button type="submit" class="btn btn-primary btn-sm">
					<i class="fa fa-dot-circle-o"></i> Simpan
					</button>
					
					<button type="reset" class="btn btn-danger btn-sm">
					<i class="fa fa-ban"></i> Ulangi
					</button>
					</form>
					</div>



					</div>

				</div>

            </div>

			
			
          

			
			


            
            



        </div> <!-- .content -->
    </div><!-- /#right-panel 
	-->


