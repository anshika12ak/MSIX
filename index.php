<?php
require_once __DIR__ . '/includes/bootstrap.php';
$it = $lang === 'it';
render_header(t('page.home'), 'home');
?>

<!-- High-Tech Animated Corporate Hero Section -->
<section class="hero-wrapper" id="home">
    <div class="hero-ambient-glow"></div>
    <div class="hero-grid-pattern"></div>
    <div class="header-shell hero-grid">
        <!-- Left Side Content -->
        <div class="hero-content reveal-item">
            <div class="hero-pill-row">
                <span class="hero-live-pill">
                    <span class="live-dot"></span>
                    <span><?= $it ? 'Hub Operativo Attivo' : 'Active EU–IN Operating Hub' ?></span>
                </span>
                <span class="hero-location-pill">
                    <?= flag_italy(16, 11) ?> <span>Milan</span> · <?= flag_india(16, 11) ?> <span>Delhi · Kolkata</span>
                </span>
            </div>
            <h1 class="hero-title">
                <?= $it ? 'Il Vostro Partner Operativo in <span class="text-gradient animated-gradient">India</span>' : 'Your Operating Partner in <span class="text-gradient animated-gradient">India</span>' ?>
            </h1>
            <p class="hero-desc">
                <?= h($it ? 'Supporto all\'ingegneria, all’approvvigionamento e all\'ingresso nel mercato Indiano per le aziende industriali europee, coordinato direttamente dall\'Italia.' : 'Engineering, sourcing and market-entry support for European industrial companies, coordinated directly from Italy.') ?>
            </p>
            <div class="hero-actions">
                <a class="btn btn-primary btn-lg btn-hero-pulse" href="services.php">
                    <span class="btn-live-radar-dot"></span>
                    <span><?= h($it ? 'Scopri Cosa Offriamo' : 'See What We Offer') ?> &rarr;</span>
                </a>
                <a class="btn btn-outline-white btn-lg btn-hero-contact" href="contact.php">
                    <span><?= h($it ? 'Parla con noi, con Raghav' : 'Talk to Us') ?></span>
                </a>
            </div>
            <div class="hero-trust-bar">
                <div class="trust-item">
                    <span class="trust-check-icon">✓</span>
                    <span><?= $it ? 'Coordinamento diretto dall’Italia/dall’Europa' : 'Direct European governance from Italy' ?></span>
                </div>
                <div class="trust-item">
                    <span class="trust-check-icon">✓</span>
                    <span><?= $it ? 'Presenza fisica a Delhi e Kolkata' : 'On-ground execution in Delhi & Kolkata' ?></span>
                </div>
            </div>
        </div>

        <!-- Right Side Visual Frame -->
        <div class="hero-visual-col reveal-item">
            <div class="hero-card-frame">
                <div class="hero-image-glow-ring"></div>
                <img class="hero-main-img" src="<?= h(asset('assets/images/hero-industrial.jpg')) ?>" alt="Industrial Engineering and Manufacturing Plant">
                
                <!-- Floating Card 1: Raghav Kumar Governance (Top) -->
                <div class="hero-floating-card top-float">
                    <div class="float-icon-bubble"><?= flag_italy(24, 16) ?></div>
                    <div>
                        <strong><?= $it ? 'Direzione Tecnica & Controllo Qualità' : 'Technical Governance & Quality' ?></strong>
                        <span><?= $it ? 'Supervisionata e/o diretta da Raghav Kumar' : 'Directed by Raghav Kumar' ?></span>
                    </div>
                </div>

                <!-- Floating Card 2: Experience & Standards (Bottom) -->
                <div class="hero-floating-card bottom-float">
                    <div class="float-icon-bubble">⚡</div>
                    <div>
                        <strong><?= $it ? 'Oltre 15 Anni di Esperienza' : '15+ Years Experience' ?></strong>
                        <span><?= $it ? 'Conformità agli Standard di Qualità Europei' : 'European Quality Standards' ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Facts & Metrics Bar -->
