<?php
require_once __DIR__ . '/includes/bootstrap.php';
$it = $lang === 'it';
render_header(t('page.how_we_work'), 'how_we_work');

$processSteps = [
    [
        'step' => '1',
        'title' => $it ? 'Comprensione' : 'Understand',
        'wording' => $it ? "Discutiamo le vostre esigenze e concordiamo l'ambito del progetto." : 'We discuss your requirement and agree the scope.',
        'details' => $it ? [
            'Analisi approfondita delle specifiche tecniche, delle tolleranze e degli standard normativi',
            'Definizione dell\'ambito contrattuale, dei parametri di budget e del programma di consegna',
            'Definizione concordata dell\'ambito, delle responsabilità e della roadmap'
        ] : [
            'In-depth review of technical specifications, tolerances, and regulatory standards',
            'Definition of contractual scope, budget parameters, and delivery schedule',
            'Agreed scope, responsibilities and roadmap'
        ],
    ],
    [
        'step' => '2',
        'title' => $it ? 'Connessione' : 'Connect',
        'wording' => $it ? 'Identifichiamo le risorse tecniche e i partner locali necessari.' : 'We identify the technical resources and local partners needed.',
        'details' => $it ? [
            'Assegnazione di ingegneri specializzati (CAD/CAE, FEM, automazione PLC)',
            'Audit delle capacità e verifica dei partner di produzione selezionati in India',
            'Verifica delle capacità del fornitore, della documentazione di qualità e della capacità produttiva'
        ] : [
            'Assignment of specialized engineers (CAD/CAE, FEM, PLC automation)',
            'Capability audit and verification of vetted manufacturing partners in India',
            'Verification of supplier capability, quality documentation and capacity'
        ],
    ],
    [
        'step' => '3',
        'title' => $it ? 'Esecuzione' : 'Execute',
        'wording' => $it ? 'Eseguiamo il lavoro concordato rispettando le tappe fondamentali definite.' : 'We carry out the agreed work against defined milestones.',
        'details' => $it ? [
            'Esecuzione fase per fase della progettazione ingegneristica o dei lotti di produzione',
            'Ispezioni dimensionali intermedie, test sui campioni e piani di controllo APQP',
            'Governance tecnica continua dall\'Italia con verifiche in loco presso gli stabilimenti'
        ] : [
            'Phase-by-phase execution of engineering design or manufacturing batches',
            'Intermediate dimensional inspections, sample testing & APQP control plans',
            'Continuous technical governance from Italy with on-ground factory checks'
        ],
    ],
    [
        'step' => '4',
        'title' => $it ? 'Reportistica e supporto' : 'Report & Support',
        'wording' => $it ? 'Riceverete aggiornamenti sullo stato di avanzamento, i risultati concordati e il supporto post-vendita.' : 'You receive progress updates, the agreed deliverables and follow-up support.',
        'details' => $it ? [
            'Consegna del pacchetto tecnico completo, dei rapporti di ispezione e dei verbali di collaudo',
            'Coordinamento delle spedizioni internazionali, imballaggio e sdoganamento',
            'Supporto tecnico continuo post-consegna'
        ] : [
            'Delivery of complete engineering package, inspection reports & test records',
            'International shipping coordination, packaging, and customs clearance',
            'Ongoing post-delivery technical support'
        ],
    ],
];
?>

<!-- Page Hero -->
<section class="page-hero-banner">
    <div class="container reveal-item">
        <span class="eyebrow-pill dark-gold">📋 <?= $it ? 'Quadro di riferimento per il coinvolgimento' : 'Engagement Framework' ?></span>
        <h1><?= h($it ? 'Come Lavoriamo' : 'How We Work') ?></h1>
        <p><?= h($it ? 'Un percorso del cliente semplice e articolato in fasi chiave: dalla richiesta iniziale all’assistenza post-consegna.' : 'A simple, milestone-based customer journey: from initial requirement to post-delivery support.') ?></p>
    </div>
</section>

<!-- 4 Customer Steps -->
<section class="section-pad">
    <div class="container">
        <div class="section-head-wrap text-center reveal-item">
            <span class="eyebrow-pill blue"><?= $it ? 'Le quattro fasi del percorso del cliente' : 'Four Customer Steps' ?></span>
            <h2><?= $it ? 'Dalla definizione dell\'ambito alla consegna finale, senza alcuna ambiguità' : 'From Scoping to Final Delivery with Zero Ambiguity' ?></h2>
            <p><?= $it ? 'Eliminiamo le incertezze legate ai progetti transnazionali grazie a un modello di collaborazione strutturato, perfezionato in oltre 15 anni di esperienza nel settore industriale tra Europa e India.' : 'We eliminate cross-border project uncertainties through a structured engagement model refined over 15+ years of European-Indian industrial experience.' ?></p>
        </div>

        <div class="steps-quad-grid" style="margin-bottom:3rem;">
            <?php foreach ($processSteps as $step): ?>
                <div class="step-card-modern reveal-item">
                    <div class="step-card-badge"><?= h($step['step']) ?></div>
                    <h3><?= h($step['title']) ?></h3>
                    <p style="font-weight:700;color:var(--primary-blue);margin-bottom:0.75rem;font-size:0.92rem;">"<?= h($step['wording']) ?>"</p>
                    <ul class="service-feature-checklist" style="margin-bottom:0;">
                        <?php foreach ($step['details'] as $act): ?>
                            <li><?= h($act) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="section-surface" style="padding:2.2rem;border-radius:var(--radius-xl);border:1px solid var(--border-light);display:flex;align-items:center;justify-content:space-between;gap:1.8rem;flex-wrap:wrap;">
            <div>
                <h3 style="font-family:var(--font-heading);font-size:1.35rem;color:var(--navy-deep);margin-bottom:0.3rem;"><?= $it ? 'Pronti a discutere le esigenze del vostro progetto?' : 'Ready to discuss your project requirement?' ?></h3>
                <p style="font-size:0.95rem;color:var(--text-dark-muted);margin:0;"><?= $it ? 'Consultazione tecnica preliminare diretta a cura di Raghav Kumar (Founder & Director).' : 'Direct preliminary technical consultation with Raghav Kumar (Founder & Director).' ?></p>
            </div>
            <a class="btn btn-primary btn-lg" href="contact.php"><?= h($it ? 'Parliamo' : 'Talk to Us') ?> &rarr;</a>
        </div>
    </div>
