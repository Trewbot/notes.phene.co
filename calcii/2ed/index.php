<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>notes.phene.co</title>
	<link rel="stylesheet" href="//phene.co/style.css">
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-67481186-2', 'auto');
		ga('send', 'pageview');
	</script>
</head>
<body>
	<div class="content">
		<div>
			<b>calculus ii &ndash; 2ed.</b>
			<hr>
			Page:
			<?	$files = array_diff(scandir('.'), array('..','.'));
				for($i = 2; $i < count($files)+2; $i++) if(count(explode(' ',$files[$i]))==2) $files[$i] = explode(' ',explode('.',$files[$i])[0])[1];
				sort($files);
				foreach($files as $file): if(count(explode('.',$file))!==2):?>
				<a href="Page <?=$file?>.jpg"><?=$file?></a>
			<?	endif; endforeach; ?>
		</div>
		
		
		<br><br>
		
		<p>
			<a href="//notes.phene.co">notes</a>
		</p>
	</div>
</body>
</html>