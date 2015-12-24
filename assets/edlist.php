<body>
	<div class="content">
		<div>
			<?=$title?>
			<?	$files = array_diff(scandir('.'), array('..','.'));
				for($i = 2; $i < count($files)+2; $i++) if(count(explode(' ',$files[$i]))==2) $files[$i] = explode('ed',explode('.',$files[$i])[0])[0];
				sort($files);
				foreach($files as $file): if(count(explode('.',$file))!==2):?>
				<a href="<?=$file?>"><?=$file?>.</a>
			<?	endif; endforeach; ?>
		</div>
		<br><br><p><?=$trail?></p>
	</div>
</body>