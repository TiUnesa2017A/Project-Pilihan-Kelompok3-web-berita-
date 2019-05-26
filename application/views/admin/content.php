		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Selamat Datang <?php echo $this->session->userdata('username'); ?></h2>
			
			<ul class="shortcut-buttons-set">
				
				<li><a class="shortcut-button" href="<?php echo base_url('admin/addnews'); ?>"><span>
					<img src="<?php echo base_url(); ?>assets/resources/images/icons/pencil_48.png" alt="icon" /><br />
					Tambah Berita 
				</span></a></li>
				
				<li><a class="shortcut-button" href="<?php echo base_url('admin/addcat'); ?>"><span>
					<img src="<?php echo base_url(); ?>assets/resources/images/icons/image_add_48.png" alt="icon" /><br />
					Kategori
				</span></a></li>
				
			</ul>
		</div>
			

