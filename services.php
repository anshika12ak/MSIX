<?php
require_once __DIR__ . '/includes/bootstrap.php';
$it = $lang === 'it';
render_header(t('page.services'), 'services');

$servicePillars = [
    [
        'id' => 'service-1',
        'title' => $it ? 'Accesso al Mercato & Gare in India' : 'Market Access & Tenders in India',
        'label' => $it ? 'Attività 01 • Gare & Presenza Locale' : 'Service 01 • Tenders & Local Footprint',
        'img' => asset('assets/images/service-market-access.jpg'),
        'desc' => $it ? 'Un servizio completo di assistenza per le imprese industriali europee che desiderano partecipare a gare d\'appalto pubbliche e private in India e instaurare solide partnership commerciali sul territorio.' : 'End-to-end guidance for European industrial enterprises looking to participate in Indian public/private tenders and establish reliable on-ground commercial partnerships.',
        'details' => $it ? [
            'Identificazione e qualificazione degli enti appaltatori (settore pubblico e privato)',
            'Verifica di partner e fornitori, due diligence e valutazione delle capacità tecniche',
            'Coordinamento locale e supporto procedurale per garantire la piena conformità',
        ] : [
            'Tender identification and qualification (public & private sectors)',
            'Partner and supplier checks, due diligence & technical capability vetting',
            'Local coordination and procedural support for seamless compliance',
        ],
        'req_value' => 'Market Access / Tenders',
    ],
    [
        'id' => 'service-2',
        'title' => $it ? 'Outsourcing ingegneristico e tecnico' : 'Engineering & Technical Outsourcing',
        'label' => $it ? 'Attività 02 • Progettazione & Ingegneria CAD/FEM' : 'Service 02 • Design & CAD/FEM Engineering',
        'img' => asset('assets/images/service-cad-fem.jpg'),
        'desc' => $it ? 'Ingegneria meccanica, elettrica e dell\'automazione ad alta precisione, supportata da oltre 15 anni di esperienza nella progettazione.' : 'High-precision mechanical, electrical, and automation engineering backed by 15+ years of design experience.',
        'details' => $it ? [
            'CAD/CAE, progettazione 2D/3D, analisi strutturale e termica con metodo degli elementi finiti (FEM) e reverse engineering',
            'Ingegneria elettrica, quadri PLC/MCC e assistenza nell’automazione industriale',
            'Prototipazione, attrezzature su misura, maschere, dispositivi di fissaggio e documentazione di qualità APQP',
        ] : [
            'CAD/CAE, 2D/3D design, FEM structural/thermal analysis & reverse engineering',
            'Electrical engineering, PLC/MCC panels & industrial automation support',
            'Prototyping, custom tooling, jigs, fixtures & APQP quality documentation',
        ],
        'req_value' => 'Engineering Support',
    ],
    [
        'id' => 'service-3',
        'title' => $it ? 'Trasferimento Tecnologico e di Prodotti' : 'Technology & Product Transfer',
        'label' => $it ? 'Attività 03 • Approvvigionamento e trasferimento tecnologico' : 'Service 03 • Sourcing & Technology Transfer',
        'img' => asset('assets/images/service-tech-transfer.jpg'),
        'desc' => $it ? 'Canale strategico per il trasferimento di tecnologia industriale europea in India - gestione della produzione conto terzi di alta qualità - approvvigionamento per acquirenti europei.' : 'Strategic conduit for transferring European industrial technology to India - managing high-quality contract manufacturing - sourcing for European buyers.',
        'details' => $it ? [
            'Valutazione di fattibilità e dei costi per la localizzazione tecnologica',
            'Ricerca dei fornitori, audit in loco presso i fornitori e verifica della qualità',
            'Coordinamento logistico, sdoganamento e gestione delle consegne',
        ] : [
            'Feasibility and cost assessment for technology localisation',
            'Supplier sourcing, on-site supplier audits & quality verification',
            'Logistics coordination, customs clearance & delivery management',
        ],
        'req_value' => 'Sourcing / Technology Transfer',
    ],
];
?>

