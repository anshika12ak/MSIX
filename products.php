<?php
require_once __DIR__ . '/includes/bootstrap.php';
$it = $lang === 'it';
render_header(t('page.products'), 'products');

$productList = [
    [
        'name' => $it ? 'Valvole Industriali ad Alta Pressione' : 'High-Pressure Industrial Valves',
        'category' => $it ? 'Controllo Fluidi' : 'Fluid Control',
        'desc' => $it ? 'Valvole a sfera, a saracinesca, di ritegno e a globo per impieghi gravosi in raffinerie, centrali energetiche e impianti chimici. Supporto alla selezione e alla fornitura.' : 'Engineered gate, globe, check, and ball valves for refineries, power plants, and chemical installations.',
        'icon' => '🚰',
    ],
    [
        'name' => $it ? 'Pompe Industriali per Fanghi e Chimico' : 'Heavy-Duty Slurry & Chemical Pumps',
        'category' => $it ? 'Idraulica Industriale' : 'Fluid Mechanics',
        'desc' => $it ? 'Pompe centrifughe e volumetriche resistenti ad abrasione e sostanze corrosive per miniere, trattamento acque e petrolchimico.' : 'Abrasion-resistant centrifugal and positive displacement pumps designed for severe mining slurries and chemical processing.',
        'icon' => '⚙️',
    ],
    [
        'name' => $it ? 'Sistemi di Trasporto a Nastro' : 'Industrial Belt Conveyor Systems',
        'category' => $it ? 'Movimentazione Materiali' : 'Material Handling',
        'desc' => $it ? 'Nastri trasportatori modulari per materiali sfusi e minerari con rulli ad alta resistenza e sensori di allineamento automatico.' : 'Modular, heavy-duty continuous bulk conveyors with robust idlers, wear-resistant belts, and automated safety sensors.',
        'icon' => '🔄',
    ],
    [
        'name' => $it ? 'Elevatori a Tazze Verticali' : 'Continuous Bucket Elevators',
        'category' => $it ? 'Movimentazione Verticale' : 'Vertical Handling',
        'desc' => $it ? 'Sistemi di sollevamento continuo per minerali, sementi e materiali polverosi con scarico centrifugo o continuo ad alta efficienza.' : 'Heavy-duty vertical lift systems designed for bulk minerals, fertilizers, grains, and industrial particulates.',
        'icon' => '🏗️',
    ],
    [
        'name' => $it ? 'Quadri di Controllo Automazione PLC' : 'PLC Automation Control Panels',
        'category' => $it ? 'Automazione Industriale' : 'Industrial Automation',
        'desc' => $it ? 'Quadri elettrici custom con PLC Siemens, Schneider o Rockwell, conformi a direttive CE/UL con interfacce HMI e SCADA.' : 'Custom automation panels featuring Siemens/Schneider/Rockwell PLCs, intuitive HMI touchscreens, and CE/UL compliance.',
        'icon' => '🎛️',
    ],
    [
        'name' => $it ? 'Quadri di Potenza e Distribuzione MCC' : 'MCC Power Distribution Centers',
        'category' => $it ? 'Ingegneria Elettrica' : 'Power Distribution',
        'desc' => $it ? 'Centri controllo motori con sezionatori modulari, inverter (VFD), soft starter e sistemi avanzati di monitoraggio energetico.' : 'Modular Motor Control Centers with intelligent VFD drives, soft starters, circuit protection, and digital power metering.',
        'icon' => '⚡',
    ],
    [
        'name' => $it ? 'Motori Elettrici Trifase per Industria' : 'Three-Phase Industrial Electric Motors',
        'category' => $it ? 'Motori & Azionamenti' : 'Power & Drives',
        'desc' => $it ? 'Motori asincroni ad alta efficienza energetica IE3/IE4 in ghisa o alluminio per servizio continuo e ambienti gravosi.' : 'High-efficiency IE3/IE4 asynchronous electric motors engineered for heavy machinery, pumps, and continuous plant duty.',
        'icon' => '🔋',
    ],
    [
        'name' => $it ? 'Ventilatori Industriali & Soffianti' : 'Industrial Centrifugal Fans & Blowers',
        'category' => $it ? 'Ventilazione & Fumi' : 'Ventilation & Flue Gas',
        'desc' => $it ? 'Unità di ventilazione ad alta pressione e portata per abbattimento fumi, forni industriali e impianti di processo.' : 'Heavy centrifugal and axial fans for industrial ventilation, furnace air delivery, and hot gas exhaust handling.',
        'icon' => '💨',
    ],
    [
        'name' => $it ? 'Filtri Industriali & Abbattimento Polveri' : 'Heavy Industrial Filters & Baghouses',
        'category' => $it ? 'Filtrazione & Ambiente' : 'Environmental Filtration',
        'desc' => $it ? 'Filtri a maniche, a cartuccia e cicloni separatori per il contenimento delle emissioni e il recupero delle polveri.' : 'High-capacity baghouse, cartridge, and cyclone filtration units ensuring air emission compliance and powder recovery.',
        'icon' => '🛡️',
    ],
    [
        'name' => $it ? 'Argani e Sistemi di Sollevamento' : 'Heavy-Duty Winches & Hoisting Systems',
        'category' => $it ? 'Sollevamento Pesante' : 'Lifting & Rigging',
        'desc' => $it ? 'Argani elettrici e idraulici per applicazioni navali, minerarie ed edilizie.' : 'Industrial electric and hydraulic winches for offshore, marine, and construction.',
        'icon' => '⚓',
    ],
    [
        'name' => $it ? 'Macchine Confezionatrici Big Bag' : 'Automated Big Bag Filling Machines',
        'category' => $it ? 'Packaging Industriale' : 'Bulk Packaging',
        'desc' => $it ? 'Impianti automatici di dosaggio e riempimento sacchi da 500 a 2000 kg con pesatura certificata e chiusura ermetica.' : 'Automated 500kg–2000kg bulk bag filling and weighing stations with dust-free docking and PLC integrated batching.',
        'icon' => '📦',
    ],
];
?>

