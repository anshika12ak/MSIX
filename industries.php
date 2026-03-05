<?php require __DIR__ . '/includes/bootstrap.php'; render_header(t('page.industries'), 'industries'); ?>
<section class="inner-hero page-hero" style="--hero-bg:url('<?= h(content_img('industries aerospace oil gas mining automation', 8)) ?>')"><div class="container"><p class="eyebrow"><?= h(t('page.industries')) ?></p><h1><?= h($lang === 'it' ? 'Settori in Cui Operiamo' : 'Industries We Serve') ?></h1><p><?= h($lang === 'it' ? 'Supporto ingegneristico specifico per settore, orientato a prestazioni, conformità, producibilità e affidabilità operativa.' : 'Sector-specific engineering support tailored to performance, compliance, manufacturability, and operational reliability.') ?></p></div></section>
<section class="page-content"><div class="container"><div class="industry-grid">
<?php foreach ($industries as $industry): ?>
<a class="industry-card" href="contact.php" style="--bg:url('<?= h($industry['img']) ?>')"><div class="industry-overlay"></div><div class="industry-content"><h3><?= h($industry['name']) ?></h3><span><?= h(t('common.explore')) ?> ?</span></div></a>
<?php endforeach; ?>
</div></div></section>
<?php render_footer(); ?>
