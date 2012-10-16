<?php
/**
 * File Index
 * 
 * @filesource index.php
 * @author Team Pemjar
 * @package Web_Service_Tutorial
 * @subpackage WS_Server
 * @license MIT
 * @version 0.0.1
 */

//just for simple security - all php files must called from index.php
define ( 'MUST_FROM_INDEX', 'SAMPLE_WS2011.2' );

//load nusoap library
require '../0.lib/nusoap/lib/nusoap.php';

//load db configuration
require 'db_config.php';

//run ws server
require 'ws_server.php';

?>