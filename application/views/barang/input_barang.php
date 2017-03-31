<?php 
echo form_open('barang/tambah_data_barang');?>
<table class="table table-bordered">
	<tr>
		<td>Nama barang</td>
		<td><input type="text" name="nama_barang"/></td>
	</tr>
	<tr>
		<td>Stok</td>
		<td><input type="text"  name="stok"/></td>
	</tr>
	<tr>
		<td>Status</td>
		<td><input type="text" name="status"/></td>
	</tr>
	<tr>
		<td></td>
		<td> <button type="submit" class="btn btn-primary btn-sm" name="save">Simpan</button></td>

	</tr>
</table>
