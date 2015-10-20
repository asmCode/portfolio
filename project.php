<?
include 'common.php';

$content = LoadProject($_GET["p"]);
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
