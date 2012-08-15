<?php require_once "/config.php"; 

$plugin = new Plugins();

$cookie = file_get_contents("./admin/plugins.ini");

if (!empty($cookie))
{

	foreach(explode(',', $cookie) as $item)
	{
		if(isset($plugin->$item))
			echo "\r\n".$plugin->$item."\r\n";
	}
	
}
?>