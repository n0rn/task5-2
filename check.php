<?php require_once 'function.php';

		$counter = 0;
		$choice= filter_var($REQUEST['radio'], FILTER_SANITIZE_NUMBER_INT);
		getChoice(choice);
		$result = getDbConnect();
	foreach($result as $item) {
		$counter +=$item['counter'];
	}

		$percentage1 = round(100 / $counter * $result[0]['counter']);
		$percentage2 = round(100 / $counter * $result[1]['counter']);
		$percentage3 = round(100 / $counter * $result[2]['counter']);


?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">  
		<title>Результат опроса</title>
		<link rel="stylesheet" href="bootstrap3/css/bootstrap.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/admin.css">
	</head>
	<body>
		
		<div id="wrapper">
			<h1>Результат опроса</h1>
			<h4><a href="index.php">На главную</a></h4>
			<div class="info alert alert-info">
				Общее количество опрошенных: <b><?=$count?></b>.
				<br>
				<b>1.</b> Ответили "до 20 лет": <b><?=$result[0]['counter']?></b> человек, <b><?=$percenrage1?>%</b> опрошенных.
				<br>
				<b>2.</b> Ответили "от 20 до 30": <b><?=$result[1]['counter']?></b> человек, <b><?=$percenrage2?>%</b> опрошенных.
				<br>
				<b>3.</b> Ответили "более 30": <b><?=$result[2]['counter']?></b> человека, <b><?=$percenrage3?>%</b> опрошенных.
			</div>		
			
			<div class="note">
			
				<p class="answer">Ответ "до 20 лет":</p>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: <?=$percenrage1?>%;">
						<?=$percenrage1?>
					</div>
				</div>
				<p class="answer">Ответ "от 20 до 30":</p>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: <?=$percenrage2?>%;">
						<?=$percenrage2?>
					</div>
				</div>
				<p class="answer">Ответ "более 30":</p>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: <?=$percenrage3?>%;">
						<?=$percenrage3?>
					</div>
				</div>
				
			</div>
			
			<div class="info alert alert-info">
				<br>
			</div>			
		</div>

	</body>
</html>


			