<section class="facts-strip-section">
    <div class="container">
        <div class="facts-quad-grid">
            <div class="fact-col reveal-item">
                <div class="fact-big-number" data-counter="15" data-suffix="+">15+</div>
                <div class="fact-details">
                    <strong><?= h($it ? 'Anni di Esperienza' : 'Years of Experience') ?></strong>
                    <span><?= $it ? 'Progettazione meccanica & gestione dei progetti' : 'Mechanical design & project leadership' ?></span>
                </div>
            </div>
            <div class="fact-col reveal-item">
                <div class="fact-big-number" data-counter="3" data-suffix="">3</div>
                <div class="fact-details">
                    <strong><?= h($it ? 'Aree di Servizio' : 'Core Service Areas') ?></strong>
                    <span><?= $it ? 'Accesso al mercato, ingegneria CAD/FEM, trasferimento tecnologico' : 'Market access, CAD/FEM Engineering, Technology Transfer' ?></span>
                </div>
            </div>
            <div class="fact-col reveal-item">
                <div class="fact-big-number" data-counter="3" data-suffix=" Hubs">3</div>
                <div class="fact-details">
                    <strong>Milan · Delhi · Kolkata</strong>
                    <span><?= $it ? 'Tre sedi operative integrate strategicamente' : 'Three strategic operating hubs' ?></span>
                </div>
            </div>
            <div class="fact-col reveal-item">
                <div class="fact-big-number">EU–IN</div>
                <div class="fact-details">
                    <strong><?= h($it ? 'Progetti, Attività e Servizi Coordinati dall’Italia' : 'Projects, Activities and Services Coordinated from Italy') ?></strong>
                    <span><?= $it ? 'Unico referente dedicato' : 'One named point of contact' ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Three Core Services Section -->
<section class="section-pad" id="services">
    <div class="container">
        <div class="section-head-wrap text-center reveal-item">
            <span class="eyebrow-pill blue"><?= h($it ? 'Cosa Offriamo' : 'What We Offer') ?></span>
            <h2><?= h($it ? 'Tre Modi in Cui Supportiamo il Vostro Progetto in India' : 'Three Practical Ways We Support Your Project in India') ?></h2>
            <p><?= h($it ? 'Servizi trasparenti e strutturati, progettati per eliminare i rischi transfrontalieri e accelerare il raggiungimento dei vostri obiettivi industriali.' : 'Transparent, structured services designed to eliminate cross-border risk and accelerate your industrial goals.') ?></p>
        </div>

        <?php
        $homeServices = [
            [
                'label' => $it ? 'Attività 01' : 'Service 01',
                'title' => $it ? 'Accesso al mercato e gare d\'appalto in India' : 'Market Access & Tenders in India',
                'icon' => '🌐',
                'img' => asset('assets/images/service-market-access.jpg'),
                'desc' => $it ? 'Assistenza completa per le aziende industriali europee che partecipano a gare d\'appalto pubbliche/private e che intendono espandersi commercialmente in India.' : 'End-to-end guidance for European industrial companies participating in public/private tenders and commercial expansion in India.',
                'details' => $it ? [
                    'Identificazione e presentazione delle qualifiche per la gara d\'appalto',
                    'Verifica delle capacità di partner, distributori e fornitori',
                ] : [
                    'Tender identification and qualification filing',
                    'Partner, distributor and supplier capability checks',
                ]
            ],
            [
                'label' => $it ? 'Attività 02' : 'Service 02',
                'title' => $it ? 'Esternalizzazione tecnica e ingegneristica' : 'Engineering & Technical Outsourcing',
                'icon' => '⚙️',
                'img' => asset('assets/images/service-cad-fem.jpg'),
                'desc' => $it ? 'Progettazione meccanica di precisione, modellazione CAD/CAE, analisi delle sollecitazioni FEM, automazione elettrica e controllo della qualità APQP.' : 'Precision mechanical design, CAD/CAE modeling, FEM stress analysis, electrical automation, and APQP quality governance.',
                'details' => $it ? [
                    'CAD/CAE, disegni di produzione 2D con tolleranze GD&T e modellazione 3D',
                    'Analisi strutturale FEM, reverse engineering e layout di impianto',
                ] : [
                    'CAD/CAE, 2D production drawings with GD&T tolerances & 3D modeling',
                    'FEM structural analysis, reverse engineering & plant layouts',
                ]
            ],
            [
                'label' => $it ? 'Attività 03' : 'Service 03',
                'title' => $it ? 'Trasferimento tecnologico e di prodotto' : 'Technology & Product Transfer',
                'icon' => '🔄',
                'img' => asset('assets/images/service-tech-transfer.jpg'),
                'desc' => $it ? 'Fungiamo da canale per l\'implementazione di tecnologie europee in India e per la produzione e l\'approvvigionamento, rigorosamente controllati, per acquirenti/produttori europei.' : 'Conduit for European technology deployment in India and rigorous audited manufacturing & sourcing for European buyers/manufactures.',
                'details' => $it ? [
                    'Analisi di Fattibilità tecnica, valutazione dei costi di modellizzazione e della localizzazione',
                    'Selezione dei fornitori sottoposta a verifica e controllo di qualità secondo le norme ISO/PPAP',
                ] : [
                    'Technical feasibility, cost modeling & localisation assessment',
                    'Audited supplier sourcing & ISO/PPAP quality verification',
                ]
            ],
        ];
        ?>

        <div class="services-tri-grid">
            <?php foreach ($homeServices as $i => $service): ?>
                <article class="service-modern-card reveal-item">
                    <div class="service-img-wrapper">
                        <img src="<?= h($service['img']) ?>" alt="<?= h($service['title']) ?>">
                        <span class="service-pillar-badge"><?= h($service['label']) ?></span>
                    </div>
                    <div class="service-card-content">
                        <div class="service-title-row">
                            <span class="service-icon-box" aria-hidden="true"><?= h($service['icon']) ?></span>
                            <h3><?= h($service['title']) ?></h3>
                        </div>
                        <p><?= h($service['desc']) ?></p>
                        <ul class="service-feature-checklist">
                            <?php foreach ($service['details'] as $det): ?>
                                <li><?= h($det) ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="service-card-bottom">
                            <a class="service-explore-link" href="services.php#service-<?= $i + 1 ?>">
                                <span><?= h($it ? 'Scopri i dettagli' : 'Explore Details') ?></span>
                                <span>&rarr;</span>
                            </a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="text-center" style="margin-top:2.5rem;">
            <a class="btn btn-outline-dark" href="services.php"><?= h($it ? 'Vedi tutti i dettagli delle attività/servizi' : 'View Full Service Breakdown') ?> &rarr;</a>
        </div>
    </div>
