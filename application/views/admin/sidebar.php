		<div id="sidebar"  style="background-color: #444444;" ><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			<script type="text/javascript"> 
			$(document).ready(function (){
				$('main-nav li a').click(function (){
					$('main-nav a').removeClass('current');
					$(this).addClass('current');
				});
			});
			</script>
			<h1 id="sidebar-title">Admin Page</h1>
		  
			<!-- Logo (221px wide) -->
			<img id="logo" src="<?php echo base_url(); ?>assets/resources/images/logo.png" alt="Admin Page" />
			<h1>Web Berita</h1>

			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Halo, <a href="#" title="Edit your profile"><?php echo $this->session->userdata('username'); ?></a><br />
				<br />
				<a target="_blank" href="<?php echo base_url('home'); ?>" title="View the Site">Lihat Situs</a> | <a href="<?php echo base_url(); ?>admin/logout" title="Sign Out">Log Out</a>
			</div>        
			
			<ul id="main-nav">  
				
				<li >
					<a style="background-color: #4286f4" href="<?php echo base_url('admin'); ?>" class="nav-top-item no-submenu"> 
						Dashboard
					</a>       
				</li>
				
				<li> 
					<a style="background-color: #4286f4" href="#" class="nav-top-item"> 
					Berita
					</a>
					<ul>
						<li><a href="<?php echo base_url('admin/addnews'); ?>">Tambahkan Baru</a></li>
						<li><a href="<?php echo base_url('admin/managenews'); ?>">Kelola Berita</a></li>
					</ul>
				</li>
		
				<li>
					<a style="background-color: #4286f4" href="#" class="nav-top-item">
						Kategori
					</a>
					<ul>
						<li><a href="<?php echo base_url('admin/addcat'); ?>">Tambahkan Baru</a></li>
						<li><a href="<?php echo base_url('admin/managecats'); ?>">Kelola Kategori</a></li>
					</ul>
				</li>
			</ul> <!-- End #main-nav -->
			
		</div></div> <!-- End #sidebar -->