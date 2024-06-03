<?php
	date_default_timezone_set("Asia/Manila");
	echo ("<span>Copyright &copy; ".date('Y')." | ".$cfg_author.", All Rights Reserved. [This is not a BIR-Registered POS System]</span>");

    include('../system_functions/client_ip_address.php');
    $param_ipaddress = getUserIP();

    echo ("<div class='float-right'>IP Address: ".$param_ipaddress."<div>"); 
?>	
	<script src="../theme/js/jquery.min.js"></script>
	<script src="../theme/js/popper.min.js"></script>