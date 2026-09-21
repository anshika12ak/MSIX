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
                <?= h($it ? 'Supporto di ingegneria, sourcing e ingresso nel mercato per aziende industriali europee, coordinato direttamente dall’Italia.' : 'Engineering, sourcing and market-entry support for European industrial companies, coordinated directly from Italy.') ?>
            </p>
            <div class="hero-actions">
                <a class="btn btn-primary btn-lg btn-hero-pulse" href="services.php">
                    <span class="btn-live-radar-dot"></span>
                    <span><?= h($it ? 'Scopri Cosa Offriamo' : 'See What We Offer') ?></span>
                    <span class="btn-arrow-icon">&rarr;</span>
                </a>
                <a class="btn btn-outline-white btn-lg btn-hero-contact" href="contact.php">
                    <span><?= h($it ? 'Parliamo con Raghav Kumar' : 'Talk to Us') ?></span>
                </a>
            </div>
            <div class="hero-trust-bar">
                <div class="trust-item">
                    <span class="trust-check-icon">✓</span>
                    <span><?= $it ? 'Coordinamento diretto dall’Italia' : 'Direct European governance from Italy' ?></span>
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
                        <strong><?= $it ? 'Direzione Tecnica & Qualità' : 'Technical Governance & Quality' ?></strong>
                        <span><?= $it ? 'Supervisione di Raghav Kumar' : 'Directed by Raghav Kumar' ?></span>
                    </div>
                </div>

                <!-- Floating Card 2: Experience & Standards (Bottom) -->
                <div class="hero-floating-card bottom-float">
                    <div class="float-icon-bubble">⚡</div>
                    <div>
                        <strong>15+ <?= $it ? 'Anni di Esperienza' : 'Years Experience' ?></strong>
                        <span><?= $it ? 'Standard Qualità Europei' : 'European Quality Standards' ?></span>
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
                    <span><?= $it ? 'Progettazione meccanica & gestione' : 'Mechanical design & project leadership' ?></span>
                </div>
            </div>
            <div class="fact-col reveal-item">
                <div class="fact-big-number" data-counter="3" data-suffix="">3</div>
                <div class="fact-details">
                    <strong><?= h($it ? 'Aree di Servizio' : 'Core Service Areas') ?></strong>
                    <span><?= $it ? 'Gare, Ingegneria, Sourcing' : 'Market access, CAD/FEM, Transfer' ?></span>
                </div>
            </div>
            <div class="fact-col reveal-item">
                <div class="fact-big-number" data-counter="3" data-suffix=" Hubs">3</div>
                <div class="fact-details">
                    <strong>Milan · Delhi · Kolkata</strong>
                    <span><?= $it ? 'Tre sedi operative integrate' : 'Three strategic operating hubs' ?></span>
                </div>
            </div>
            <div class="fact-col reveal-item">
                <div class="fact-big-number">EU–IN</div>
                <div class="fact-details">
                    <strong><?= h($it ? 'Coordinato dall’Italia' : 'Coordinated from Italy') ?></strong>
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
            <h2><?= h($it ? 'Tre Modi in Cui Supportiamo il Vostro Progetto' : 'Three Practical Ways We Support Your Project in India') ?></h2>
            <p><?= h($it ? 'Servizi trasparenti e strutturati per superare le barriere tecniche e commerciali sul mercato indiano.' : 'Transparent, structured services designed to eliminate cross-border risk and accelerate your industrial goals.') ?></p>
        </div>

        <div class="services-tri-grid">
            <?php foreach ($services as $i => $service): ?>
                <article class="service-modern-card reveal-item">
                    <div class="service-img-wrapper">
                        <img src="<?= h($service['img']) ?>" alt="<?= h($service['title']) ?>">
                        <span class="service-pillar-badge"><?= $it ? 'Area' : 'Service' ?> 0<?= $i + 1 ?></span>
                    </div>
                    <div class="service-card-content">
                        <div class="service-title-row">
                            <span class="service-icon-box" aria-hidden="true"><?= h($service['icon']) ?></span>
                            <h3><?= h($service['title']) ?></h3>
                        </div>
                        <p><?= h($service['desc']) ?></p>
                        <ul class="service-feature-checklist">
                            <?php foreach (array_slice($service['details'], 0, 2) as $det): ?>
                                <li><?= h($det) ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="service-card-bottom">
                            <a class="service-explore-link" href="services.php#service-<?= $i + 1 ?>">
                                <span><?= h($it ? 'Dettagli completi' : 'Explore Details') ?></span>
                                <span>&rarr;</span>
                            </a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="text-center" style="margin-top:2.5rem;">
            <a class="btn btn-outline-dark" href="services.php"><?= h($it ? 'Vedi tutti i dettagli dei servizi' : 'View Full Service Breakdown') ?> &rarr;</a>
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
                <span>Founder &amp; Director (Milan, Italy) &bull; 15+ Years Industrial Experience</span>
            </div>
        </div>
        <div class="founder-info-column reveal-item">
            <span class="eyebrow-pill gold"><?= h($it ? 'Perché MSIX' : 'Why MSIX') ?></span>
            <h2><?= h($it ? 'Coordinamento dall’Italia. Esecuzione sul Campo in India.' : 'Coordinated from Italy. Delivered on the Ground in India.') ?></h2>
            <p class="lead-quote">
                <?= h($it ? 'MSIX supporta aziende industriali europee con ingegneria, sourcing e sviluppo commerciale in India.' : 'MSIX supports European industrial companies with engineering, sourcing and business development in India.') ?>
            </p>
            <p>
                <?= h($it ? 'Raghav Kumar, Founder & Director, è un ingegnere meccanico con sede in Italia e circa 15 anni di esperienza in progettazione meccanica, project management e vendite tecniche. Conoscendo a fondo i requisiti di qualità europei e le capacità produttive indiane, garantisce la perfetta riuscita di ogni progetto.' : 'Raghav Kumar, Founder & Director, is a mechanical engineer based in Italy with approximately 15 years of experience in mechanical design, project management, and technical sales across Europe and India.') ?>
            </p>
            <p>
                <?= h($it ? 'Ogni incarico inizia con un ambito concordato, responsabilità chiare, rigorosa verifica dei partner e aggiornamenti regolari sull’avanzamento.' : 'Each engagement starts with an agreed scope, clear responsibilities, audited supplier checks, and regular milestone progress updates.') ?>
            </p>
            <div class="hub-strip-bar">
                <strong><?= $it ? 'Presidio Operativo' : 'Strategic Operating Hubs' ?>:</strong>
                <span>Milan (European Direction) &bull; Delhi (Tenders) &bull; Kolkata (Engineering &amp; Quality)</span>
            </div>
            <div class="button-duo-row">
                <a class="btn btn-primary" href="about.php"><?= h($it ? 'Profilo Aziendale' : 'Why MSIX & Founder Profile') ?></a>
                <a class="btn btn-outline-dark" href="contact.php"><?= h($it ? 'Parliamo' : 'Talk to Us') ?></a>
            </div>
        </div>
    </div>