<!-- Page Hero -->
<section class="page-hero-banner">
    <div class="container reveal-item">
        <span class="eyebrow-pill dark-gold">⚙️ <?= $it ? 'Catalogo Apparecchiature' : 'Engineered Equipment' ?></span>
        <h1><?= h($it ? 'Prodotti & Apparecchiature Industriali' : 'Industrial Products & Equipment') ?></h1>
        <p><?= h($it ? 'Supporto ingegneristico, sourcing qualificato e controllo qualità per macchinari e componenti critici.' : 'Engineering-backed sourcing, manufacturing inspection, and technical support for heavy industrial products.') ?></p>
    </div>
</section>

<!-- Products Cards Grid -->
<section class="section-pad">
    <div class="container">
        <div class="section-head-wrap text-center reveal-item">
            <span class="eyebrow-pill blue"><?= $it ? 'Capacità di Fornitura' : 'Engineered Solutions' ?></span>
            <h2><?= $it ? 'Componenti & Macchinari per Impianti Complessi' : 'Industrial Components & Automated Machinery' ?></h2>
            <p><?= $it ? 'MSIX gestisce la selezione, il reverse engineering, l’ispezione in fabbrica e la logistica di fornitura.' : 'We provide end-to-end technical oversight, dimensional quality audits, and delivery coordination for precision industrial equipment.' ?></p>
        </div>

        <!-- Interactive Instant Search & Category Filter Bar -->
        <div class="interactive-filter-bar reveal-item">
            <div class="search-input-wrapper">
                <span class="search-icon-symbol">🔍</span>
                <input type="text" id="productSearchInput" class="filter-search-input" placeholder="<?= $it ? 'Cerca apparecchiature (es. valvole, nastri, filtri, quadri)...' : 'Search products (e.g. valves, conveyors, baghouses, panels)...' ?>" aria-label="Search products">
                <button type="button" id="clearProductSearch" class="search-clear-btn" style="display:none;" aria-label="Clear search">&times;</button>
            </div>
            <div class="filter-pill-chips" id="productFilterChips">
                <button type="button" class="filter-chip-btn is-active" data-filter="all"><?= $it ? 'Tutti i Prodotti' : 'All Products' ?></button>
                <button type="button" class="filter-chip-btn" data-filter="valvole|valves|pompe|pumps"><?= $it ? 'Valvole & Pompe' : 'Valves & Pumps' ?></button>
                <button type="button" class="filter-chip-btn" data-filter="trasporto|nastri|elevatori|coclee|conveyor|bulk"><?= $it ? 'Movimentazione' : 'Material Handling' ?></button>
                <button type="button" class="filter-chip-btn" data-filter="filtri|baghouse|filtrazione"><?= $it ? 'Filtrazione' : 'Filtration' ?></button>
                <button type="button" class="filter-chip-btn" data-filter="quadri|plc|mcc|automazione"><?= $it ? 'Quadri Elettrici & PLC' : 'Panels & Automation' ?></button>
            </div>
        </div>

        <div id="productResultsNotice" class="filter-results-notice" style="display:none;"></div>

        <div class="cards-tri-grid" id="productGrid">
            <?php foreach ($productList as $prod): ?>
                <div class="simple-info-card reveal-item">
                    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:0.75rem;">
                        <span class="eyebrow-pill blue" style="margin-bottom:0;font-size:0.72rem;padding:0.18rem 0.6rem;"><?= h($prod['category']) ?></span>
                        <span style="font-size:1.5rem;"><?= $prod['icon'] ?></span>
                    </div>
                    <h3><?= h($prod['name']) ?></h3>
                    <p><?= h($prod['desc']) ?></p>
                    <div class="card-action">
                        <a href="contact.php?req=<?= urlencode('Sourcing / Technology Transfer') ?>" class="btn btn-primary btn-sm" style="width:100%;">
                            <?= h(t('common.request_quote')) ?> &rarr;
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center" style="margin-top:2rem;">
            <a href="industries.php" class="btn btn-outline-dark"><?= $it ? 'Vedi Settori' : 'View Industries' ?></a>
            <a href="services.php" class="btn btn-primary"><?= $it ? 'Torna a Cosa Offriamo' : 'Back to What We Offer' ?></a>
        </div>
    </div>
</section>

<?php render_footer(); ?>
