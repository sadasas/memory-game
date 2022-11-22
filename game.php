
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Memory Game</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Memory Game</title>
	<link rel="stylesheet" href="css/style.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>

<body>
	<table>
		<tbody>
			<tr>
				<th colspan="5">
					<h1>Memory Game</h1>
				</th>
			</tr>
			<tr>
				<th rowspan="4">
					<h2>Level</h2>
				</th>
				<th>
					<div class="stars">
						<div class="star-empty hide">
							<i class="far fa-star"></i>
						</div>
						<div class="star-half hide">
							<i class="fas fa-star-half"></i>
						</div>
						<div class="star">
							<i class="fas fa-star"></i>
						</div>

						<div class="star-empty hide">
							<i class="far fa-star"></i>
						</div>
						<div class="star-half hide">
							<i class="fas fa-star-half"></i>
						</div>
						<div class="star">
							<i class="fas fa-star"></i>
						</div>

						<div class="star-empty hide">
							<i class="far fa-star"></i>
						</div>
						<div class="star-half hide">
							<i class="fas fa-star-half"></i>
						</div>
						<div class="star">
							<i class="fas fa-star"></i>
						</div>
					</div>
				</th>
				<th>
					<div class="timer-container">
						<p class="timer">
							00:00:00
						</p>
					</div>
				</th>
				<th>
					<div class="move-counter-container">
						<p class="move-counter">
							Moves: 0
						</p>
					</div>
				</th>
				<th rowspan="4">
					<h2 >TopScore</h2>
	<p id="TopScore"></p>
				</th>
			</tr>
			<tr>
				<th colspan="3">
					<section class="board">
						<div class="card" data-icon="seruling">
							<img src="Assets/1.png" height="150" size="150"></img>
						</div>
						<div class="card" data-icon="seruling">
							<img src="Assets/1.png" height="150" size="150"></img>
						</div>
						<div class="card" data-icon="kendang">
							<img src="Assets/2.png" height="150" size="150"></img>
						</div>
						<div class="card" data-icon="kendang">
							<img src="Assets/2.png" height="150" size="150"></img>
						</div>
						<div class="card" data-icon="rumah gadang">
							<img src="Assets/3.png" height="150" size="150"></img>
						</div>
						<div class="card" data-icon="rumah gadang">
							<img src="Assets/3.png" height="150" size="150"></img>
						</div>
						<div class="card" data-icon="kujang">
							<img src="Assets/4.png" height="150" size="150"></img>
						</div>
						<div class="card" data-icon="kujang">
							<img src="Assets/4.png" height="150" size="150"></img>
						</div>
						<div class="card" data-icon="keris">
							<img src="Assets/5.png" height="150" size="150"></img>
						</div>
						<div class="card" data-icon="keris">
							<img src="Assets/5.png" height="150" size="150"></img>
						</div>
						<div class="card" data-icon="bug">
							<i class="fas fa-bug fa-3x"></i>
						</div>
						<div class="card" data-icon="bug">
							<i class="fas fa-bug fa-3x"></i>
						</div>
						<div class="card" data-icon="github">
							<i class="fab fa-github fa-3x"></i>
						</div>
						<div class="card" data-icon="github">
							<i class="fab fa-github fa-3x"></i>
						</div>
						<div class="card" data-icon="terminal">
							<i class="fas fa-terminal fa-3x"></i>
						</div>
						<div class="card" data-icon="terminal">
							<i class="fas fa-terminal fa-3x"></i>
						</div>
					</section>
				</th>
			</tr>
			<tr>
				<th>
					<div class="restart-button-container">
						<input type="button" value="Restart" onclick="restartGame()" class="restart-button">
					</div>
				</th>
				<th>
					<h2 id="txtUsername"></h2>
				</th>
				<th>
					<div id="myDIV">
						<input type="button" value="Login" onclick="document.location='login.php'" class="restart-button">
					</div>
				</th>
			</tr>
		</tbody>
	</table>
	<section class="modal-container hide">
		<div class="modal">
			<div class="modal-dialog">
				<p class="modal-stars"></p>
				<h2>Congratulations you've won!</h2>
				<p class="modal-message"></p>
				<p>Would you like to play again?</p>
				<input type="button" value="Yes" onclick="restartGame()">
				<input type="button" value="No" onclick="closeModal()">
			</div>
		</div>
	</section>
	<script src="scripts/index.js"></script>
</body>

</html>
