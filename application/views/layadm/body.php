<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <!--
				<div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
				-->
				<div class="card">
					<div class="card-header">
					<strong>Index</strong>
					</div>
					
					<div class="card-body">
					<div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                
                            </div>
                        </div>
                        <h4 class="mb-0">
						<?php
						//foreach($data as $b)
						//{$jml=$b->jsiswa;}
						$jsiswa=mysql_result(mysql_query("select count(nim)from siswa"),0);
						?>
                            <span class="count"><?php echo"$jsiswa";?></span>
                        </h4>
                        <p class="text-light">Jumlah Siswa</p>

                    </div>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70"/>
                            <canvas id="widgetChart3"></canvas>
                        </div>
                </div>
            </div>
					</div>

				</div>

            </div>


           

         
            

            
            

            


        </div> <!-- .content -->
    </div><!-- /#right-panel -->