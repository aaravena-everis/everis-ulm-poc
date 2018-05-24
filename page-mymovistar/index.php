<html>
<head>
	
</head>
<body onload="myFunction()">
	<h1>Recibido JS</h1>
	<h2 id="res"></h2>
<h3>Via #</h3>
<p id="url"></p>

<h3>Via ?</h3>
<p id="url2"></p>
</body>
<script>
	var getUrl = window.location.href;
	getUrl = getUrl.split('#');
	document.getElementById("url").innerHTML = String(getUrl[1]);

	var getUrl2 = window.location.href;
	getUrl2 = getUrl2.split('?');
	document.getElementById("url2").innerHTML = String(getUrl2[1]);

	if (String(getUrl[1]) != 'undefined') {
		document.getElementById("res").innerHTML = "Recibido via #";
	} else if (String(getUrl2[1]) != 'undefined') {
		document.getElementById("res").innerHTML = "Recibido via ?";
	} else {
		document.getElementById("res").innerHTML = "Nada Recibido"
	}

function myFunction() {
	console.log("MY FUNCION")
	if (String(getUrl[1]) != 'undefined') {
		console.log("MY FUNCION CON #")
		window.location = "poculm://everis-ulm-poc.herokuapp.com/page-mymovistar/?fragment="+String(getUrl[1]);
	} else if (String(getUrl2[1]) != 'undefined') {
		console.log("MY FUNCION CON ?")
		window.location = "poculm://everis-ulm-poc.herokuapp.com/page-mymovistar/?fragment="+String(getUrl2[1]);
	} else {
		console.log("nada recibido");
	}
	
}
</script>


</html>