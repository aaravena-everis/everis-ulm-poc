<html>
<head>
	
</head>
<body onload="myFunction()">
	<h1>Recibido JS</h1>

<p id="url"></p>

</body>
<script>
	var getUrl = window.location.href;
	getUrl = getUrl.split('#');
document.getElementById("url").innerHTML = String(getUrl[1]);

function myFunction() {
	//window.location = "poculm://everis-ulm-poc.herokuapp.com/page-mymovistar/?";
}
</script>


</html>