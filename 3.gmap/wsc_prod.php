<?php
/**
 * File WS Client prod
 * 
 * @filesource wsc_prod.php
 * @author Google Map | Mencari Prodi di Seluruh Kampus Ternama Indonesia
 * @package Web_Service_Tutorial
 * @subpackage WS_Client Service Call
 * @license MIT
 * @version 0.0.1
 */

require '../2.wsc/ws_client.php';

// Get parameters from URL
$v_prod_nama = (isset ( $_REQUEST ["nama_prodi"] )) ? $_REQUEST ["nama_prodi"] : '';
$v_prod_nama = '%' . $v_prod_nama . '%';
$v_prod_nama = ( string ) $v_prod_nama;
$v_page = 0;
$v_page_size = 100;

// call list prodinsi WSC function 
$ws_data = call_ws_list_prodi($v_prod_nama, $v_page, $v_page_size);

$n = $ws_data ['data_count'];
$prod_data = $ws_data ['data'];

// Start XML file, create parent node
$dom = new DOMDocument ( "1.0" );
$node = $dom->createElement ( "markers" );
$parnode = $dom->appendChild ( $node );

header ( "Content-type: text/xml" );

// Iterate through the rows, adding XML nodes for each
for($i = 0; $i < $n; $i ++) {
	$jml = ($prod_data [$i] ['prod_jml_penduduk_pria'] + $prod_data [$i] ['prod_jml_penduduk_wanita']);
	$node = $dom->createElement ( "marker" );
	$newnode = $parnode->appendChild ( $node );
	$newnode->setAttribute ( "prod_nama", $prod_data [$i]['prod_nama'] );
	$newnode->setAttribute ( "prod_ibukota", $prod_data [$i]['prod_ibukota'] );
	$newnode->setAttribute ( "prod_penduduk", $jml );
	$newnode->setAttribute ( "prod_penduduk_pria", $prod_data [$i]['prod_jml_penduduk_pria']  );
	$newnode->setAttribute ( "prod_penduduk_wanita", $prod_data [$i]['prod_jml_penduduk_wanita'] );
	$newnode->setAttribute ( "prod_website", $prod_data [$i]['prod_website'] );
	$newnode->setAttribute ( "lat", $prod_data [$i]['prod_map_latitude'] );
	$newnode->setAttribute ( "lng", $prod_data [$i]['prod_map_longitude'] );
}

echo $dom->saveXML ();
?>