</section>

<!-- Why MSIX / Founder Section -->
<section class="section-pad section-surface" id="why-msix">
    <div class="container two-col-showcase">
        <div class="founder-portrait-card reveal-item">
            <img src="<?= h(asset('assets/images/raghav-kumar.jpg')) ?>" alt="Raghav Kumar - Founder & Director of MSIX">
            <div class="founder-glass-caption">
                <strong>Raghav Kumar</strong>
                <span><?= $it ? 'Fondatore e Direttore (ubicato a Milano, Italia) • Con oltre 15 anni di esperienza nel settore industriale' : 'Founder & Director (Milan, Italy) • 15+ Years Industrial Experience' ?></span>
            </div>
        </div>
        <div class="founder-info-column reveal-item">
            <span class="eyebrow-pill gold"><?= h($it ? 'Perché MSIX' : 'Why MSIX') ?></span>
            <h2><?= h($it ? 'Coordinamento dall’Italia. Esecuzione sul Campo in India.' : 'Coordinated from Italy. Delivered on the Ground in India.') ?></h2>
            <p class="lead-quote">
                <?= h($it ? 'MSIX supporta le aziende industriali europee con servizi di ingegneria, approvvigionamento e sviluppo commerciale in India.' : 'MSIX supports European industrial companies with engineering, sourcing and business development in India.') ?>
            </p>
            <p>
                <?= h($it ? 'Raghav Kumar, Founder & Director, è un ingegnere meccanico - laureato al Politecnico di Milano - con sede in Italia e oltre 15 anni di esperienza in progettazione meccanica, project management e vendite tecniche. Conoscendo a fondo i requisiti di qualità europei e le capacità produttive indiane, garantisce la perfetta riuscita di ogni progetto.' : 'Raghav Kumar, Founder & Director, is a mechanical engineer based in Italy, a graduate of the Polytechnic University of Milan, with over 15 years of experience in mechanical design, project management, and technical sales. His in-depth knowledge of European quality requirements and Indian manufacturing capabilities ensures the perfect success of every project.') ?>
            </p>
            <p>
                <?= h($it ? 'Ogni incarico/progetto inizia con un obiettivo concordato, responsabilità chiare, verifiche dei fornitori sottoposte a audit e aggiornamenti periodici sullo stato di avanzamento.' : 'Each engagement/project starts with an agreed scope, clear responsibilities, audited supplier checks, and regular milestone progress updates.') ?>
            </p>
            <div class="hub-strip-bar">
                <strong><?= $it ? 'Centri operativi strategici' : 'Strategic Operating Hubs' ?>:</strong>
                <span><?= $it ? 'Milano (Direzione europea) • Delhi (Gare d\'appalto) • Calcutta (Ingegneria e controllo qualità)' : 'Milan (European Direction) • Delhi (Tenders) • Kolkata (Engineering & Quality)' ?></span>
            </div>
            <div class="button-duo-row">
                <a class="btn btn-primary" href="about.php"><?= h($it ? 'Perché MSIX e Profilo del Fondatore' : 'Why MSIX & Founder Profile') ?></a>
                <a class="btn btn-outline-dark" href="contact.php"><?= h($it ? 'Contattaci' : 'Talk to Us') ?></a>
            </div>
        </div>
    </div>
