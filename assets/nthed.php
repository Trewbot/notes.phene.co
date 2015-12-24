<body>
	<div class="content">
		<div>
			<?=$title;?>
			<script src="//scripts.phene.co/popup/0.1.1.0017"></script><a lightbox onclick="_g.pu.lightbox('api','read.php','pages.*',0);">read</a>,
			page:
			<?	$files = array_diff(scandir('.'), array('..','.'));
				for($i = 2; $i < count($files)+2; $i++) if(count(explode(' ',$files[$i]))==2) $files[$i] = explode(' ',explode('.',$files[$i])[0])[1];
				sort($files);
				foreach($files as $file): if(count(explode('.',$file))!==2):?>
				<a href="Page <?=$file?>.jpg"><?=$file?></a>
			<?	endif; endforeach; ?>
		</div>
		<br><br><p><?=$trail?></p>
	</div>
</body>