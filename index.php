<?php
require "db.php";

if(isset($_GET['zoek']) && $_GET['zoek'] != ''){

$zoek = "%" . $_GET['zoek'] . "%";

$query = $conn->prepare("
SELECT * FROM biebboom
WHERE Naam LIKE :zoek OR Auteur LIKE :zoek
");

$query->execute([
"zoek" => $zoek
]);

$data = $query->fetchAll(PDO::FETCH_ASSOC);

}else{

$sql = "SELECT * FROM biebboom";
$stmt = $conn->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bibliotheek</title>

<link rel="stylesheet" href="style.css">

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

<form method="GET">
<input type="text" name="zoek" placeholder="Zoek op titel of auteur">
<button type="submit">Zoeken</button>
</form>

<table>

<tr>
<th>ID</th>
<th>Naam</th>
<th>Genre</th>
<th>Auteur</th>
<th>Leesniveau</th>
<th>Beoordeling</th>
<th>Uitgegeven jaar</th>
</tr>

<?php foreach ($data as $rows) { ?>

<tr>
<td><?= $rows['ID'] ?></td>
<td><?= $rows['Naam'] ?></td>
<td><?= $rows['Genre'] ?></td>
<td><?= $rows['Auteur'] ?></td>
<td><?= $rows['Leesniveau'] ?></td>
<td><?= $rows['Beoordeling'] ?></td>
<td><?= $rows['Uitgegeven jaar'] ?></td>
</tr>

<?php } ?>

</table>

</main>

<footer>
<p>© Bibliotheek 2026</p>
</footer>

</body>
</html>