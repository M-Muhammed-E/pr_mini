<?php
$dsn = 'mysql:host=localhost;dbname=Biebboom';
$username = 'root';
$password = '';

$conn = new PDO($dsn, $username, $password);

if(isset($_GET['zoek']) && $_GET['zoek'] != ''){
    
    $zoek = "%" . $_GET['zoek'] . "%";

    $query = $conn->prepare("
        SELECT * FROM biebboom
        WHERE 
        ID LIKE :zoek OR
        Naam LIKE :zoek OR
        Genre LIKE :zoek OR
        Auteur LIKE :zoek OR
        Leesniveau LIKE :zoek OR
        Beoordeling LIKE :zoek OR
        `Uitgegeven jaar` LIKE :zoek
    ");

    $query->execute([
        "zoek" => $zoek
    ]);

    $data = $query->fetchAll(PDO::FETCH_ASSOC);

} else {

    $sql = "SELECT * FROM biebboom";
    $stmt = $conn->query($sql);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

}
?>

<form method="GET">
<input type="text" name="zoek" placeholder="Zoek boek...">
<input type="submit" value="Zoeken">
</form>

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
<title>Boeken</title>

</head>
<body>

<table border="1">
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
    <td><?php echo $rows['ID']; ?></td>
    <td><?php echo $rows['Naam']; ?></td>
    <td><?php echo $rows['Genre']; ?></td>
    <td><?php echo $rows['Auteur']; ?></td>
    <td><?php echo $rows['Leesniveau']; ?></td>
    <td><?php echo $rows['Beoordeling']; ?></td>
    <td><?php echo $rows['Uitgegeven jaar']; ?></td>
</tr>
<?php } ?>

</table>
<footer>
<hr>
<p>© Bibliotheek 2026</p>
</footer>
</body>  
</html>
