<!-- 
This is the home page for Final Project, Quotation Service. 
It is a PHP file because later on you will add PHP code to this file.

File name view.php 
    
Author: Kevin Callaghan
-->

<!DOCTYPE html>
<html>
<head>
<title>Quotation Service</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body onload="showQuotes()">


<h1>Quotation Service</h1>

<a href="./register.php" ><button>Register</button></a>
<a href="./login.php" ><button>Login</button></a>
<a href="./addQuote.php" ><button>Add Quote</button></a>

<script>
var element = document.getElementById("quotes");
function showQuotes() {
	//alert('view.php under construction');
	
    // AJAX call to controller.php
  	// Needs query parameter ?todo=getQuotes.
  	// Echo back one big string to here that has all styled quotations.
  	// Write all of the complex code to layout the array of quotes 
  	// inside function getQuotesAsHTML inside controller.php

	//element.innerHTML = "test passed";

	var ajax = new XMLHttpRequest();

	ajax.open("GET", "controller.php?todo=getQuotes", true);

	ajax.send();
	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4 && ajax.status == 200) {
			var responseS = ajax.responseText;
			document.getElementById("quotes").innerHTML = responseS;
		}
	};
	
} // End function showQuotes

</script>

</body>
</html>