<!DOCTYPE html>

<html>

<head>

	<title></title>

</head>

<body>

    

<div class="visible-print text-center">

	<h1>Laravel 5.7 - QR Code Generator Example</h1>

    <a href="data:image/png;base64, {!! base64_encode($codes) !!} " download> <img src="data:image/png;base64, {!! base64_encode($codes) !!} "> </a>

    <p>example by ItSolutionStuf.com.</p>

</div>

    

</body>

</html>