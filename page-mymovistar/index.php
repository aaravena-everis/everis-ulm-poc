<html>
<head></head>
<body>
	<h1>Recibido:</h1>
<p>
<?php
echo 'code ' . htmlspecialchars($_GET["code"]) . '<br />';
echo 'state ' . htmlspecialchars($_GET["state"]) . '<br />';
echo 'nonce ' . htmlspecialchars($_GET["nonce"]) . '<br />';
?>
</p>
</body>

</html>