<?
include('common.php');

$projectsHtmlCode = GetAllProjectsCode();


$ip = $_SERVER['REMOTE_ADDR'];
$host = gethostbyaddr($ip);
$logdata = "host: " . $host . " (" . $ip . "), time: " . date("c") . "\n";
//$fh = fopen("visit", "a+");
//fwrite($fh, $logdata);
//fclose($fh);

mail("majakthecoder@gmail.com", "ktos wpakowal sie na strone", $logdata);

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
// Szymon Majewski // Programmer
</div>

<br>
<br>

<div class="header_div">

	<div class="myphotodiv">
		<img class="myphoto_image" src="img/photo2.jpg" />
	</div>
	<div class="mydesc">
		<a target="_blank" style="font-size:24px" href="szymon_majewski_resume.pdf">Download Resume</a><br>
		<br>
		I have always been a big fan of computer games, including their entertainment and productivity sides. I had planned my education and career in such a way as to become an expert in the field of software development. I have gained the experience in many competitions, academic projects and as a programmer in leading software development companies in Poland. I have possess a solid theoretical and practical basis within game development.<br>
		I know the OpenGL environment very well, on the basis of which I have created my own graphics engine. The engine helped me to create a couple of Tech Demos on the demoscene (computer subculture) and games on the iOS and Tizen platforms.<br>
		The knowledge of low-level graphics programming and the knowledge of mathematics allows me to create a very optimal code.<br>
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
						(+48) 663 946 762
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
