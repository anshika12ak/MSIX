<?php
require_once __DIR__ . '/includes/bootstrap.php';
$it = $lang === 'it';
render_header(t('page.how_we_work'), 'how_we_work');

$processSteps = [
    [
        'step' => '1',
        'title' => $it ? 'Comprendere' : 'Understand',
        'wording' => $it ? 'Discutiamo la vostra esigenza e concordiamo l’ambito.' : 'We discuss your requirement and agree the scope.',
        'details' => $it ? [
            'Analisi approfondita delle specifiche tecniche, tolleranze e requisiti normativi',
            'Definizione dell’ambito contrattuale, budget e tempistiche di consegna',
            'Ambito, responsabilità e programma concordati'
        ] : [
            'In-depth review of technical specifications, tolerances, and regulatory standards',
            'Definition of contractual scope, budget parameters, and delivery schedule',
            'Agreed scope, responsibilities and roadmap'
        ],
    ],
    [
        'step' => '2',
        'title' => $it ? 'Collegare' : 'Connect',
        'wording' => $it ? 'Identifichiamo le risorse tecniche e i partner locali necessari.' : 'We identify the technical resources and local partners needed.',
        'details' => $it ? [
            'Assegnazione di ingegneri specializzati (CAD, FEM, automazione PLC)',
            'Audit di capacità e verifica diretta dei fornitori qualificati in India',
            'Controllo delle certificazioni di qualità (ISO, CE) e capacità produttiva'
        ] : [
            'Assignment of specialized engineers (CAD/CAE, FEM, PLC automation)',
            'Capability audit and verification of vetted manufacturing partners in India',
            'Verification of supplier capability, quality documentation and capacity'
        ],
    ],
    [
        'step' => '3',
        'title' => $it ? 'Eseguire' : 'Execute',
        'wording' => $it ? 'Svolgiamo il lavoro concordato secondo traguardi definiti.' : 'We carry out the agreed work against defined milestones.',
        'details' => $it ? [
            'Esecuzione delle attività ingegneristiche o produttive fase per fase',
            'Controlli dimensionali intermedi, collaudi su campioni e verifiche APQP',
            'Supervisione continua dall’Italia e controlli fisici in loco'
        ] : [
            'Phase-by-phase execution of engineering design or manufacturing batches',
            'Intermediate dimensional inspections, sample testing & APQP control plans',
            'Continuous technical governance from Italy with on-ground factory checks'
        ],
    ],
    [
        'step' => '4',
        'title' => $it ? 'Report & Supporto' : 'Report & Support',
        'wording' => $it ? 'Ricevete aggiornamenti sull’avanzamento, i deliverable concordati e supporto successivo.' : 'You receive progress updates, the agreed deliverables and follow-up support.',
        'details' => $it ? [
            'Consegna del pacchetto documentale completo e certificati di conformità',
            'Coordinamento per spedizione sicura e sdoganamento',
            'Supporto tecnico continuativo e assistenza post-consegna'
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
        <span class="eyebrow-pill dark-gold">📋 <?= $it ? 'Processo di Lavoro' : 'Engagement Framework' ?></span>
        <h1><?= h($it ? 'Come Lavoriamo' : 'How We Work') ?></h1>
        <p><?= h($it ? 'Un processo semplice, chiaro e strutturato, dall’esigenza iniziale al supporto post-consegna.' : 'A simple, milestone-based customer journey from initial requirement to post-delivery support.') ?></p>
    </div>
</section>

<!-- 4 Customer Steps -->
<section class="section-pad">
    <div class="container">
        <div class="section-head-wrap text-center reveal-item">
            <span class="eyebrow-pill blue"><?= $it ? 'Quattro Fasi Chiare' : 'Four Customer Steps' ?></span>
            <h2><?= $it ? 'Dalla Definizione dell’Ambito alla Consegna Finale' : 'From Scoping to Final Delivery with Zero Ambiguity' ?></h2>
            <p><?= $it ? 'Eliminiamo le incertezze nei progetti transfrontalieri grazie a un metodo di lavoro collaudato in 15+ anni di esperienza tecnica e di gestione.' : 'We eliminate cross-border project uncertainties through a structured engagement model refined over 15+ years of European-Indian industrial experience.' ?></p>
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
                <h3 style="font-family:var(--font-heading);font-size:1.35rem;color:var(--navy-deep);margin-bottom:0.3rem;"><?= $it ? 'Pronti a discutere la vostra esigenza?' : 'Ready to discuss your project requirement?' ?></h3>
                <p style="font-size:0.95rem;color:var(--text-dark-muted);margin:0;"><?= $it ? 'Valutazione tecnica preliminare a cura di Raghav Kumar (Founder & Director).' : 'Direct preliminary technical consultation with Raghav Kumar (Founder & Director).' ?></p>
            </div>
            <a class="btn btn-primary btn-lg" href="contact.php"><?= h(t('common.talk_to_us')) ?> &rarr;</a>
        </div>
    </div>
</section>

<!-- Interactive FAQ Accordion Section -->
<section class="section-pad section-surface" id="faq">
    <div class="container" style="max-width:880px;">
        <div class="section-head-wrap text-center reveal-item">
            <span class="eyebrow-pill gold">💡 <?= $it ? 'Domande Frequenti' : 'Client FAQ' ?></span>
            <h2><?= $it ? 'Domande Comuni sulla Nostra Collaborazione' : 'Frequently Asked Questions' ?></h2>
            <p><?= $it ? 'Tutto quello che c’è da sapere su governance, controlli di qualità e gestione dei progetti transfrontalieri.' : 'Clear answers on European governance, on-ground factory quality checks, and project milestones.' ?></p>
        </div>

        <div class="faq-accordion-wrap">
            <?php
            $faqs = [
                [
                    'q' => $it ? 'Come garantite la conformità alle tolleranze e agli standard di qualità europei?' : 'How do you ensure European quality standards and mechanical tolerances?',
                    'a' => $it ? 'Ogni progetto viene definito con specifiche tecniche rigorose (ISO, DIN, EN) coordinate direttamente da Milano. Il nostro team sul campo a Kolkata esegue audit di produzione, controlli dimensionali, test non distruttivi (NDT) e documentazione di qualità APQP prima di qualsiasi spedizione.' : 'Every project is scoped under strict European tolerances (ISO, DIN, EN) directed from Italy. Our engineers on the ground conduct pre-production vendor audits, in-process CMM dimensional checks, NDT testing, and APQP quality documentation prior to shipping.',
                ],
                [
                    'q' => $it ? 'Chi è il nostro referente principale e in quale fuso orario lavoriamo?' : 'Who is our primary point of contact and what timezone do you operate in?',
                    'a' => $it ? 'Il vostro referente diretto è Raghav Kumar (Founder & Director), basato in Italia nel fuso orario CET/CEST europeo. Questo garantisce comunicazioni immediate in lingua e piena responsabilità contrattuale.' : 'Your direct interface is Raghav Kumar (Founder & Director) based in Milan, Italy operating in the European CET/CEST timezone for effortless communication, regular video progress reviews, and legal clarity.',
                ],
                [
                    'q' => $it ? 'Come vengono gestiti gli audit sui fornitori e le ispezioni fisiche in fabbrica?' : 'How are factory audits and on-ground inspections conducted in India?',
                    'a' => $it ? 'Il nostro team con base a Kolkata e Delhi visita fisicamente gli stabilimenti, verifica macchinari, certificazioni dei materiali e processi di lavorazione, fornendo al cliente report fotografici e video dettagliati a ogni fase.' : 'Our regional engineering team in Kolkata and Delhi physically visits manufacturing plants, inspects CNC machinery, verifies raw material test certificates (MTC), and provides comprehensive photo/video milestone reports.',
                ],
                [
                    'q' => $it ? 'Come sono strutturati i pagamenti e la protezione della proprietà intellettuale (IP)?' : 'How are milestone-based payments and intellectual property (IP) protected?',
                    'a' => $it ? 'I contratti e gli accordi di riservatezza (NDA) sono regolati secondo le normative europee. I pagamenti sono legati a milestone trasparenti e approvazioni formali dei campioni o dei deliverable.' : 'All projects are governed by robust European NDAs and transparent milestone-based contracts. Payments are tied directly to agreed technical deliverables and verified quality sign-offs.',
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
