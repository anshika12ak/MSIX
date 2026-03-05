<?php require __DIR__ . '/includes/bootstrap.php'; render_header(t('page.services'), 'services'); ?>
<section class="inner-hero page-hero" style="--hero-bg:url('<?= h(content_img('engineering services automation design development', 3)) ?>')">
    <div class="container">
        <p class="eyebrow"><?= h($lang === 'it' ? 'I Nostri Servizi' : 'Our Services') ?></p>
        <h1><?= h($lang === 'it' ? 'Servizi e Soluzioni di Ingegneria' : 'Engineering Services & Solutions') ?></h1>
        <p><?= h($lang === 'it' ? 'Progettazione, sviluppo, analisi e supporto all\'esecuzione integrati per progetti e prodotti industriali.' : 'Integrated design, development, analysis, and execution support for industrial projects and products.') ?></p>
    </div>
</section>
<section class="page-content">
    <div class="container">
        <div class="services-grid">
            <?php foreach ($services as $service): ?>
                <article class="service-card"><img class="service-thumb" src="<?= h($service['img'] ?? content_img($service['title'] . ' ' . $service['desc'], 14)) ?>" alt="<?= h($service['title']) ?>"><div class="service-icon"><?= h($service['icon']) ?></div><h3><?= h($service['title']) ?></h3><p><?= h($service['desc']) ?></p><div class="service-expand"><?= h($lang === 'it' ? 'Scopri di più' : 'Learn more') ?> ?</div></article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php render_footer(); ?>
