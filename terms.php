<?php
require __DIR__ . '/includes/bootstrap.php';
render_header($lang === 'it' ? 'Termini e Condizioni' : 'Terms and Conditions', '');
?>
<section class="inner-hero page-hero" style="--hero-bg:url('<?= h(content_img('legal terms contract compliance', 21)) ?>')">
    <div class="container">
        <p class="eyebrow"><?= h($lang === 'it' ? 'Legale' : 'Legal') ?></p>
        <h1><?= h($lang === 'it' ? 'Termini e Condizioni' : 'Terms and Conditions') ?></h1>
        <p><?= h($lang === 'it' ? 'L\'utilizzo di questo sito implica l\'accettazione dei presenti termini.' : 'Use of this website implies acceptance of these terms.') ?></p>
    </div>
</section>
<section class="page-content">
    <div class="container">
        <div class="content-card">
            <h2><?= h($lang === 'it' ? 'Uso del Sito' : 'Website Use') ?></h2>
            <p><?= h($lang === 'it' ? 'I contenuti sono forniti a scopo informativo. L\'uso improprio del sito è vietato.' : 'Content is provided for informational purposes. Misuse of the website is prohibited.') ?></p>
            <h2><?= h($lang === 'it' ? 'Proprietà Intellettuale' : 'Intellectual Property') ?></h2>
            <p><?= h($lang === 'it' ? 'Testi, marchi, immagini e materiali presenti sul sito restano di proprietà dei rispettivi titolari.' : 'Texts, trademarks, images, and materials on this website remain the property of their respective owners.') ?></p>
            <h2><?= h($lang === 'it' ? 'Limitazione di Responsabilità' : 'Limitation of Liability') ?></h2>
            <p><?= h($lang === 'it' ? 'Non garantiamo che il sito sia sempre privo di errori o interruzioni e non rispondiamo per danni indiretti.' : 'We do not guarantee uninterrupted or error-free operation and are not liable for indirect damages.') ?></p>
            <h2><?= h($lang === 'it' ? 'Modifiche ai Termini' : 'Changes to Terms') ?></h2>
            <p><?= h($lang === 'it' ? 'Ci riserviamo il diritto di aggiornare questi termini in qualsiasi momento.' : 'We reserve the right to update these terms at any time.') ?></p>
        </div>
    </div>
</section>
<?php render_footer(); ?>
