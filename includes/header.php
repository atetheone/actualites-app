<?php
include 'db.php';

// Fetch categories for the menu
$query = $conn->query("SELECT id, libelle FROM Categorie");
$categories = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MGLSI News</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <?php foreach ($categories as $category): ?>
                    <li><a href="category.php?id=<?php echo $category['id']; ?>"><?php echo $category['libelle']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
    <main>
