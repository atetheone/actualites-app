<?php include 'includes/header.php'; ?>

<h1><?php echo $category['libelle']; ?> Articles</h1>

<div class="articles">
    <?php foreach ($articles as $article): ?>
        <article>
            <h2><?php echo $article['titre']; ?></h2>
            <p><?php echo $article['contenu']; ?></p>
        </article>
    <?php endforeach; ?>
</div>

<?php include 'includes/footer.php'; ?>
