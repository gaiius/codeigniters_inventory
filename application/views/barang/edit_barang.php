<?php 
echo form_open('barang/tampil_yang_mau_di_edit');?>
<table class="table table-bordered">
	<tr>
		<td>Nama barang</td>
		<td><input type="text" name="nama_barang" value="<?php echo $data_edit['nama_barang'];?>"/></td>
	</tr>
	<tr>
		<td>Stok</td>
		<td><input type="text"  name="stok" value="<?php echo $data_edit['stok'];?>"/></td>
	</tr>
	<tr>
		<td>Status</td>
		<td><input type="text" name="status" value="<?php echo $data_edit['status'];?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td> <button type="submit" class="btn btn-primary btn-sm" name="save">Simpan</button></td>
		<input type="hidden" name="id_barang" value="<?php echo $data_edit['id_barang'];?>"/>
	</tr>
</table>
