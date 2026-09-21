<?php
require_once __DIR__ . '/includes/bootstrap.php';
$it = $lang === 'it';
render_header(t('page.industries'), 'industries');

$detailedIndustries = [
    [
        'name' => $it ? 'Aerospaziale & Difesa' : 'Aerospace & Defense',
        'desc' => $it ? 'Componenti ad altissima precisione, studio delle tolleranze, reverse engineering e documentazione qualità.' : 'High-precision components, tight tolerance design, reverse engineering, and quality documentation.',
        'icon' => '✈️',
    ],
    [
        'name' => $it ? 'Automotive & Veicoli Elettrici' : 'Automotive & EV Systems',
        'desc' => $it ? 'Linee di assemblaggio robotizzate, attrezzature BIW, progettazione stampi e conformità documentale APQP/PPAP.' : 'Robotic assembly tooling, BIW fixtures, stamping die design, and comprehensive APQP/PPAP documentation.',
        'icon' => '🚗',
    ],
    [
        'name' => $it ? 'Automazione Industriale & Robotica' : 'Industrial Automation & Robotics',
        'desc' => $it ? 'Integrazione PLC/MCC, sistemi SCADA, celle robotizzate e flussi di produzione intelligenti secondo l’Industria 4.0.' : 'PLC/MCC integration, SCADA architecture, robotic workcells, and Industry 4.0 automated workflows.',
        'icon' => '🤖',
    ],
    [
        'name' => $it ? 'Energia & Impianti di Potenza' : 'Energy & Power Generation',
        'desc' => $it ? 'Turbine, scambiatori termici, componenti per centrali elettriche e impianti a energia rinnovabile.' : 'Turbine components, heat exchangers, power generation equipment, and renewable energy thermal balance.',
        'icon' => '⚡',
    ],
    [
        'name' => $it ? 'Ingegneria Meccanica Pesante' : 'Heavy Mechanical Engineering',
        'desc' => $it ? 'Progettazione di macchinari industriali pesanti, modellazione 3D CAD e analisi tensionale FEM strutturale.' : 'Heavy industrial machinery design, 3D parametric CAD modeling, and FEM structural load simulations.',
        'icon' => '🏗️',
    ],
    [
        'name' => $it ? 'Produzione & Processi Manifatturieri' : 'Manufacturing & Process Engineering',
        'desc' => $it ? 'Layout ottimali di fabbrica, studio dei flussi produttivi, lean manufacturing e standardizzazione delle linee.' : 'Factory layout optimization, production line balancing, lean manufacturing workflows, and standardization.',
        'icon' => '🏭',
    ],
    [
        'name' => $it ? 'Miniere & Minerali Critici' : 'Mining & Critical Minerals',
        'desc' => $it ? 'Macchinari pesanti di estrazione, convogliatori a nastro, elevatori e sistemi di frantumazione e trasporto.' : 'Heavy extraction equipment, bulk conveyor systems, vertical bucket elevators, and mineral handling.',
        'icon' => '⛏️',
    ],
    [
        'name' => $it ? 'Oil & Gas e Petrolchimico' : 'Oil & Gas and Petrochemical',
        'desc' => $it ? 'Valvole ad alta pressione, skid di pompaggio, piping industriale e componenti conformi a specifiche API/ASME.' : 'High-pressure valves, pump skids, industrial piping design, and API/ASME compliant components.',
        'icon' => '🛢️',
    ],
    [
        'name' => $it ? 'Quadri Elettrici & Distribuzione' : 'Electrical Distribution & Panels',
        'desc' => $it ? 'Ingegneria di potenza, quadri di comando motori (MCC), cablaggio bordo macchina e certificazioni CE.' : 'Power distribution architecture, Motor Control Centers (MCC), machine wiring, and CE certifications.',
        'icon' => '🔌',
    ],
];
?>

