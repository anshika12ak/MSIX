<?php
require_once __DIR__ . '/includes/bootstrap.php';
$it = $lang === 'it';
render_header($it ? 'Termini e Condizioni' : 'Terms and Conditions', '');
?>

<!-- Page Hero -->
<section class="page-hero-banner">
    <div class="container reveal-item">
        <span class="eyebrow-pill dark-gold"><?= $it ? 'Note Legali' : 'Legal & Compliance' ?></span>
        <h1><?= h($it ? 'Termini e Condizioni' : 'Terms & Conditions') ?></h1>
        <p><?= h($it ? 'Termini di utilizzo del sito web e condizioni generali relative ai servizi ingegneristici e commerciali di MSIX.' : 'General terms governing website usage, intellectual property, and service engagement with MSIX.') ?></p>
    </div>
</section>

<!-- Content -->
<section class="section-pad">
    <div class="container">
        <div style="background:#fff;padding:2.2rem;border-radius:var(--radius-lg);border:1px solid var(--border-light);box-shadow:var(--shadow-card);max-width:860px;margin:0 auto;">
            <h2 style="font-family:var(--font-heading);color:var(--primary-dark);font-size:1.4rem;margin-bottom:0.5rem;"><?= $it ? '1. Utilizzo del Sito Web' : '1. Website Use & Information' ?></h2>
            <p style="color:var(--text-muted);font-size:0.92rem;line-height:1.6;margin-bottom:1.5rem;"><?= $it ? 'Le informazioni e i contenuti tecnici presenti su questo sito sono forniti a scopo illustrativo dei servizi offerti da MSIX Engineering & Design Solution Pvt. Ltd.' : 'The information and technical summaries on this website are provided for informational and commercial introduction purposes regarding MSIX Engineering & Design Solution services.' ?></p>

            <h2 style="font-family:var(--font-heading);color:var(--primary-dark);font-size:1.4rem;margin-bottom:0.5rem;"><?= $it ? '2. Proprietà Intellettuale' : '2. Intellectual Property' ?></h2>
            <p style="color:var(--text-muted);font-size:0.92rem;line-height:1.6;margin-bottom:1.5rem;"><?= $it ? 'Tutti i marchi, loghi, testi, immagini e contenuti grafici presenti su questo sito sono di proprietà di MSIX o concessi in licenza dai rispettivi titolari. È vietata la riproduzione non autorizzata.' : 'All registered trademarks, logos, texts, images, and graphical assets on this website are the proprietary assets of MSIX or their respective licensors. Unauthorized duplication is prohibited.' ?></p>

            <h2 style="font-family:var(--font-heading);color:var(--primary-dark);font-size:1.4rem;margin-bottom:0.5rem;"><?= $it ? '3. Accordi Contrattuali di Progetto' : '3. Project & Engagement Terms' ?></h2>
            <p style="color:var(--text-muted);font-size:0.92rem;line-height:1.6;margin-bottom:1.5rem;"><?= $it ? 'Ogni incarico di ingegneria, gara o trasferimento tecnologico è regolato da specifici contratti commerciali, specifiche tecniche e traguardi di consegna (milestones) sottoscritti congiuntamente dalle parti.' : 'Every engineering outsourcing, tender support, or technology transfer project is governed by dedicated commercial agreements, agreed technical specifications, and milestone contracts executed between parties.' ?></p>

            <h2 style="font-family:var(--font-heading);color:var(--primary-dark);font-size:1.4rem;margin-bottom:0.5rem;"><?= $it ? '4. Contatti Legali' : '4. Legal Inquiries' ?></h2>
            <p style="color:var(--text-muted);font-size:0.92rem;line-height:1.6;margin-bottom:1.5rem;"><?= $it ? 'Per chiarimenti relativi a questi termini, scrivere a:' : 'For any inquiries regarding these terms and contractual conditions, please contact:' ?> <a href="mailto:<?= h($site['email']) ?>" style="color:var(--accent);font-weight:700;"><?= h($site['email']) ?></a></p>
        </div>
    </div>
</section>

<?php render_footer(); ?>
