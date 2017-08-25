<?php
if (isset($_GET['id'])) {
	echo 'Just did: '.$_GET['id'];
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Testing Ajax</title>
<script type="text/javascript">
function demo() {
	if(window.XMLHttpRequest) {
		httpRequest = new XMLHttpRequest();
	} else {
		httpRequest = new ActiveXObject('Microsoft.XMLHTTP');
	}
	httpRequest.onreadystatechange = function() {
		if (this.readyState == 4 && this.status ==200)
			document.getElementById('demo').innerHTML = this.responseText;
	}
	httpRequest.open('GET','http://localhost:8080/index.php?id=1',true);
	httpRequest.send();

}
</script>
</script>
</head>
<body>
<div>This is demo</div>
<div></div>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
<button id='demo' onclick="demo();">Do something!</button>
</body>
</html>