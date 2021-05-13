<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>lab 3</title>

	<script src="ajax.js"></script>

	<?php require 'get_form_data.php'; ?>
</head>

<body>
	<main>

	
		<h2>Выборка фильмов по жанру</h2>
		<div class="container">

			<div class="form-container">
				<label for="genre">Жанр</label>
				<select class="input" name="genre" id="genre">
					<?php foreach ($genres as $genre): ?>
					<option value="<?=$genre?>"> <?=$genre?> </option>
					<?php endforeach; ?>
				</select>
				<input class="input" type="button" value="Поиск" onclick="getByGenre()">
			</div>

			<div class="table-container">
				<table>
					<thead>
						<tr>
							<th>Название</th>
							<th>Дата выхода</th>
							<th>Страна</th>
							<th>Режисёр</th>
						</tr>
					</thead>
					<tbody id="tbody-genre">
					</tbody>
				</table>
			</div>

		</div>


		<h2>Выборка фильмов по актёрам</h2>
		<div class="container">

			<div class="form-container">
				<label for="actor">Актёр</label>
				<select class="input" name="actor" id="actor">
					<?php foreach ($actors as $actor): ?>
					<option value="<?=$actor?>"> <?=$actor?> </option>
					<?php endforeach; ?>
				</select>
				<input class="input" type="button" value="Поиск" onclick="getByActor()">
			</div>

			<div class="table-container">
				<table>
					<thead>
						<tr>
						    <th>Название</th>
							<th>Дата выхода</th>
							<th>Страна</th>
							<th>Режисёр</th>
						</tr>
					</thead>
					<tbody id="tbody-actor">
					</tbody>
				</table>
			</div>

		</div>

	
		<h2>Выборка фильмов за период</h2>
		<div class="container">

			<div class="form-container">
				<label for="start">С </label>
				<input class="input" type="date" name="start" id="start" value=<?=$date_defaults['min']?>>

				<label for="end">По </label>
				<input class="input" type="date" name="end" id="end" value=<?=$date_defaults['max']?>>

				<input class="input" type="button" value="Поиск" onclick="getByTimePeriod()">
			</div>

			<div class="table-container">
				<table>
					<thead>
						<tr>
						    <th>Название</th>
							<th>Дата выхода</th>
							<th>Страна</th>
							<th>Режисёр</th>
						</tr>
					</thead>
					<tbody id="tbody-time">
					</tbody>
				</table>
			</div>

		</div>
	</main>
</body>
</html>
