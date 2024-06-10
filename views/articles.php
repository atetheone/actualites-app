<?php include 'templates/header.php'; ?>

<h1>Les Articles</h1>

<div class="articles">
    <?php if (count($articles) > 0): ?>
        <?php foreach ($articles as $article): ?>
            <article>
                <h2><?php echo $article['titre']; ?></h2>
                <p><?php echo $article['contenu']; ?></p>
                <p><em>Category: <?php echo $article['libelle']; ?></em></p>
            </article>
        <?php endforeach; ?>
    <?php else: ?>
        <p> Aucun article trouvé.</p>
    <?php endif; ?>
</div>

<?php include 'templates/footer.php'; ?>
