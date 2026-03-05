<?php
require __DIR__ . '/includes/bootstrap.php';
render_header($lang === 'it' ? 'Informativa sulla Privacy' : 'Privacy Policy', '');
?>
<section class="inner-hero page-hero" style="--hero-bg:url('<?= h(content_img('data privacy policy legal compliance', 20)) ?>')">
    <div class="container">
        <p class="eyebrow"><?= h($lang === 'it' ? 'Legale' : 'Legal') ?></p>
        <h1><?= h($lang === 'it' ? 'Informativa sulla Privacy' : 'Privacy Policy') ?></h1>
        <p><?= h($lang === 'it' ? 'Questa pagina descrive come raccogliamo, utilizziamo e proteggiamo i dati personali.' : 'This page describes how we collect, use, and protect personal data.') ?></p>
    </div>
</section>
<section class="page-content">
    <div class="container">
        <div class="content-card">
            <h2><?= h($lang === 'it' ? 'Dati Raccolti' : 'Data We Collect') ?></h2>
            <p><?= h($lang === 'it' ? 'Possiamo raccogliere nome, email, telefono e dettagli del messaggio inviati tramite i moduli di contatto.' : 'We may collect your name, email, phone number, and message details submitted via contact forms.') ?></p>
            <h2><?= h($lang === 'it' ? 'Uso dei Dati' : 'How We Use Data') ?></h2>
            <p><?= h($lang === 'it' ? 'Utilizziamo i dati per rispondere alle richieste, fornire supporto e migliorare i nostri servizi.' : 'We use data to respond to inquiries, provide support, and improve our services.') ?></p>
            <h2><?= h($lang === 'it' ? 'Conservazione e Sicurezza' : 'Retention and Security') ?></h2>
            <p><?= h($lang === 'it' ? 'Adottiamo misure tecniche e organizzative ragionevoli per proteggere i dati personali.' : 'We apply reasonable technical and organizational measures to protect personal data.') ?></p>
            <h2><?= h($lang === 'it' ? 'Contatti' : 'Contact') ?></h2>
            <p><?= h($lang === 'it' ? 'Per richieste sulla privacy puoi scriverci a:' : 'For privacy-related requests, contact us at:') ?> <a href="mailto:<?= h($site['email']) ?>"><?= h($site['email']) ?></a></p>
        </div>
    </div>
</section>
<?php render_footer(); ?>
