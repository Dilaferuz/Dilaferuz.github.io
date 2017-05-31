<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>BinarGame</title>
		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="jquery.cookie.js"></script>
		<script type="text/javascript" src="binar.js"></script>
		<link href='binar.css' rel='stylesheet'>
	</head>
	<body>
		<div id='linkContainer'>
			<div class='linkBlock' id='chosenOne'>
				Двоичная
			</div>
			
		</div>
		<div id='nameContainer'>
			Введите ваше имя:
			<input type="text" id='name'>
		</div>
		<button id='championsContainer'>OK</button>
		<div id='totalTimerContainer'>
			<div id='totalMinutesContainer'>0:</div>
			<div id='totalSecondsContainer'>0</div>
		</div>
		<div id='optionsContainer'>
			<div id='levelContainer'>Уровень: 1 (Ограничение 9 сек.) </div>
			<div id='startContainer'>
				начать
			</div>
		</div>
		<div id='timerContainer'>
			<div id='minutesContainer'>0:</div>
			<div id='secondsContainer'>0</div>
		</div>
		<div id='aimContainer'>
			Цель = 
		</div>
		<div>
			<div class='grade'>512</div>
			<div class='grade'>256</div>
			<div class='grade'>128</div>
			<div class='grade'>64</div>
			<div class='grade'>32</div>
			<div class='grade'>16</div>
			<div class='grade'>8</div>
			<div class='grade'>4</div>
			<div class='grade'>2</div>
			<div class='grade'>1</div>
		</div>
		<div id='buttonsContainer'>
			<div class='button zero'></div>
			<div class='button zero'></div>
			<div class='button zero'></div>
			<div class='button zero'></div>
			<div class='button zero'></div>
			<div class='button zero'></div>
			<div class='button zero'></div>
			<div class='button zero'></div>
			<div class='button zero'></div>
			<div class='button zero'></div>
			<div id='resultContainer'></div>
		</div>
		<div id='scoresContainer'>
			
		</div>
	</body>
</html>
