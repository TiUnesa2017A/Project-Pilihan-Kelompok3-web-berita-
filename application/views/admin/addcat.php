<div id="main-content"> <!-- Main Content Section with everything -->

<?php if($this->session->flashdata('added')): ?>
<div class="notification success png_bg">
				<a href="#" class="close"><img src="<?php echo base_url(); ?>assets/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					<?php echo $this->session->flashdata('added'); ?>
				</div>
</div>
<?php endif; ?>

<?php if(validation_errors()): ?>
<div class="notification error png_bg">
				<a href="#" class="close"><img src="<?php echo base_url(); ?>assets/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					<?php echo validation_errors(); ?>
				</div>
</div>
<?php endif; ?>

<h2>Tambah Kategori </h2>
<form method="post" action="<?php echo base_url('admin/addcat'); ?>">
<table>
	<tr>
		<td>Nama Kategori : </td>
		<td><input type="text" name="title" size="40" /></td>
	</tr>
	<tr>
		<td>Deskripsi Kategori : </td>
		<td><textarea name="description"></textarea></td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="submit" name="add" value="Tambah Kategori">
		</td>
	</tr>
</table>
</form>
<div class="clear"></div> <!-- End .clear -->
			
			