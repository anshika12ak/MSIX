<?php
require_once __DIR__ . '/includes/bootstrap.php';
$it = $lang === 'it';

$sent = false;
$error = '';
$input = [
    'name' => '',
    'company' => '',
    'country' => '',
    'email' => '',
    'phone' => '',
    'requirement' => trim((string)($_GET['req'] ?? '')),
    'message' => '',
];

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
    foreach (['name', 'company', 'country', 'email', 'phone', 'requirement', 'message'] as $key) {
        $input[$key] = trim((string)($_POST[$key] ?? ''));
    }

    if (
        $input['name'] === '' ||
        $input['company'] === '' ||
        $input['country'] === '' ||
        !filter_var($input['email'], FILTER_VALIDATE_EMAIL) ||
        $input['requirement'] === '' ||
        $input['message'] === '' ||
        preg_match('/[\r\n]/', $input['email'])
    ) {
        $error = $it
            ? 'Si prega di compilare tutti i campi obbligatori contrassegnati da (*) con un indirizzo email valido.'
            : 'Please complete all required fields (*) with a valid email address.';
    } else {
        $to = $site['email'];
        $subject = 'MSIX Website Enquiry: ' . $input['requirement'] . ' - ' . $input['company'];
        $body = "New inquiry received from MSIX Website:\n\n"
            . "Name: " . $input['name'] . "\n"
            . "Company: " . $input['company'] . "\n"
            . "Country: " . $input['country'] . "\n"
            . "Email: " . $input['email'] . "\n"
            . "Phone: " . ($input['phone'] ?: 'Not provided') . "\n"
            . "Requirement Area: " . $input['requirement'] . "\n\n"
            . "Message / Scope:\n"
            . $input['message'] . "\n\n"
            . "---\n"
            . "Language: " . strtoupper($lang) . "\n"
            . "Submitted at: " . date('Y-m-d H:i:s') . "\n";

        $headers = [
            'From: ' . $site['email'],
            'Reply-To: ' . $input['email'],
            'Content-Type: text/plain; charset=UTF-8'
        ];

        $sent = @mail($to, $subject, $body, implode("\r\n", $headers));
        if (!$sent) {
            error_log('MSIX enquiry mail() failed for ' . $input['email']);
            $error = $it
                ? 'Non è stato possibile inviare la richiesta. Scriveteci a ' . $site['email'] . ' o via WhatsApp.'
                : 'We could not send your enquiry just now. Please email ' . $site['email'] . ' or use WhatsApp.';
        }
    }
}

render_header(t('page.contact'), 'contact');
?>

<!-- Page Hero -->
<section class="page-hero-banner">
    <div class="container reveal-item">
        <span class="eyebrow-pill dark-gold">✉️ <?= $it ? 'Contatto Diretto' : 'Direct Contact' ?></span>
        <h1><?= h($it ? 'Parliamo della Vostra Esigenza' : 'Let’s Discuss Your Requirement') ?></h1>
        <p><?= h($it ? 'Inviateci una breve descrizione del vostro progetto: risponderemo tempestivamente per una valutazione preliminare.' : 'Send us an outline of your engineering, sourcing or market access requirement and we will respond promptly.') ?></p>
    </div>
</section>

