<html>
<head>
	<script type="text/javascript">

	var getUrl = window.location;

	function myFunction() {
		//window.location = "poculm://everis-ulm-poc.herokuapp.com/page-mymovistar/#";
	}
	</script>	
</head>
<body onload="myFunction()">
	<h1>Recibido JS</h1>

<p id="url"></p>

</body>
<script>
document.getElementById("url").innerHTML = 5getUrl;
</script>


</html>