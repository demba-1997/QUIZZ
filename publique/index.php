<?php
require(dirname(__DIR__). "/config/constante.php");
echo (require(dirname(__DIR__)."/config/require.php"));
open_session();
require(ROUTE_DIR.'lib/rooter.php');
?>