</section>

<!-- How We Work Section -->
<section class="section-pad">
    <div class="container">
        <div class="section-head-wrap text-center reveal-item">
            <span class="eyebrow-pill blue"><?= h($it ? 'Come Lavoriamo' : 'How We Work') ?></span>
            <h2><?= h($it ? 'Il Nostro Metodo in Quattro fasi, dal requisito alla consegna' : 'Four Steps from Requirement to Delivery') ?></h2>
            <p><?= h($it ? 'Un quadro di riferimento trasparente e basato su tappe fondamentali che garantisce la responsabilità e un\'esecuzione senza intoppi.' : 'A transparent, milestone-driven framework ensuring accountability and seamless delivery.') ?></p>
        </div>

        <div class="steps-quad-grid">
            <div class="step-card-modern reveal-item">
                <div class="step-card-badge">1</div>
                <h3><?= h($it ? 'Comprensione' : 'Understand') ?></h3>
                <p><?= h($it ? 'Analizziamo nel dettaglio le vostre esigenze e concordiamo con precisione l\'ambito e gli obiettivi.' : 'We discuss your requirement in detail and agree on the precise scope and objectives.') ?></p>
            </div>
            <div class="step-card-modern reveal-item">
                <div class="step-card-badge">2</div>
                <h3><?= h($it ? 'Connessione' : 'Connect') ?></h3>
                <p><?= h($it ? 'Identifichiamo le risorse tecniche e i partner locali necessari all\'interno della nostra rete selezionata.' : 'We identify the technical resources and local partners needed across our vetted network.') ?></p>
            </div>
            <div class="step-card-modern reveal-item">
                <div class="step-card-badge">3</div>
                <h3><?= h($it ? 'Esecuzione' : 'Execute') ?></h3>
                <p><?= h($it ? 'Eseguiamo il lavoro concordato rispettando le tappe tecniche e di consegna definite.' : 'We carry out the agreed work against defined technical and delivery milestones.') ?></p>
            </div>
            <div class="step-card-modern reveal-item">
                <div class="step-card-badge">4</div>
                <h3><?= h($it ? 'Report & Supporto' : 'Report & Support') ?></h3>
                <p><?= h($it ? 'Riceverete aggiornamenti costanti, i deliverable finali e assistenza post-progetto.' : 'You receive progress updates, the agreed deliverables, and full follow-up support.') ?></p>
            </div>
        </div>

        <div class="text-center">
            <a class="btn btn-outline-dark" href="how-we-work.php"><?= h($it ? 'Visualizza il processo completo' : 'View Full Engagement Process') ?> &rarr;</a>
        </div>
    </div>
</section>

