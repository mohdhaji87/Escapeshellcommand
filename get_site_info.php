<?php
$command = "whois ".$_POST['url'];
system(escapeshellcmd($command));
?>
