<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MGLSI News</title>
  <link rel="stylesheet" href="public/css/styles.css">
  <script src="public/js/main.js" defer></script>
</head>
<body>
  <header>
    <nav>
      <div class="home"><a  id="home-link" href="index.php">Accueil</a></div>
      <ul>
        <?php 
          foreach ($categories as $categorie) {
            echo '
              <li>
                <a id="category-' . $categorie['id'] . '" href="index.php?categorie=' . $categorie['id'] . '">'
                  . $categorie['libelle'] . '
                </a>
              </li>
            ';
          }
        ?>
      </ul>
    </nav>
  </header>
  <main>
