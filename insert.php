<?php

$dsn = 'mysql:host=localhost;dbname=Biebboom';
$username = 'root';
$password = '';

$conn = new PDO($dsn, $username, $password);

$naam = trim($_POST['Naam']);
$genre = trim($_POST['Genre']);
$auteur = trim($_POST['Auteur']);
$leesniveau = trim($_POST['Leesniveau']);
$beoordeling = $_POST['Beoordeling'];
$jaar = $_POST['jaar'];

if(empty($naam) || empty($genre) || empty($auteur) || empty($leesniveau)){
    die("Alle velden moeten ingevuld zijn.");
}

if(!is_numeric($beoordeling)){
    die("Beoordeling moet een nummer zijn.");
}

if(!is_numeric($jaar)){
    die("Jaar moet een nummer zijn.");
}

$query = $conn->prepare("
INSERT INTO biebboom
(Naam, Genre, Auteur, Leesniveau, Beoordeling, `Uitgegeven jaar`)
VALUES
(:naam, :genre, :auteur, :leesniveau, :beoordeling, :jaar)
");

$query->execute([
"naam" => $naam,
"genre" => $genre,
"auteur" => $auteur,
"leesniveau" => $leesniveau,
"beoordeling" => $beoordeling,
"jaar" => $jaar
]);

header("Location: php.php");

?>