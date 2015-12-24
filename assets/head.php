<title><?=($l=count($pgs))>1?$pgs[$l-1]." | ".$pgs[$l-2]:$pgs[0]?></title>
<link rel="stylesheet" href="//phene.co/style.css">
<link rel="shortcut icon" type="image/png" href="//phene.co/assets/fav.png"/>
<? if(isset($bg)): ?>
<link rel="stylesheet" href="//phene.co/assets/background?src=<?=$bg?>">
<? endif; ?>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-67481186-2', 'auto');
	ga('send', 'pageview');
</script>
<?
	$u = "//notes.phene.co";
	$home = '<a href="//notes.phene.co">notes</a> . <a href="//phene.co">phene.co</a>';
	$trail = $home;
	$up = explode('/',$_SERVER['REQUEST_URI']);
	$ap = '';
	for($i = 1; $i < count($up) - ($up[count($up)-1]==""?2:1); $i++){
		$ap .= '/' . $up[$i];
		$trail .= ' / <a href="' . $u . $ap . '">' . $pgs[$i] . '</a>';
	}
	if(!isset($attrib))
		$attrib = '<a href="//trevorjhoglund.com">notes by trevor j hoglund</a>';
	if(!isset($title))
		$title =  (preg_match("/[0-9]ed/",$pgs[$l-1])
			? '<b><a href="' . $ap . '">' . $pgs[$l-2] . '</a> &ndash; <a href="' . $u . $_SERVER['REQUEST_URI'] . '">' . $pgs[$l-1] . '</a></b><hr>'
			: '<b><a href="' . $u . $_SERVER['REQUEST_URI'] . '">' . $pgs[$l-1] . '</a> &ndash; ' . $attrib . '</b><hr>');
	
?>