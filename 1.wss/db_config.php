<?php
/**
 * DB Configuration
 * 
 * @filesource db_config.php
 * @author Team Pemjar 
 * @package Web_Service_Tutorial
 * @subpackage WS_Server DB Configuration
 * @license MIT
 * @version 0.0.1
 */

if (! defined ( 'MUST_FROM_INDEX' )) exit ( 'Cannot access file directly' );

$db_host = '127.0.0.1';
$db_user = 'root';
$db_pwd = '';
$db_port = '3306';
$db_schema = 'pemjar';

$conn = mysql_connect ( $db_host, $db_user, $db_pwd ) or die ( 'Failed while making database connection' );
if ($conn) {
	mysql_selectdb ( $db_schema );
}
?>
