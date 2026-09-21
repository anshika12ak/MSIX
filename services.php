<?php
require_once __DIR__ . '/includes/bootstrap.php';
$it = $lang === 'it';
render_header(t('page.services'), 'services');

$servicePillars = [
    [
        'id' => 'service-1',
        'title' => $it ? 'Accesso al Mercato & Gare in India' : 'Market Access & Tenders in India',
        'short_tag' => $it ? 'Gare & Presenza Locale' : 'Tenders & Local Footprint',
        'img' => asset('assets/images/service-market-access.jpg'),
        'desc' => $it ? 'Supporto completo per aziende industriali europee che desiderano partecipare a gare pubbliche e private in India o stabilire alleanze commerciali solide e conformi alle normative locali.' : 'End-to-end guidance for European industrial enterprises looking to participate in Indian public/private tenders and establish reliable on-ground commercial partnerships.',
        'details' => $it ? [
            'Identificazione e qualifica delle gare (bandi governativi e privati)',
            'Verifica di conformità tecnica, due diligence e controllo fornitori',
            'Coordinamento locale, gestione documentale e supporto procedurale',
        ] : [
            'Tender identification and qualification (public & private sectors)',
            'Partner and supplier checks, due diligence & technical capability vetting',
            'Local coordination and procedural support for seamless compliance',
        ],
        'req_value' => 'Market Access / Tenders',
    ],
    [
        'id' => 'service-2',
        'title' => $it ? 'Outsourcing Tecnico & Ingegneria' : 'Engineering & Technical Outsourcing',
        'short_tag' => $it ? 'Progettazione & CAD/FEM' : 'Design & CAD/FEM Engineering',
        'img' => asset('assets/images/service-cad-fem.jpg'),
        'desc' => $it ? 'Servizi di ingegneria meccanica, elettrica e automazione ad alta intensità tecnologica.' : 'High-precision mechanical, electrical, and automation engineering backed by 15+ years of design experience.',
        'details' => $it ? [
            'CAD/CAE, progettazione 2D/3D, FEM strutturale/termica e reverse engineering',
            'Supporto elettrico, quadri PLC/MCC e integrazione automazione industriale',
            'Prototipazione rapida, progettazione attrezzature, dime e collaudi APQP',
        ] : [
            'CAD/CAE, 2D/3D design, FEM structural/thermal analysis & reverse engineering',
            'Electrical engineering, PLC/MCC panels & industrial automation support',
            'Prototyping, custom tooling, jigs, fixtures & APQP quality documentation',
        ],
        'req_value' => 'Engineering Support',
    ],
    [
        'id' => 'service-3',
        'title' => $it ? 'Trasferimento Tecnologico & di Prodotto' : 'Technology & Product Transfer',
        'short_tag' => $it ? 'Sourcing & Produzione' : 'Sourcing & Technology Transfer',
        'img' => asset('assets/images/service-tech-transfer.jpg'),
        'desc' => $it ? 'Ponte strategico per il trasferimento di tecnologie industriali europee verso l’India e per il sourcing controllato di componenti e macchinari indiani per committenti europei.' : 'Strategic conduit for transferring European industrial technology to India and managing high-quality contract manufacturing and sourcing for European buyers.',
        'details' => $it ? [
            'Fattibilità tecnica e valutazione analitica dei costi di localizzazione',
            'Sourcing fornitori qualificati e audit qualitativi periodici in loco',
            'Logistica internazionale, sdoganamento e consegne garantite',
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
        <span class="eyebrow light">⚙️ <?= $it ? 'Tre Aree di Servizio' : 'Three Core Service Areas' ?></span>
        <h1><?= h($it ? 'Cosa Offriamo' : 'What We Offer') ?></h1>
        <p><?= h($it ? 'Tre modi concreti e strutturati per supportare le aziende industriali europee nel mercato indiano.' : 'Three structured, practical service pillars designed to accelerate and de-risk your industrial operations in India.') ?></p>
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
                        <span class="pillar-tag"><?= $it ? 'Area' : 'Service' ?> 0<?= $i + 1 ?> &bull; <?= h($pillar['short_tag']) ?></span>
                    </div>
                    <div class="pillar-content-box">
                        <span class="eyebrow"><?= h($pillar['short_tag']) ?></span>
                        <h2><?= h($pillar['title']) ?></h2>
                        <p><?= h($pillar['desc']) ?></p>

                        <details class="details-accordion">
                            <summary>
                                <span><?= $it ? 'Dettagli e Ambito del Servizio' : 'Scope & Deliverables' ?></span>
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
                                <span><?= h($it ? 'Parliamo di questo servizio' : 'Talk to Us about this') ?></span>
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
                <span class="eyebrow-pill gold"><?= $it ? 'Capacità & Settori' : 'Industrial Capabilities' ?></span>
                <h2><?= $it ? 'Settori Serviti & Catalogo Prodotti' : 'Supporting Industries & Engineered Equipment' ?></h2>
                <p><?= $it ? 'Esplora i comparti manifatturieri e le apparecchiature industriali gestite direttamente da MSIX.' : 'Discover our cross-sector engineering experience and engineered equipment catalog.' ?></p>
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
    </div>
</section>

<?php render_footer(); ?>
