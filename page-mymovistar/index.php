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

	

	function myFunction() {
		//window.location = "poculm://everis-ulm-poc.herokuapp.com/page-mymovistar/#";
	}
	</script>	
</head>
<body onload="myFunction()">
	<h1>Recibido JS</h1>
<p> <?php echo 'Reenviando ' . htmlspecialchars($_GET['fragment']); ?> </p>

<pre><?php var_dump($_GET); ?></pre>

<p id="url"></p>

</body>
<script>
	var getUrl = String(window.location.href);
document.getElementById("url").innerHTML = getUrl;
</script>


</html>