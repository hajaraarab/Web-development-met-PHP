<?php
	$articles = [
		'title' => 'Project title...',
		'article' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
		Voluptatibus, ea culpa et animi, inventore laboriosam.'
	]; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./ressources/style.css" rel="stylesheet">
	<title>Document</title>
</head>
<body>
	<section id="projects">
		<h2>Projects</h2>
				
	<section id="projectItem"> 

		<?php for($i = 0; $i < 4; $i++): ?>
			<article> 
				<h3><?= $articles['title']; ?></h3> 	
						
				<p><?= $articles['article']; ?></p>
						
				<a href="#" class="readmore">read more</a> 
			</article>
		<?php endfor; ?>

	</section>
					
	</section>
</body>
</html>