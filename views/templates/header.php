<?php 
// $categorieController = new CategorieController();
// $categories = $categorieController->getCategories();
// echo var_dump($categories);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MGLSI News</title>
  <link rel="stylesheet" href="/css/styles.css">
  <!-- <style>
    body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

header {
  background: #333;
  color: #fff;
  padding: 10px 0;
  text-align: center;
}

nav ul {
  padding: 0;
  list-style: none;
  text-align: center;
}

nav ul li {
  display: inline;
  margin: 0 10px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
}

main {
  padding: 20px;
}

.articles article {
  background: #fff;
  padding: 20px;
  margin: 20px 0;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

  </style> -->
</head>
<body>
  <header>
    <nav>
      <ul>
        <?php if (isset($categories)): ?>
          <?php foreach ($categories as $category): ?>
            <li>
              <a href="/category/<?= $category->id; ?>">
                <?= $category->libelle; ?>
              </a>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </nav>
  </header>
  <main>
