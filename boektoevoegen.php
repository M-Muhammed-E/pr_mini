<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<title>Boek toevoegen</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<header>

<h1>Bibliotheek</h1>

<nav>
<a href="index.php">Boeken</a>
<a href="boektoevoegen.php">Boek toevoegen</a>
</nav>

</header>

<main>

<h2>Nieuw boek toevoegen</h2>

<form method="POST" action="insert.php" id="boekForm">

<label>Naam</label>
<input type="text" name="Naam" required>

<label>Genre</label>
<input type="text" name="Genre" required>

<label>Auteur</label>
<input type="text" name="Auteur" required>

<label>Leesniveau</label>

<select name="Leesniveau" required>

<option value="">-- Kies niveau --</option>
<option value="A1">A1</option>
<option value="A2">A2</option>
<option value="B1">B1</option>
<option value="B2">B2</option>
<option value="C1">C1</option>
<option value="C2">C2</option>

</select>

<label>Beoordeling</label>
<input type="number" name="Beoordeling" min="1" max="10" required>

<label>Uitgegeven jaar</label>
<input type="number" name="jaar" min="1000" max="2100" required>

<button type="submit">Boek opslaan</button>

</form>

</main>

<footer>
<p>© Bibliotheek 2026</p>
</footer>

<script src="js/script.js"></script>

</body>
</html>