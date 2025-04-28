<?php

	include_once('pages/app/examples-list.php');
	include_once('pages/app/exercises-list.php');

	$lastUpdatedGitCommit = filemtime('.git/refs/heads/main');
	$lastUpdatedGitCommitTime = date ("d F Y. H:i:s", $lastUpdatedGitCommit);

	$_common    = [
		"title" => 'Back end API development: course material'
	];

	$currentUrl = 'http://' . $_SERVER['HTTP_HOST'] .  $_SERVER['REQUEST_URI'];

	$currentUrlWithoutViewCode = $_SERVER['REQUEST_URI'];
		parse_str($currentUrlWithoutViewCode, $parameters);
		unset($parameters['viewCode']);
		$queryString = http_build_query($parameters);
		$queryString = urldecode(http_build_query($parameters));
	$currentUrlWithoutViewCode = 'http://' . $_SERVER['HTTP_HOST'] . $queryString;

	$page = "outline";
	$iframeUrl = "pages/outline.php";
	if (isset($_GET['page']))
	{
		switch($_GET['page'])
		{
			case 'slides':
				$page = "slides";
				$iframeUrl = "https://docs.google.com/presentation/d/1dJdMD4FbkfrTOHhvXMcMSfhseXgy9MS2jRTXgiMzLNA/edit?usp=sharing";
				break;
			case 'examples':
				$page = "examples";
				$iframeUrl = $examples[0]['indexPath'];
				if(isset($_GET["example"]))
				{
					$iframeUrl = $_GET["example"];
				}
				break;
			case 'exercises':
				$page = "exercises";
				$iframeUrl = $exercises[0]['indexPath'];
				if(isset($_GET["exercise"]))
				{
					$iframeUrl = $_GET["exercise"];
				}
				break;
		}
	}

	$viewCode = false;
	$rawFile = '';
	if (isset( $_GET['viewCode'] ) && $_GET['viewCode'] == true)
	{
		$viewCode = true;
		$rawFile = file_get_contents(dirname(__FILE__) . $iframeUrl, true);
		$rawFile = htmlspecialchars($rawFile);
	}

?>
<?php include 'pages/_partials/header.php' ?>

	<div class="container">
		
		<div class="index">
			<h2>Course</h2>

			<ul>
			    <li><a href="/?page=outline">outline</a></li>
				<li><a href="/?page=slides">slides</a></li>
			    <li>
			    	<a href="/?page=examples">examples</a>
			    	<?php if( $page == "examples"): ?>
			    	<ol>
			    		<?php foreach ($examples as $example): ?>
					<li><a href="/?page=examples&example=<?= $example['indexPath'] ?>" class="<?= ($iframeUrl == $example['indexPath']) ? 'bold': '' ?>"><?= $example['name'] ?></a></li>
						<?php endforeach ?>
			    	</ol>
			    	<?php endif ?>
			    </li>
			    <li>
			    	<a href="/?page=exercises">exercises</a>
			    	<?php if( $page == "exercises"): ?>
			    	<ol>
			    		<?php foreach ($exercises as $exercise): ?>
					<li><a href="/?page=exercises&exercise=<?= $exercise['indexPath'] ?>" class="<?= ($iframeUrl == $exercise['indexPath']) ? 'bold': '' ?>"><?= $exercise['name'] ?></a></li>
						<?php endforeach ?>
			    	</ol>
			    	<?php endif ?>
			    </li>
			</ul>

		</div>

		<div class="content">

			<?php if(!$viewCode): ?>

				<?php if($page == 'examples' || $page == 'exercises'): ?>
					<a href="<?= $currentUrl ?>&viewCode=true" class="toggle-code" title="show code"><i class="bi bi-code-slash"></i></a>
				<?php endif ?>
				<iframe src="<?= $iframeUrl ?>" onload="this.style.height=(this.contentWindow.document.body.scrollHeight+80)+'px';" <?= ($page == "slides") ? 'style="height:800px"' : "" ?>> </iframe>
			<?php else: ?>
				<a href="<?= $currentUrlWithoutViewCode ?>" class="toggle-code" title="show HTML"><i class="bi bi-filetype-html"></i></a>

				<pre><code class="language-php"><?= $rawFile ?></code></pre>
			<?php endif ?>
		</div>
	</div>

<?php include 'pages/_partials/footer.php' ?>