</section>

<!-- Interactive FAQ Accordion Section -->
<section class="section-pad section-surface" id="faq">
    <div class="container" style="max-width:880px;">
        <div class="section-head-wrap text-center reveal-item">
            <span class="eyebrow-pill gold">💡 <?= $it ? 'Domande Frequenti' : 'Client FAQ' ?></span>
            <h2><?= $it ? 'Domande Frequenti' : 'Frequently Asked Questions' ?></h2>
            <p><?= $it ? 'Risposte chiare sulla governance europea, sui controlli di qualità in loco presso gli stabilimenti e sulle tappe fondamentali del progetto.' : 'Clear answers on European governance, on-ground factory quality checks, and project milestones.' ?></p>
        </div>

        <div class="faq-accordion-wrap">
            <?php
            $faqs = [
                [
                    'q' => $it ? 'Come garantite gli standard di qualità europei e le tolleranze meccaniche?' : 'How do you ensure European quality standards and mechanical tolerances?',
                    'a' => $it ? 'Ogni progetto viene definito secondo le rigorose tolleranze europee (ISO, DIN, EN) sotto la supervisione dell\'Italia. I nostri ingegneri sul campo conducono audit dei fornitori in fase di pre-produzione, controlli dimensionali in corso d\'opera con CMM, test non distruttivi (NDT) e documentazione di qualità APQP prima della spedizione.' : 'Every project is scoped under strict European tolerances (ISO, DIN, EN) directed from Italy. Our engineers on the ground conduct pre-production vendor audits, in-process CMM dimensional checks, NDT testing, and APQP quality documentation prior to shipping.',
                ],
                [
                    'q' => $it ? 'Chi è il nostro referente principale e in quale fuso orario operate?' : 'Who is our primary point of contact and what timezone do you operate in?',
                    'a' => $it ? 'Il vostro referente diretto è Raghav Kumar (fondatore e amministratore), con sede a Milano, in Italia, che opera nel fuso orario europeo CET/CEST per garantire una comunicazione agevole, riunioni video periodiche per valutare lo stato di avanzamento dei lavori e chiarezza dal punto di vista legale.' : 'Your direct interface is Raghav Kumar (Founder & Director) based in Milan, Italy operating in the European CET/CEST timezone for effortless communication, regular video progress reviews, and legal clarity.',
                ],
                [
                    'q' => $it ? 'Come vengono condotti gli audit di fabbrica e le ispezioni in loco in India?' : 'How are factory audits and on-ground inspections conducted in India?',
                    'a' => $it ? 'Il nostro team tecnico regionale con sede a Calcutta e Delhi visita di persona gli stabilimenti di produzione, ispeziona i macchinari CNC, verifica i certificati di collaudo delle materie prime (MTC) e fornisce rapporti completi con foto e video sulle fasi salienti del processo.' : 'Our regional engineering team in Kolkata and Delhi physically visits manufacturing plants, inspects CNC machinery, verifies raw material test certificates (MTC), and provides comprehensive photo/video milestone reports.',
                ],
                [
                    'q' => $it ? 'In che modo vengono tutelati i pagamenti basati sul raggiungimento di traguardi e la proprietà intellettuale (IP)?' : 'How are milestone-based payments and intellectual property (IP) protected?',
                    'a' => $it ? 'Tutti i progetti sono regolati da solidi accordi di riservatezza europei e da contratti trasparenti basati sul raggiungimento di traguardi. I pagamenti sono direttamente legati ai risultati tecnici concordati e alle verifiche di qualità approvate.' : 'All projects are governed by robust European NDAs and transparent milestone-based contracts. Payments are tied directly to agreed technical deliverables and verified quality sign-offs.',
                ],
            ];
            foreach ($faqs as $idx => $faq):
            ?>
                <div class="faq-accordion-item reveal-item <?= $idx === 0 ? 'is-active' : '' ?>">
                    <button class="faq-accordion-btn" type="button" aria-expanded="<?= $idx === 0 ? 'true' : 'false' ?>">
                        <span class="faq-btn-text"><?= h($faq['q']) ?></span>
                        <span class="faq-icon-indicator" aria-hidden="true"><?= $idx === 0 ? '−' : '+' ?></span>
                    </button>
                    <div class="faq-accordion-content" style="<?= $idx === 0 ? 'max-height: 250px; opacity: 1;' : '' ?>">
                        <p><?= h($faq['a']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php render_footer(); ?>
