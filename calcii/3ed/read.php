<?	header("Content-Type:text/json");header("Access-Control-Allow-Origin:*"); ?>
{
	"pages" : [
<?
	$files = array_diff(scandir('.'), array('..','.'));
	$uri = explode('/',$_SERVER["REQUEST_URI"]);
	unset($uri[count($uri)-1]);
	$url = 'http://'.$_SERVER['HTTP_HOST'].implode('/',$uri);
	for($i = 2; $i < count($files)+2; $i++) if(count(explode(' ',$files[$i]))==2) $files[$i] = explode(' ',explode('.',$files[$i])[0])[1];
	sort($files);
	$j = 1;
	foreach($files as $file): if(count(explode('.',$file))!==2):?>
		"<?=$url?>/Page <?=$file?>.jpg" <? if($j!=count($files)-2): ?>,
<?	endif; $j++; endif; endforeach; ?>

	]
}