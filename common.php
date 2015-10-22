<?

function LoadProject($projectId)
{
	$xmlPath = "projects/" . $projectId . ".xml";	
	$sss = simplexml_load_file($xmlPath);
	
	$content['title'] = $sss->title;
	$content['short_desc'] = $sss->short_desc;
	$content['long_desc'] = $sss->long_desc;
	$content['youtube'] = $sss->youtube;
	$content['event'] = $sss->event;
	$content['contrib'] = $sss->contrib;
	$content['tech'] = $sss->tech;
	
	for ($i = 0; $i < count($sss->tags->tag); $i++)
		$content['tags'][$i] = $sss->tags->tag[$i];
	
	$content['tags_formatted'] = TagsToString($content['tags']);
	
	$images = GetImagesList($projectId);
	$content['images_code'] = GetImagesHtmlCode($projectId, $images);
	$content['images_link_code'] = GetImagesLinkHtmlCode($projectId, $images);
	
	return $content;
}

function TagsToString($tagsArray)
{
	$string = "";
	
	for ($i = 0; $i < count($tagsArray); $i++)
	{
		if ($i != 0)
			$string .= " ";
			
		$string .= "#" . $tagsArray[$i];
	}
	
	return $string;
}

function GetAllFiles($path)
{
	$d = dir($path);
	$index = 0;
	
	while (false !== ($entry = $d->read()))
	{
		$filepath = "{$path}/{$entry}";
		if (is_file($filepath))
		{
			$files[$index] = $entry;
			$index++;
		}
	}
	
	sort($files);
	
	return $files;
}

function GetImagesList($projectId)
{
	$path = "img/" . $projectId;
	$d = dir($path);
	$index = 0;
	
	while (false !== ($entry = $d->read()))
	{
		$filepath = "{$path}/{$entry}";
		if (is_file($filepath))
		{
			if ($entry[0] != 'm')
			{
				$images[$index] = $entry;
				$index++;
			}
		}
	}
	
	sort($images);
	
	return $images;
}

function GetImagesHtmlCode($projectId, $images)
{
	$code = "";
	
	for ($i = 0; $i < min(3, count($images)); $i++)
	{
		$code .= "<img class=\"project_button_screen\" src=\"img/" . $projectId . "/m" . $images[$i] . "\" />\n";
	}
	
	return $code;
}

function GetImagesLinkHtmlCode($projectId, $images)
{
	$code = "";
	
	for ($i = 0; $i < count($images); $i++)
	{
		$code .= "<a target=\"_blank\" href=\"img/" . $projectId . "/" . $images[$i] . "\"><img class=\"p_miniatures\" src=\"img/" . $projectId . "/m" . $images[$i] . "\" /></a>\n";
	}
	
	return $code;
}

function GetProjectButtonCode($templateCode, $projectId)
{
	$code = $templateCode;
	$content = LoadProject($projectId);
	$code = str_replace("[TITLE]", $content['title'], $code);
	$code = str_replace("[SHORT_DESC]", $content['short_desc'], $code);
	$code = str_replace("[TAGS]", $content['tags_formatted'], $code);
	$code = str_replace("[IMAGES]", $content['images_code'], $code);
	$code = str_replace("[LINK]", "project.php?p=".$projectId, $code);
	return $code;
}

function GetAllProjectsCode()
{
	$templateCode = file_get_contents("project_template.html");
	$projectFiles = GetAllFiles("projects");
	
	for ($i = 0; $i < count($projectFiles); $i++)
	{
		$code .= GetProjectButtonCode($templateCode, basename($projectFiles[$i], ".xml"));
	}
	
	return $code;
}

?>
