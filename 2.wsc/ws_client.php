<?php
/**
 * File WS Client
 * 
 * @filesource ws_client.php
 * @author Team Pemjar
 * @package Web_Service_Tutorial
 * @subpackage WS_Client Service
 * @license MIT
 * @version 0.0.1
 */

//include nusoap library
require '../0.lib/nusoap/lib/nusoap.php';

//wsdl configuration
$wsdl = 'http://localhost/pemjar/1.wss/index.php?wsdl';

//create instance
$ws_client = new nusoap_client ( $wsdl, true );

//debug if needed
//$ws_client->debugLevel = 1;

//header configuration
$user = "wsclient";
$pass = "secret";

//encrypt header value
$user = base64_encode ( $user );
$pass = base64_encode ( $pass );

$header = '<AuthSoapHeader>
			<UserName>' . $user . '</UserName>
			<Password>' . $pass . '</Password>
			</AuthSoapHeader>';

//set header
$ws_client->setHeaders ( $header );


// Function to print Fault
function detect_fault() {
	global $ws_client;
	
	//detect fault and error
	if ($ws_client->fault) {
		exit ( $ws_client->faultstring );
	} else {
		$err = $ws_client->getError ();
		if ($err) {
			exit ( $err );
		}
	}
}


//Function to Echo Debug Result
function echo_debug(){
	global $ws_client;
	//echo "<pre>".$ws_client->debug_str."</pre>";
    echo "<pre>".$ws_client->request."/<pre>";
    echo "<pre>".$ws_client->response."/<pre>";
    //print_r($ws_client->requestHeaders);	
}


//define Call Function for list_prodi Service
function call_ws_list_prodi($p_key_search, $p_page, $p_page_size) {
	global $ws_client;
	
	//parameters configuration
	$params = array ('p_key_search' => $p_key_search, 'p_page' => $p_page, 'p_page_size' => $p_page_size );
	
	//call method service
	$ws_data = $ws_client->call ( 'list_prodi', $params);
	
	detect_fault ();
	
	//decode data
	$ws_data = unserialize ( base64_decode ( $ws_data ) );
	//print_r($ws_data);	
	
	//echo debug if needed
	//echo_debug();
	
	return $ws_data;
}

//call_ws_list_prodi('ja',0,1);
//echo_debug();

?>
