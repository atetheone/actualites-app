# actualites-app

<?php include 'includes/header.php'; ?>

<h1>All Articles</h1>

<?php
$query = $conn->query("SELECT Article.titre, Article.contenu, Categorie.libelle 
                       FROM Article 
                       JOIN Categorie ON Article.categorie = Categorie.id 
                       ORDER BY Article.dateCreation DESC");

$articles = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="articles">
    <?php foreach ($articles as $article): ?>
        <article>
            <h2><?php echo $article['titre']; ?></h2>
            <p><?php echo $article['contenu']; ?></p>
            <p><em>Category: <?php echo $article['libelle']; ?></em></p>
        </article>
    <?php endforeach; ?>
</div>

<?php include 'includes/footer.php'; ?>
