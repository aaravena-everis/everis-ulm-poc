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
	</script>	
</head>
<body>
	<h1>Recibido:</h1>
<p> <?php echo 'fragmento ' . htmlspecialchars($_GET['fragment']); ?> </p>

<pre><?php var_dump($_GET); ?></pre>

<a href="poculm://everis-ulm-poc.herokuapp.com/page-mymovistar/?prueba=OK"></a>

</body>


</html>