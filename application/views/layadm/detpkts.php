
<script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>


            <div class="col-sm-12">
                
				<?php
				echo $this->session->flashdata('msg');
				//$iduser=$this->session->userdata('iduser');
				//echo"$iduser"; 
				?>
				
				
				<div class="card">
					
					
					<div class="card-body">
					<?php
					foreach($paket as $pkt)
						{
						$id_paket=$pkt->id_paket;
						$jns_paket=$pkt->jns_paket;
						$nama_paket=$pkt->nama_paket;
						$tgl_terima=$pkt->tgl_terima;
						$kategori_paket=$pkt->kategori_paket;
						$penerima=$pkt->penerima;
						$pengirim=$pkt->pengirim;
						$isi_disita=$pkt->isi_disita;
						$status_paket=$pkt->status_paket;
						}
					$tgla=explode('-',$tgl_terima);
					/*echo"
					<form action='".base_url()."index.php/mda/uppaket'  method='post' class='form-horizontal'>";*/
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
						$per=$tgla[2];
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
						$perbl=$tgla[1];
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
						$thn=$tgla[0];
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
						foreach($pktkat as $pktkats)
							{
							echo"
							<option value='$pktkats->id_pktkat' ";
							if($kategori_paket==$pktkats->id_pktkat)
								{echo"selected";}
							else
								{echo"";}
							echo">$pktkats->nama_pktkat</option>
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
						<option value=''></option>
						<?php
						foreach($santri as $santris)
							{
							echo"
							<option value='$santris->nis' ";
							if($penerima==$santris->nis)
								{echo"selected";}
							else
								{echo"";}
							echo">$santris->nama [$santris->nama_asrama]</option>
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
						<input type="text" id="text-input" name="pengirim" placeholder="" <?php echo"value='$pengirim'"; ?>class="form-control">
						</div>

					</div>
					
					<!------------->
					
					<div class="row form-group">
						<div class="col col-md-4">
						Isi Disita
						</div>

						<div class="col col-md-8">
						<textarea id="text-input" name="isi_disita" placeholder="" class="form-control"><?php echo"$isi_disita"; ?></textarea>
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
						<option value='Sudah Diambil' <?php 
						if($status_paket=='Sudah Diambil')
							{echo"selected";}
						else
							{echo"";}
						?>>Sudah Diambil</option>
						<option value='Belum Diambil' 
						<?php
						if($status_paket=='Belum Diambil')
							{echo"selected";}
						else
							{echo"";}
						?>
						>Belum Diambil</option>
						</select>
						</div>

					</div>
					
					<!------------->
					

					<div class="card-footer">
					<input type="hidden" name="id_paket" value="<?php echo"$id_paket"; ?>">
					<input type="hidden" name="jns_paket" value="<?php echo"$jns_paket"; ?>">
					<!--
					<button type="submit" class="btn btn-primary btn-sm">
					<i class="fa fa-dot-circle-o"></i> Simpan
					</button>
					
					<button type="reset" class="btn btn-danger btn-sm">
					<i class="fa fa-ban"></i> Ulangi
					</button>
					-->
					
					</div>



					</div>

				</div>

            </div>

			
			
          

			
			


            
            



        