</section>

<!-- How We Work Section -->
<section class="section-pad">
    <div class="container">
        <div class="section-head-wrap text-center reveal-item">
            <span class="eyebrow-pill blue"><?= h($it ? 'Come Lavoriamo' : 'How We Work') ?></span>
            <h2><?= h($it ? 'Il Nostro Metodo in Quattro Fasi' : 'Four Steps from Requirement to Delivery') ?></h2>
            <p><?= h($it ? 'Un percorso chiaro e strutturato per garantire precisione, tempi certi e riduzione dei rischi.' : 'A transparent, milestone-driven framework ensuring accountability and seamless delivery.') ?></p>
        </div>

        <div class="steps-quad-grid">
            <div class="step-card-modern reveal-item">
                <div class="step-card-badge">1</div>
                <h3><?= h($it ? 'Comprendere' : 'Understand') ?></h3>
                <p><?= h($it ? 'Discutiamo la vostra esigenza tecnica e commerciale e concordiamo con precisione l’ambito.' : 'We discuss your requirement in detail and agree on the precise scope and objectives.') ?></p>
            </div>
            <div class="step-card-modern reveal-item">
                <div class="step-card-badge">2</div>
                <h3><?= h($it ? 'Collegare' : 'Connect') ?></h3>
                <p><?= h($it ? 'Identifichiamo le risorse tecniche, gli esperti e i partner locali verificati necessari.' : 'We identify the technical resources and local partners needed across our vetted network.') ?></p>
            </div>
            <div class="step-card-modern reveal-item">
                <div class="step-card-badge">3</div>
                <h3><?= h($it ? 'Eseguire' : 'Execute') ?></h3>
                <p><?= h($it ? 'Svolgiamo il lavoro concordato nel rispetto rigoroso dei traguardi e delle tolleranze.' : 'We carry out the agreed work against defined technical and delivery milestones.') ?></p>
            </div>
            <div class="step-card-modern reveal-item">
                <div class="step-card-badge">4</div>
                <h3><?= h($it ? 'Report & Supporto' : 'Report & Support') ?></h3>
                <p><?= h($it ? 'Ricevete aggiornamenti costanti, i deliverable finali e assistenza post-progetto.' : 'You receive progress updates, the agreed deliverables, and full follow-up support.') ?></p>
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
            <span class="eyebrow-pill gold"><?= h($it ? 'Capacità & Settori' : 'Industrial Capabilities') ?></span>
            <h2><?= h($it ? 'Competenze Settoriali e Prodotti Ingegnerizzati' : 'Supporting Industries & Engineered Equipment') ?></h2>
            <p><?= h($it ? 'Oltre 15 anni di applicazione pratica nei settori industriali più esigenti.' : 'Decades of direct manufacturing and mechanical engineering support across global supply chains.') ?></p>
        </div>

        <div class="supporting-duo-grid">
            <div class="supporting-card-modern reveal-item" style="background-image: url('<?= h(asset('assets/images/industries-hero.jpg')) ?>');">
                <div class="supporting-dark-overlay"></div>
                <div class="supporting-inner-copy">
                    <span class="supporting-pill-tag"><?= $it ? '9 Settori Industriali' : '9 Core Industry Sectors' ?></span>
                    <h3><?= h(t('nav.industries')) ?></h3>
                    <p><?= $it ? 'Aerospaziale, Automotive/EV, Automazione, Energia, Meccanica Pesante, Miniere, Oil & Gas.' : 'Aerospace, Automotive/EV, Industrial Automation, Energy, Heavy Mechanical, Mining & Oil & Gas.' ?></p>
                    <a class="btn btn-primary btn-sm" href="industries.php"><?= $it ? 'Esplora i Settori' : 'Explore Industries' ?> &rarr;</a>
                </div>
            </div>

            <div class="supporting-card-modern reveal-item" style="background-image: url('<?= h(asset('assets/images/products-hero.jpg')) ?>');">
                <div class="supporting-dark-overlay"></div>
                <div class="supporting-inner-copy">
                    <span class="supporting-pill-tag"><?= $it ? '11 Linee di Prodotti' : '11 Engineered Equipment Types' ?></span>
                    <h3><?= h(t('nav.products')) ?></h3>
                    <p><?= $it ? 'Valvole industriali, Pompe pesanti, Convogliatori, Elevatori a tazze, Quadri PLC/MCC, Motori.' : 'Industrial Valves, Slurry Pumps, Belt Conveyors, Bucket Elevators, PLC/MCC Panels, Motors.' ?></p>
                    <a class="btn btn-gold btn-sm" href="products.php"><?= $it ? 'Esplora i Prodotti' : 'Explore Products' ?> &rarr;</a>
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
                <h2><?= h($it ? 'Pronti a Discutere la Vostra Esigenza in India?' : 'Ready to Discuss Your Requirement in India?') ?></h2>
                <p><?= h($it ? 'Parlate direttamente con Raghav Kumar, Founder & Director, con sede a Milano, Italia. Valuteremo insieme il percorso migliore per la vostra azienda.' : 'Speak directly with Raghav Kumar, Founder & Director, based in Milan, Italy. We will review your project scope and provide practical guidance.') ?></p>
                <div class="cta-chips-list">
                    <span class="cta-chip-item">✉️ info@m6eds.com</span>
                    <span class="cta-chip-item">💬 WhatsApp: +39 351 971 5596</span>
                    <span class="cta-chip-item">📍 Milan · Delhi · Kolkata</span>
                </div>
            </div>
            <div class="cta-btn-col">
                <a class="btn btn-primary btn-lg" href="contact.php"><?= h($it ? 'Parliamo' : 'Talk to Us') ?></a>
                <a class="btn btn-outline-white btn-lg" href="<?= h($site['whatsapp_link']) ?>" target="_blank" rel="noopener noreferrer">WhatsApp Direct</a>
            </div>
        </div>
    </div>
</section>

<?php render_footer(); ?>
