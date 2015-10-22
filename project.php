<?
include 'common.php';

$content = LoadProject($_GET["p"]);
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
	<center>
		<br>
		<br>
		
		<div class="section title center">
			<?=$content['title']?>
		</div>
		
		<br>

		<div class="section intro center">
			<?=$content['long_desc']?>
			<br>
			<br>
		</div>
		
		<div align="left" style="width:800px;">
		<table class="p_label">
			<tr>
				<td class="p_label_td_key">
					Event:
				</td>
				<td class="p_label_td_value">
					<?=$content['event']?>
				</td>
			</tr>
			<tr>
				<td class="p_label_td_key">
					My contribution:
				</td>
				<td class="p_label_td_value">
					<?=$content['contrib']?>
				</td>
			</tr>
			<tr>
				<td class="p_label_td_key">
					Technologies:
				</td>
				<td class="p_label_td_value">
					<?=$content['tech']?>
				</td>
			</tr>
			<tr>
				<td class="p_label_td_key">
					Tags:
				</td>
				<td class="p_label_td_value">
					<?=$content['tags_formatted']?>
				</td>
			</tr>
		</table>
		</div>
		
			
		<br>
		<br>

		<div class="project_movie">
			<?=$content['youtube']?>
		</div>
		
		<br>
		<br>
		
		<div class="p_screens">
			<?=$content['images_link_code']?>
		</div>
		
		<br>
		<br>
				
	</center>
</body>