<!-- Page Hero -->
<section class="page-hero-banner">
    <div class="container reveal-item">
        <span class="eyebrow light">⚙️ <?= $it ? 'Tre Aree di Attività' : 'Three Core Service Areas' ?></span>
        <h1><?= h($it ? 'Cosa Offriamo' : 'What We Offer') ?></h1>
        <p><?= h($it ? 'Tre pilastri di Attività strutturati e concreti, pensati per accelerare le vostre operazioni industriali in India e ridurne i rischi.' : 'Three structured, practical service pillars designed to accelerate and de-risk your industrial operations in India.') ?></p>
    </div>
</section>

<!-- Main Services Stack -->
<section class="section-pad">
    <div class="container">
        <div class="services-pillar-stack">
            <?php foreach ($servicePillars as $i => $pillar): ?>
                <article class="pillar-card reveal-item" id="<?= h($pillar['id']) ?>">
                    <div class="pillar-img-box">
                        <img src="<?= h($pillar['img']) ?>" alt="<?= h($pillar['title']) ?>">
                        <span class="pillar-tag"><?= h($pillar['label']) ?></span>
                    </div>
                    <div class="pillar-content-box">
                        <span class="eyebrow"><?= h($pillar['label']) ?></span>
                        <h2><?= h($pillar['title']) ?></h2>
                        <p><?= h($pillar['desc']) ?></p>

                        <details class="details-accordion">
                            <summary>
                                <span><?= $it ? 'Ambito e risultati attesi' : 'Scope & Deliverables' ?></span>
                                <span>▾</span>
                            </summary>
                            <ul class="details-list">
                                <?php foreach ($pillar['details'] as $detailItem): ?>
                                    <li><?= h($detailItem) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </details>

                        <div class="action-row">
                            <a class="btn btn-primary btn-sm" href="contact.php?req=<?= urlencode($pillar['req_value']) ?>">
                                <span><?= h($it ? 'Parliamo di questa attività' : 'Talk to Us about this') ?></span>
                                <span>&rarr;</span>
                            </a>
                            <a class="btn btn-outline-dark btn-sm" href="how-we-work.php">
                                <span><?= h($it ? 'Come Lavoriamo' : 'How We Work') ?></span>
                            </a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <!-- Supporting Capabilities Showcase -->
        <div style="margin-top:3.5rem;">
            <div class="section-head-wrap text-center reveal-item">
                <span class="eyebrow-pill gold"><?= $it ? 'Capacità industriali' : 'Industrial Capabilities' ?></span>
                <h2><?= $it ? 'Settori supportati e attrezzature tecniche' : 'Supporting Industries & Engineered Equipment' ?></h2>
                <p><?= $it ? 'Scoprite la nostra esperienza ingegneristica intersettoriale e il nostro catalogo di apparecchiature ingegnerizzate.' : 'Discover our cross-sector engineering experience and engineered equipment catalog.' ?></p>
            </div>
            <div class="supporting-duo-grid">
                <div class="supporting-card-modern reveal-item" style="background-image: url('<?= h(asset('assets/images/industries-hero.jpg')) ?>');">
                    <div class="supporting-dark-overlay"></div>
                    <div class="supporting-inner-copy">
                        <span class="supporting-pill-tag"><?= $it ? '9 settori industriali chiave' : '9 Core Industry Sectors' ?></span>
                        <h3><?= $it ? 'Settori industriali' : 'Industries' ?></h3>
                        <p><?= $it ? 'Aerospaziale, automobilistico &veicoli elettrici, automazione industriale, energia, meccanica pesante, settore minerario, petrolifero e del gas.' : 'Aerospace, Automotive & EV, Industrial Automation, Energy, Heavy Mechanical, Mining & Oil & Gas.' ?></p>
                        <a class="btn btn-primary btn-sm" href="industries.php"><?= $it ? 'Scopri i settori industriali' : 'Explore Industries' ?> &rarr;</a>
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
    </div>
</section>

<?php render_footer(); ?>