<!-- Supporting Capabilities: Industries & Products -->
<section class="section-pad section-surface">
    <div class="container">
        <div class="section-head-wrap text-center reveal-item">
            <span class="eyebrow-pill gold"><?= h($it ? 'Capacità industriali & Settori' : 'Industrial Capabilities & Sectors') ?></span>
            <h2><?= h($it ? 'Competenze Settoriali e Prodotti Ingegnerizzati' : 'Supporting Industries & Engineered Equipment') ?></h2>
            <p><?= h($it ? 'Oltre un decennio di esperienza nella produzione diretta e nell’assistenza ingegneristica meccanica lungo le catene di approvvigionamento globali.' : 'Decades of direct manufacturing and mechanical engineering support across global supply chains.') ?></p>
        </div>

        <div class="supporting-duo-grid">
            <div class="supporting-card-modern reveal-item" style="background-image: url('<?= h(asset('assets/images/industries-hero.jpg')) ?>');">
                <div class="supporting-dark-overlay"></div>
                <div class="supporting-inner-copy">
                    <span class="supporting-pill-tag"><?= $it ? '9 settori industriali chiave' : '9 Core Industry Sectors' ?></span>
                    <h3><?= $it ? 'Settori' : 'Industries' ?></h3>
                    <p><?= $it ? 'Aerospaziale, Automotive ed E-Veicoli Elettrici, Automazione Industriale, Energia, Meccanica Pesante, Estrazione Mineraria, Petrolio e Gas.' : 'Aerospace, Automotive/EV, Industrial Automation, Energy, Heavy Mechanical, Mining & Oil & Gas.' ?></p>
                    <a class="btn btn-primary btn-sm" href="industries.php"><?= $it ? 'Esplora i settori' : 'Explore Industries' ?> &rarr;</a>
                </div>
            </div>

            <div class="supporting-card-modern reveal-item" style="background-image: url('<?= h(asset('assets/images/products-hero.jpg')) ?>');">
                <div class="supporting-dark-overlay"></div>
                <div class="supporting-inner-copy">
                    <span class="supporting-pill-tag"><?= $it ? '11 tipologie di apparecchiature ingegnerizzate' : '11 Engineered Equipment Types' ?></span>
                    <h3><?= $it ? 'Prodotti' : 'Products' ?></h3>
                    <p><?= $it ? 'Valvole industriali, pompe, nastri trasportatori, trasportatori a vite, elevatori a tazze, quadri PLC/MCC, motori, filtri, valvole rotative, macchine per l\'imballaggio.' : 'Industrial Valves, Pumps, Belt Conveyors, Screw conveyor, Bucket Elevators, PLC/MCC Panels, Motors, Filters, Rotary valve, Packaging machines.' ?></p>
                    <a class="btn btn-gold btn-sm" href="products.php"><?= $it ? 'Esplora i prodotti' : 'Explore Products' ?> &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final Call to Action -->
<section class="section-pad">
    <div class="container">
        <div class="cta-banner-wrap reveal-item">
            <div class="cta-text-col">
                <span class="eyebrow-pill dark-gold">MSIX Engineering &amp; Design Solution</span>
                <h2><?= h($it ? 'Pronti a Discutere le Vostre Esigenze in India?' : 'Ready to Discuss Your Requirement in India?') ?></h2>
                <p><?= h($it ? 'Parlate direttamente con Raghav Kumar, Founder & Director, con sede a Milano, Italia. Valuteremo insieme il percorso migliore per la vostra azienda.' : 'Speak directly with Raghav Kumar, Founder & Director, based in Milan, Italy. We will review your project scope and provide practical guidance.') ?></p>
                <div class="cta-chips-list">
                    <span class="cta-chip-item">✉️ info@m6eds.com</span>
                    <span class="cta-chip-item">💬 WhatsApp: +39 351 971 5596</span>
                    <span class="cta-chip-item">📍 Milan · Delhi · Kolkata</span>
                </div>
            </div>
            <div class="cta-btn-col">
                <a class="btn btn-primary btn-lg" href="contact.php"><?= h($it ? 'Contattaci' : 'Talk to Us') ?></a>
                <a class="btn btn-outline-white btn-lg" href="<?= h($site['whatsapp_link']) ?>" target="_blank" rel="noopener noreferrer"><?= h($it ? 'Contatto Diretto via WhatsApp' : 'WhatsApp Direct') ?></a>
            </div>
        </div>
    </div>
</section>

<?php render_footer(); ?>
