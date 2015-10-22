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
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-69140078-1', 'auto');
	  ga('send', 'pageview');
	</script>
</head>

<body>
<br>
<br>
<br>
<br>
<center>

<div class="section title center">
Szymon Majewski - Programmer
</div>

<br>
<br>

<div class="header_div">

	<div class="myphotodiv">
		<img class="myphoto_image" src="img/photo2.jpg" />
	</div>
	<div class="mydesc">
		Purpose of this site is to present some of my most interesting projects, that I have created in the past. Most of them are connected with Microsoft Imagine Cup competition. I was mainly responsible for technical part - designing architecture and programming.<br>
		<br>
		<div align="left" style="width:800px;">
			<table class="p_label">
				<tr>
					<td class="p_label_td_key">
						Email
					</td>
					<td class="p_label_td_value">
						majewskis@gmail.com
					</td>
				</tr>
				<tr>
					<td class="p_label_td_key">
						Phone
					</td>
					<td class="p_label_td_value">
						+48 669 946 762
					</td>
				</tr>
				<tr>
					<td class="p_label_td_key">
						LinkedIn
					</td>
					<td class="p_label_td_value">
						<a href="https://pl.linkedin.com/pub/szymon-majewski/71/294/139">link</a>
					</td>
				</tr>
			</table>
		</div>
		<br>
		<a target="_blank" style="font-size:24px" href="szymon_majewski_resume.pdf">Download Resume</a>
	</div>
</div>

<br>
<br>

<div class="section title center" style="font-size: 20px">
	Portfolio
</div>

<br>

<?=$projectsHtmlCode?>

</center>

</body>
