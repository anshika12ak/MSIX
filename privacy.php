<?php
require_once __DIR__ . '/includes/bootstrap.php';
$it = $lang === 'it';
render_header($it ? 'Informativa sulla Privacy' : 'Privacy Policy', '');
?>

<!-- Page Hero -->
<section class="page-hero-banner">
    <div class="container reveal-item">
        <span class="eyebrow-pill dark-gold"><?= $it ? 'Note Legali' : 'Legal & Compliance' ?></span>
        <h1><?= h($it ? 'Informativa sulla Privacy' : 'Privacy Policy') ?></h1>
        <p><?= h($it ? 'Questa pagina descrive come raccogliamo, utilizziamo e proteggiamo i dati personali in conformità al GDPR UE e alle normative applicabili.' : 'This policy outlines how MSIX collects, manages, and protects your personal and commercial data in compliance with EU GDPR.') ?></p>
    </div>
</section>

<!-- Content -->
<section class="section-pad">
    <div class="container">
        <div style="background:#fff;padding:2.2rem;border-radius:var(--radius-lg);border:1px solid var(--border-light);box-shadow:var(--shadow-card);max-width:860px;margin:0 auto;">
            <h2 style="font-family:var(--font-heading);color:var(--primary-dark);font-size:1.4rem;margin-bottom:0.5rem;"><?= $it ? '1. Dati Raccolti' : '1. Information We Collect' ?></h2>
            <p style="color:var(--text-muted);font-size:0.92rem;line-height:1.6;margin-bottom:1.5rem;"><?= $it ? 'Raccogliamo unicamente i dati aziendali e di contatto (nome, azienda, paese, email, telefono e dettagli del progetto) forniti volontariamente tramite i moduli di richiesta o comunicazioni dirette via email/WhatsApp.' : 'We only collect company and professional contact details (name, company name, country, email address, phone number, and project scope) voluntarily submitted through our enquiry forms or direct correspondence.' ?></p>

            <h2 style="font-family:var(--font-heading);color:var(--primary-dark);font-size:1.4rem;margin-bottom:0.5rem;"><?= $it ? '2. Finalità del Trattamento' : '2. Purpose of Data Processing' ?></h2>
            <p style="color:var(--text-muted);font-size:0.92rem;line-height:1.6;margin-bottom:1.5rem;"><?= $it ? 'I dati sono utilizzati esclusivamente per rispondere alle vostre richieste di preventivo, valutazioni di fattibilità ingegneristica e comunicazioni operative relative ai servizi richiesti.' : 'Your data is strictly utilized to respond to your project inquiries, conduct engineering feasibility assessments, and maintain commercial communication regarding MSIX services.' ?></p>

            <h2 style="font-family:var(--font-heading);color:var(--primary-dark);font-size:1.4rem;margin-bottom:0.5rem;"><?= $it ? '3. Riservatezza & Non Divulgazione' : '3. Confidentiality & Non-Disclosure' ?></h2>
            <p style="color:var(--text-muted);font-size:0.92rem;line-height:1.6;margin-bottom:1.5rem;"><?= $it ? 'Non vendiamo né condividiamo i vostri dati con terze parti non autorizzate. Tutti i documenti tecnici e i disegni CAD/FEM sono protetti da rigorosi standard di riservatezza e accordi NDA reciproci.' : 'We do not sell, rent, or distribute your technical or contact data to unauthorized third parties. All technical drawings, project specifications, and CAD models are treated with strict confidentiality under mutual NDA.' ?></p>

            <h2 style="font-family:var(--font-heading);color:var(--primary-dark);font-size:1.4rem;margin-bottom:0.5rem;"><?= $it ? '4. Contatti per la Privacy' : '4. Privacy Contact & Requests' ?></h2>
            <p style="color:var(--text-muted);font-size:0.92rem;line-height:1.6;margin-bottom:1.5rem;"><?= $it ? 'Per richiedere l’accesso, la rettifica o la cancellazione dei vostri dati personali, potete contattare direttamente il nostro responsabile:' : 'For any privacy inquiries or to request data access or deletion, please contact our data controller directly:' ?> <a href="mailto:<?= h($site['email']) ?>" style="color:var(--accent);font-weight:700;"><?= h($site['email']) ?></a></p>
        </div>
    </div>
</section>

<?php render_footer(); ?>
