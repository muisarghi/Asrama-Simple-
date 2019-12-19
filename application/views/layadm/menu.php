<?php $this->load->helper('url');?>



<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="<?php echo base_url();?>images/logo_.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="<?php echo base_url();?>images/part2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
				<?php $tsknya=base_url(uri_string()); 
				
				?>
                    
					<?php 
					if($tsknya==base_url().'mda/index')
					{echo"<li class='active'>";}
					else
					{echo"<li class=''>";}
					?>
					
                        <a href="<?php base_url();?>index"> <i class="menu-icon fa fa-dashboard"></i>Dashboard</a>
                    </li>
					
					 <h3 class="menu-title">DATA</h3>
					

					<?php 
					if($tsknya=="".base_url()."mda/santri")
					{echo"<li class='active'>";}
					else
					{echo"<li class=''>";}
					?>
                        <a href="<?php base_url();?>santri">
						<i class="menu-icon fa fa-building-o"></i>Data Siswa</a>
                    </li>
					
					<?php 
					if($tsknya=="".base_url()."mda/chart")
					{echo"<li class='active'>";}
					else
					{echo"<li class=''>";}
					?>
                        <a href="<?php base_url();?>chart">
						<i class="menu-icon fa fa-building-o"></i>Data Chart</a>
                    </li>

					<li class=''>
					<a href="<?php base_url();?>logout">
					<i class="menu-icon fa fa-power-off"></i>Logout</a>
                    </li>




                    </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->
	<div id="right-panel" class="right-panel">
	 <header id="header" class="header">

            <div class="header-menu" >

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    
					<span id="judul">Aplikasi Paket Santri</span>
                </div>

                <div class="col-sm-5">
                    

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->