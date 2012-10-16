<?php
/**
 * File Index
 * 
 * @filesource index.php
 * @author nama_prodi 
 * @package Web_Service_Tutorial
 * @subpackage WS_Client
 * @license MIT
 * @version 0.0.1
 */

require 'ws_client.php';

// call list propinsi WSC function 
$ws_data = call_ws_list_prodi('',0,100);

$n = $ws_data ['data_count'];
$prod_data = $ws_data ['data'];

?>
<table border="1">
	<caption>Daftar Prodi di Kampus Ternama Indonesia</caption>
	<tr>
		<th>ID</th>
		<th>KODE</th>
		<th>NAMA</th>
		<th>FAK</th>
		<th>KAMPUS</th>
		<th>WEBSITE</th>
		<th>AKREDITASI</th>
		<th>ALAMAT</th>
		<th>LATITUDE</th>
		<th>LONGITUDE</th>
	</tr>
	<tbody>
<?php
for($i = 0; $i < $n; $i ++) {
	 //$jml = ($prod_data [$i] ['prop_jml_penduduk_pria'] + $prod_data [$i] ['prop_jml_penduduk_pria']);
	?>
		<tr>
			<td><?php echo $prod_data [$i] ['id_prodi']; ?></td>
			<td><?php echo $prod_data [$i] ['kode_prodi']; ?></td>
			<td><?php echo $prod_data [$i] ['nama_prodi']; ?></td>
			<td><?php echo $prod_data [$i] ['fakultas']; ?></td>
			<td><?php echo $prod_data [$i] ['kampus']; ?></td>
			<td><?php echo $prod_data [$i] ['website']; ?></td>
		
			<td><?php echo $prod_data [$i] ['akreditasi']; ?></td>
			<td><?php echo $prod_data [$i] ['alamat']; ?></td>
			<td><?php echo $prod_data [$i] ['latitude']; ?></td>
			<td><?php echo $prod_data [$i] ['longitude']; ?></td>
		</tr>
<?php
}
?>
	</tbody>
</table>