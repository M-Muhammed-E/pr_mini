<!DOCTYPE html>
<html lang="en">

<header>
<h1>Bibliotheek</h1>
<nav>
<a href="php.php">Boeken</a> |
<a href="boektoevoegen.php">Boek toevoegen</a>
</nav>
<hr>
</header>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Nieuw boek toevoegen</h2>

<form method="POST" action="insert.php">

Naam:<br>
<input type="text" name="Naam" required><br>

Genre:<br>
<input type="text" name="Genre" required><br>

Auteur:<br>
<input type="text" name="Auteur" required><br>

Leesniveau:<br>
<input type="text" name="Leesniveau" required><br>

Beoordeling (1-10):<br>
<input type="number" name="Beoordeling" min="1" max="10" required><br>

Uitgegeven jaar:<br>
<input type="number" name="jaar" min="1000" max="2100" required><br><br>

<button type="submit">Boek opslaan</button>

</form>


</body>
<footer>
<hr>
<p>© Bibliotheek 2026</p>
</footer>
</html>