<div class="page-content">
<div class="page-body">
                    <div class="row">
<a href="<?php echo base_url();?>barang/tambah_data_barang"/>Tambah barang</a>
<table class="table table-bordered">
	<tr>
		<td>Nama barang</td>
		<td>Stok</td>
		<td>Status</td>
		<td colspan="2">Action</td>
	</tr>
<?php 
foreach ($tampil_data_barang->result() as $tampil){	
?>

	<tr>
		<td><?php echo $tampil->nama_barang;?></td>
		<td><?php echo $tampil->stok;?></td>
		<td><?php echo $tampil->status;?></td>
		<td><a href="<?php echo base_url();?>barang/tampil_yang_mau_di_edit/<?php echo $tampil->id_barang;?>"/>Edit</a> 
		<td><a href="<?php echo base_url();?>barang/hapus_data/<?php echo $tampil->id_barang;?>"/>Hapus</a> 
	</tr>
<?php } ?>

</table>
</div>
</div>
</div>