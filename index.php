<?
include('common.php');

$projectsHtmlCode = GetAllProjectsCode();

//$projects = LoadProjects($_GET["p"]);
/*
$ip = $_SERVER['REMOTE_ADDR'];
$host = gethostbyaddr($ip);
$logdata = "host: " . $host . " (" . $ip . "), time: " . date("c") . "\n";
$fh = fopen("visit", "a+");
fwrite($fh, $logdata);
fclose($fh);

mail("majakthecoder@gmail.com", "ktos wpakowal sie na strone", $logdata);
*/
?>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
	<link rel="stylesheet" href="style.css" type="text/css">
	<title>:: Szymon Majewski :: Portfolio ::</title>
	
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-24133798-1']);
		_gaq.push(['_trackPageview']);
	
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head>

<body>
<br>
<br>
<br>
<br>
<center>

<div class="section title center">
Dear Head Hunters!
</div>

<br>
<br>

<div class="section intro center">
	Purpose of this site is to present some of my most interesting projects, that I have created in the past. Most of them are connected with Microsoft Imagine Cup competition. I was mainly responsible for technical part - designing architecture and programming.<br><br>I hope you will enjoy the movies!!
	<br>
	<br>
	Sincerely,<br>
	Szymon Majewski
</div>

<br>
<br>
<br>

<?=$projectsHtmlCode?>

</center>

</body>