<!-- Contact Layout Grid -->
<section class="section-pad">
    <div class="container contact-layout-grid">
        
        <!-- Left: Contact Details -->
        <div class="contact-info-panel reveal-item">
            <div class="contact-person-header">
                <img class="contact-person-avatar" src="<?= h(asset('assets/images/raghav-kumar.jpg')) ?>" alt="Raghav Kumar">
                <div>
                    <h2><?= h($site['contact_name']) ?></h2>
                    <p><strong><?= h($site['contact_role']) ?></strong> (<?= $it ? 'Sede a Milano, Italia' : 'Based in Milan, Italy' ?>)</p>
                </div>
            </div>

            <div class="contact-methods-list">
                <div class="contact-method-item">
                    <span class="icon">✉</span>
                    <div>
                        <span style="font-size:0.78rem;color:var(--text-muted);display:block;"><?= h(t('contact.email_label')) ?>:</span>
                        <a href="mailto:<?= h($site['email']) ?>"><?= h($site['email']) ?></a>
                    </div>
                </div>
                <div class="contact-method-item">
                    <span class="icon">💬</span>
                    <div>
                        <span style="font-size:0.78rem;color:var(--text-muted);display:block;">WhatsApp:</span>
                        <a href="<?= h($site['whatsapp_link']) ?>" target="_blank" rel="noopener noreferrer" style="color:#16a34a;">+39 351 971 5596 (<?= $it ? 'Chat Diretta' : 'Direct Chat' ?>)</a>
                    </div>
                </div>
                <div class="contact-method-item">
                    <span class="icon">📍</span>
                    <div>
                        <span style="font-size:0.78rem;color:var(--text-muted);display:block;"><?= $it ? 'Sedi Operative' : 'Operating Presence' ?>:</span>
                        <span style="font-size:0.86rem;color:var(--text-main);line-height:1.4;display:block;">
                            • <strong>Milan, Italy:</strong> <?= $it ? 'Direzione Europea' : 'European Direction' ?><br>
                            • <strong>Delhi, India:</strong> <?= $it ? 'Presidio Gare & Istituzioni' : 'Tenders & Regulatory' ?><br>
                            • <strong>Kolkata, India:</strong> <?= $it ? 'Ingegneria & Fornitori' : 'Engineering & Sourcing' ?>
                        </span>
                    </div>
                </div>
            </div>

            <div style="background:var(--bg-alt);padding:0.9rem;border-radius:var(--radius-sm);border:1px solid var(--border-light);font-size:0.82rem;color:var(--text-muted);line-height:1.45;">
                <strong style="color:var(--primary-dark);display:block;margin-bottom:0.2rem;">🔒 <?= $it ? 'Riservatezza Garantita' : 'Confidentiality & Response' ?></strong>
                <?= $it ? 'Trattiamo ogni informazione e disegno con la massima riservatezza e con discrezione.' : 'All technical documents and inquiries are handled under strict confidentiality and with discretion.' ?>
            </div>
        </div>

        <!-- Right: Structured Enquiry Form -->
        <div class="contact-form-panel reveal-item">
            <h3><?= $it ? 'Modulo di Richiesta' : 'Project Requirement Form' ?></h3>
            <p class="subtext"><?= $it ? 'Compilate i campi sottostanti per indirizzare la richiesta al team tecnico.' : 'Please provide your project details below.' ?></p>

            <?php if ($sent): ?>
                <div class="notice-box success">
                    <strong>✓ <?= $it ? 'Richiesta Inviata con Successo!' : 'Enquiry Received Successfully!' ?></strong><br>
                    <?= $it ? 'Grazie per averci contattato. Raghav Kumar e il team tecnico esamineranno la vostra richiesta e vi contatteranno a breve.' : 'Thank you. Your enquiry has been received and routed to Raghav Kumar (info@m6eds.com). We will get back to you shortly.' ?>
                </div>
            <?php endif; ?>

            <?php if ($error): ?>
                <div class="notice-box error">
                    <strong>⚠️ <?= h($error) ?></strong>
                </div>
            <?php endif; ?>

            <form method="post" action="contact.php" class="form-grid">
                <div class="form-row-duo">
                    <label class="form-field">
                        <span><?= h(t('contact.name')) ?> <span class="req">*</span></span>
                        <input type="text" name="name" required placeholder="Mario Rossi / John Doe" value="<?= h($input['name']) ?>">
                    </label>
                    <label class="form-field">
                        <span><?= h(t('contact.company')) ?> <span class="req">*</span></span>
                        <input type="text" name="company" required placeholder="Acme Engineering SpA" value="<?= h($input['company']) ?>">
                    </label>
                </div>

                <div class="form-row-duo">
                    <label class="form-field">
                        <span><?= h(t('contact.country')) ?> <span class="req">*</span></span>
                        <input type="text" name="country" required placeholder="Italy, Germany, France, India" value="<?= h($input['country']) ?>">
                    </label>
                    <label class="form-field">
                        <span><?= h(t('contact.email_label')) ?> <span class="req">*</span></span>
                        <input type="email" name="email" required placeholder="name@company.com" value="<?= h($input['email']) ?>">
                    </label>
                </div>

                <div class="form-row-duo">
                    <label class="form-field">
                        <span><?= h(t('contact.phone')) ?></span>
                        <input type="tel" name="phone" placeholder="+39 ..." value="<?= h($input['phone']) ?>">
                    </label>
                    <label class="form-field">
                        <span><?= h(t('contact.requirement')) ?> <span class="req">*</span></span>
                        <select name="requirement" required>
                            <option value=""><?= $it ? '-- Seleziona --' : '-- Select One --' ?></option>
                            <?php
                            $options = [
                                'Market Access / Tenders' => $it ? 'Accesso al Mercato / Gare' : 'Market Access / Tenders',
                                'Engineering Support' => $it ? 'Supporto Ingegneria & CAD/FEM' : 'Engineering Support (CAD/FEM)',
                                'Sourcing / Technology Transfer' => $it ? 'Sourcing / Trasferimento Tecnologico' : 'Sourcing / Technology Transfer',
                                'Other' => $it ? 'Altra Richiesta' : 'Other Industrial Requirement',
                            ];
                            foreach ($options as $val => $label):
                                $isSelected = ($input['requirement'] === $val) || (isset($_GET['req']) && $_GET['req'] === $val);
                            ?>
                                <option value="<?= h($val) ?>" <?= $isSelected ? 'selected' : '' ?>><?= h($label) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                </div>

                <label class="form-field">
                    <span><?= h(t('contact.message')) ?> <span class="req">*</span></span>
                    <textarea name="message" rows="4" required placeholder="<?= $it ? 'Descrivete brevemente le specifiche tecniche, il settore o gli obiettivi del vostro progetto...' : 'Describe your project requirements, technical specifications, or timeline expectations...' ?>"><?= h($input['message']) ?></textarea>
                </label>

                <p style="font-size:0.78rem;color:var(--text-muted);margin:0;">
                    🔒 <?= $it ? 'Inviando questo modulo accetti la nostra' : 'By submitting this form, you agree to our' ?>
                    <a href="privacy.php" target="_blank" style="color:var(--accent);text-decoration:underline;"><?= h(t('footer.privacy')) ?></a>.
                </p>

                <button class="btn btn-primary btn-block" type="submit">
                    <?= h(t('contact.send')) ?> &rarr;
                </button>
            </form>
        </div>

    </div>
</section>

<?php render_footer(); ?>
