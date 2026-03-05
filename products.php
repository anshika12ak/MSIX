<?php require __DIR__ . '/includes/bootstrap.php'; render_header(t('page.products'), 'products'); ?>
<section class="inner-hero page-hero" style="--hero-bg:url('<?= h(content_img('industrial products manufacturing automation', 7)) ?>')"><div class="container"><p class="eyebrow"><?= h(t('page.products')) ?></p><h1><?= h($lang === 'it' ? 'Prodotti Industriali' : 'Industrial Products') ?></h1><p><?= h($lang === 'it' ? 'Supporto ingegneristico per apparecchiature industriali e prodotti di automazione in operazioni complesse.' : 'Engineering-backed industrial equipment and automation product support for demanding operations.') ?></p></div></section>
<section class="page-content"><div class="container"><div class="product-grid">
<?php foreach ($products as $idx => $product): ?>
<article class="product-card"><img src="<?= h(content_img($product, 22 + $idx)) ?>" alt="<?= h($product) ?>"><div class="product-body"><h3><?= h($product) ?></h3><p><?= h($lang === 'it' ? 'Supporto industriale per selezione, integrazione e pianificazione della consegna progetto.' : 'Industrial-grade support for selection, integration, and project delivery planning.') ?></p><a class="btn btn-small btn-outline-dark" href="contact.php"><?= h(t('common.request_quote')) ?></a></div></article>
<?php endforeach; ?>
</div></div></section>
<?php render_footer(); ?>