<!-- Page Hero -->
<section class="page-hero-banner">
    <div class="container reveal-item">
        <span class="eyebrow-pill dark-gold">🏭 <?= $it ? 'Settori Industriali' : 'Core Industry Sectors' ?></span>
        <h1><?= h($it ? 'Settori in Cui Operiamo' : 'Industries We Serve') ?></h1>
        <p><?= h($it ? 'Supporto ingegneristico specialistico e conformità normativa per i comparti industriali più esigenti.' : 'Sector-specific engineering support tailored to rigorous technical standards, compliance, and manufacturability.') ?></p>
    </div>
</section>

<!-- Industries Cards Grid -->
<section class="section-pad">
    <div class="container">
        <div class="section-head-wrap text-center reveal-item">
            <span class="eyebrow-pill blue"><?= $it ? 'Campi di Applicazione' : 'Industrial Domains' ?></span>
            <h2><?= $it ? '15+ Anni di Competenze Applicate ai Settori Chiave' : 'Cross-Sector Engineering Mastery' ?></h2>
            <p><?= $it ? 'La profonda conoscenza dei requisiti tecnici specifici di ogni settore garantisce che ogni progetto soddisfi i più alti criteri di affidabilità.' : 'Deep technical understanding of domain-specific standards ensures every component meets demanding operational criteria.' ?></p>
        </div>

        <!-- Interactive Instant Search & Category Filter Bar -->
        <div class="interactive-filter-bar reveal-item">
            <div class="search-input-wrapper">
                <span class="search-icon-symbol">🔍</span>
                <input type="text" id="industrySearchInput" class="filter-search-input" placeholder="<?= $it ? 'Cerca settore (es. energia, aerospaziale, automotive, oil & gas)...' : 'Search industry (e.g. energy, aerospace, automotive, oil & gas)...' ?>" aria-label="Search industries">
                <button type="button" id="clearIndustrySearch" class="search-clear-btn" style="display:none;" aria-label="Clear search">&times;</button>
            </div>
            <div class="filter-pill-chips" id="industryFilterChips">
                <button type="button" class="filter-chip-btn is-active" data-filter="all"><?= $it ? 'Tutti i Settori' : 'All Sectors' ?></button>
                <button type="button" class="filter-chip-btn" data-filter="aerospaziale|aerospace|difesa|defense"><?= $it ? 'Aerospazio & Difesa' : 'Aerospace & Defense' ?></button>
                <button type="button" class="filter-chip-btn" data-filter="automotive|ev|veicoli|electric"><?= $it ? 'Automotive & EV' : 'Automotive & EV' ?></button>
                <button type="button" class="filter-chip-btn" data-filter="energia|energy|oil|gas|power|rinnovabile"><?= $it ? 'Energia & Oil/Gas' : 'Energy & Oil/Gas' ?></button>
                <button type="button" class="filter-chip-btn" data-filter="meccanica|pesante|heavy|miniere|mining|ferroviario|rail"><?= $it ? 'Meccanica Pesante' : 'Heavy Mechanical' ?></button>
            </div>
        </div>

        <div id="industryResultsNotice" class="filter-results-notice" style="display:none;"></div>

        <div class="cards-tri-grid" id="industryGrid">
            <?php foreach ($detailedIndustries as $ind): ?>
                <div class="simple-info-card reveal-item">
                    <div class="simple-card-icon"><?= $ind['icon'] ?></div>
                    <h3><?= h($ind['name']) ?></h3>
                    <p><?= h($ind['desc']) ?></p>
                    <div class="card-action">
                        <a href="contact.php?req=<?= urlencode('Engineering Support') ?>" class="btn btn-outline-dark btn-sm" style="width:100%;">
                            <?= $it ? 'Richiedi per questo settore' : 'Inquire for this Sector' ?> &rarr;
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center" style="margin-top:2rem;">
            <a href="products.php" class="btn btn-outline-dark"><?= $it ? 'Vedi Prodotti Industriali' : 'View Industrial Products' ?></a>
            <a href="services.php" class="btn btn-primary"><?= $it ? 'Torna a Cosa Offriamo' : 'Back to What We Offer' ?></a>
        </div>
    </div>
</section>

<?php render_footer(); ?>
