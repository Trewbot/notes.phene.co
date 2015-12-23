<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>notes.phene.co / linear algebra</title>
	<link rel="stylesheet" href="//phene.co/style.css">
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-67481186-2', 'auto');
		ga('send', 'pageview');
	</script>
	<style>
		html		{background:url('http://trevorjhoglund.com/bg/linalg.jpg');background-attachment:fixed;color:#fff;background-size:cover;background-position:center center;}
		a, a:hover	{color:#fff !important;}
		hr			{background:#fff;}
		span		{color:#ddd;}
		.content	{background:rgba(0,0,0,0.2);padding:40px;margin-top:calc(50vh - 140px);}
	</style>
</head>
<body>
	<div class="content">
		<div>
			<b><a href="//notes.phene.co/linalg">linear algebra</a> &ndash; <a href="//notes.phene.co/linalg/1ed">1ed.</a></b>
			<hr>
			<script src="//scripts.phene.co/popup/0.1.1.0017"></script><a lightbox onclick="_g.pu.lightbox('api','read.php','pages.*',0);">read</a>,
			page:
			<?	$files = array_diff(scandir('.'), array('..','.'));
				for($i = 2; $i < count($files)+2; $i++) if(count(explode(' ',$files[$i]))==2) $files[$i] = explode(' ',explode('.',$files[$i])[0])[1];
				sort($files);
				foreach($files as $file): if(count(explode('.',$file))!==2):?>
				<a href="Page <?=$file?>.jpg"><?=$file?></a>
			<?	endif; endforeach; ?>
		</div>
		
		
		<br><br>
		
		<p>
			<a href="//notes.phene.co">notes</a> . <a href="//phene.co">phene.co</a> / <a href="//notes.phene.co/linalg">linear algebra</a>
		</p>
	</div>
</body>
</html>