<html>
<head>
	<script type="text/javascript">
	var parts = location.href.split('#');
	if(parts.length > 1)
	{
	    var params = parts[0].split('?');
	    var mark = '?';
	    if(params.length > 1)
	    {
	        mark = '&';
	    }
	    location.href = parts[0] + mark + 'fragment=' + parts[1];
	}

	console.log("-----------FRAGMENTOS----------");
	console.log(location.href);

	function myFunction() {
		window.location = "poculm://everis-ulm-poc.herokuapp.com/page-mymovistar/#"+location.href;
	}
	</script>	
</head>
<body onload="myFunction()">
	<h1>Recibido:</h1>
<p> <?php echo 'Reenviando ' . htmlspecialchars($_GET['fragment']); ?> </p>

<pre><?php var_dump($_GET); ?></pre>

</body>


</html>