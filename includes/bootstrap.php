<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

$site = [
    'company' => 'MSIX Engineering & Design Solution Pvt. Ltd.',
    'tagline' => 'Innovating Today for a Smarter Tomorrow',
    'email' => 'info@m6eds.com',
    'phone' => '+39-XXX-XXXX | +91-XXX-XXXX',
    'phone_display' => '+39 / +91 Office Lines',
    'whatsapp_link' => 'https://wa.me/393519715596',
    'locations' => ['Milan, Italy', 'Delhi, India', 'Kolkata, India'],
];

function base_path(): string
{
    static $base = null;
    if ($base !== null) {
        return $base;
    }
    $scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '/index.php');
    $dir = rtrim(dirname($scriptName), '/');
    $base = ($dir === '.' || $dir === '') ? '' : $dir;
    return $base;
}

function asset(string $path): string
{
    return base_path() . '/' . ltrim($path, '/');
}

function site_origin(): string
{
    $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (($_SERVER['SERVER_PORT'] ?? '') === '443');
    $scheme = $isHttps ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    return $scheme . '://' . $host;
}

function absolute_asset(string $path): string
{
    return site_origin() . asset($path);
}

function image_url(string $source): string
{
    if ($source === '' || str_starts_with($source, 'data:') || preg_match('#^(?:https?:)?//#i', $source)) {
        return $source;
    }
    if (str_starts_with($source, '/')) {
        return site_origin() . $source;
    }
    return absolute_asset($source);
}

$site['image_url'] = absolute_asset('assets/images/msixlogo.png');

function svg_placeholder(string $label, string $bgColor = '#0d2742'): string
{
    $safeLabel = htmlspecialchars($label, ENT_QUOTES, 'UTF-8');
    $safeColor = preg_match('/^#[0-9a-fA-F]{6}$/', $bgColor) ? $bgColor : '#0d2742';
    $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="1600" height="900" viewBox="0 0 1600 900">'
        . '<defs><linearGradient id="g" x1="0" x2="1" y1="0" y2="1">'
        . '<stop offset="0%" stop-color="' . $safeColor . '"/>'
        . '<stop offset="100%" stop-color="#1e3a5f"/>'
        . '</linearGradient></defs>'
        . '<rect width="1600" height="900" fill="url(#g)"/>'
        . '<text x="50%" y="52%" fill="#ffffff" font-size="66" font-family="Segoe UI, Arial, sans-serif" text-anchor="middle">'
        . $safeLabel
        . '</text>'
        . '</svg>';
    return 'data:image/svg+xml,' . rawurlencode($svg);
}

$nav = [
    ['key' => 'home', 'label' => 'Home', 'href' => 'index.php'],
    ['key' => 'about', 'label' => 'About Us', 'href' => 'about.php'],
    ['key' => 'industries', 'label' => 'Industries', 'href' => 'industries.php'],
    ['key' => 'services', 'label' => 'Services', 'href' => 'services.php'],
    ['key' => 'products', 'label' => 'Products', 'href' => 'products.php'],
    ['key' => 'contact', 'label' => 'Contact', 'href' => 'contact.php'],
];

$imageCatalog = [
    1 => asset('assets/images/catalog/01.jpg'),
    2 => asset('assets/images/catalog/02.jpg'),
    3 => asset('assets/images/catalog/03.jpg'),
    4 => asset('assets/images/catalog/04.jpg'),
    5 => asset('assets/images/catalog/05.jpg'),
    6 => asset('assets/images/catalog/06.jpg'),
    7 => asset('assets/images/catalog/07.jpg'),
    8 => asset('assets/images/catalog/08.jpg'),
    9 => asset('assets/images/catalog/09.jpg'),
    10 => asset('assets/images/catalog/10.jpg'),
    11 => asset('assets/images/catalog/11.jpg'),
    12 => asset('assets/images/catalog/12.jpg'),
    13 => asset('assets/images/catalog/13.jpg'),
    14 => asset('assets/images/catalog/14.jpg'),
    15 => asset('assets/images/catalog/15.jpg'),
    16 => asset('assets/images/catalog/16.jpg'),
    17 => asset('assets/images/catalog/17.jpg'),
    18 => asset('assets/images/catalog/18.jpg'),
    19 => asset('assets/images/catalog/19.jpg'),
    20 => asset('assets/images/catalog/20.jpg'),
    21 => asset('assets/images/catalog/21.jpg'),
    22 => asset('assets/images/catalog/22.jpg'),
    23 => asset('assets/images/catalog/23.jpg'),
    24 => asset('assets/images/catalog/24.jpg'),
    25 => asset('assets/images/catalog/25.jpg'),
    26 => asset('assets/images/catalog/26.jpg'),
    27 => asset('assets/images/catalog/27.jpg'),
    28 => asset('assets/images/catalog/28.jpg'),
    29 => asset('assets/images/catalog/29.jpg'),
    30 => asset('assets/images/catalog/30.jpg'),
    31 => asset('assets/images/catalog/31.jpg'),
    32 => asset('assets/images/catalog/32.jpg'),
    33 => asset('assets/images/catalog/33.jpg'),
    34 => asset('assets/images/catalog/34.jpg'),
    35 => asset('assets/images/catalog/35.jpg'),
];

function img(int $index): string
{
    global $imageCatalog;
    $count = count($imageCatalog);
    if ($count === 0) {
        return '';
    }
    $normalized = (($index - 1) % $count + $count) % $count + 1;
    $source = $imageCatalog[$normalized] ?? '';

    if ($source === '') {
        image_debug_log('Empty source for index ' . $normalized . ', using placeholder.');
        return themed_online_img($normalized);
    }

    if (str_starts_with($source, 'data:') || preg_match('#^(?:https?:)?//#i', $source)) {
        return $source;
    }

    if (local_asset_exists($source)) {
        return image_url($source);
    }

    image_debug_log('Missing local asset for index ' . $normalized . ': ' . $source . ', using placeholder.');
    return themed_online_img($normalized);
}

function local_asset_exists(string $path): bool
{
    $relative = ltrim($path, '/');
    $base = base_path();

    if ($base !== '' && str_starts_with($relative, ltrim($base, '/') . '/')) {
        $relative = substr($relative, strlen(ltrim($base, '/')) + 1);
    }

    $fullPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $relative);
    return is_file($fullPath);
}

function themed_online_img(int $index): string
{
    $lockedUrls = [
        1 => 'https://loremflickr.com/1600/900/aerospace,engineering,aircraft?lock=1001',
        2 => 'https://loremflickr.com/1600/900/automotive,engineering,factory?lock=1002',
        3 => 'https://loremflickr.com/1600/900/industrial,automation,robotics?lock=1003',
        4 => 'https://loremflickr.com/1600/900/electrical,engineering,panel?lock=1004',
        5 => 'https://loremflickr.com/1600/900/energy,power,plant?lock=1005',
        6 => 'https://loremflickr.com/1600/900/mechanical,engineering,machinery?lock=1006',
        7 => 'https://loremflickr.com/1600/900/manufacturing,factory,industry?lock=1007',
        8 => 'https://loremflickr.com/1600/900/mining,industry,equipment?lock=1008',
        9 => 'https://loremflickr.com/1600/900/oil,gas,refinery?lock=1009',
        10 => 'https://loremflickr.com/1600/900/industrial,technology,engineering?lock=1010',
        11 => 'https://loremflickr.com/1600/900/mechanical,cad,computer,screen?lock=1011',
        12 => 'https://loremflickr.com/1600/900/engineering,team,office?lock=1012',
        13 => 'https://loremflickr.com/1600/900/engineering,planning,execution?lock=1013',
        14 => 'https://loremflickr.com/1600/900/mechanical,service,engineering?lock=1014',
        15 => 'https://loremflickr.com/1600/900/electrical,automation,engineering?lock=1015',
        16 => 'https://loremflickr.com/1600/900/software,website,development,code?lock=1016',
        17 => 'https://loremflickr.com/1600/900/prototype,engineering,lab?lock=1017',
        18 => 'https://loremflickr.com/1600/900/tooling,jig,fixture?lock=1018',
        19 => 'https://loremflickr.com/1600/900/quality,inspection,industry?lock=1019',
        20 => 'https://loremflickr.com/1600/900/documentation,planning,engineering?lock=1020',
        21 => 'https://loremflickr.com/1600/900/cost,analysis,business,engineering?lock=1021',
        22 => 'https://loremflickr.com/1600/900/industrial,valve,metal?lock=1022',
        23 => 'https://loremflickr.com/1600/900/industrial,pump,equipment?lock=1023',
        24 => 'https://loremflickr.com/1600/900/conveyor,system,factory?lock=1024',
        25 => 'https://loremflickr.com/1600/900/bucket,elevator,industrial?lock=1025',
        26 => 'https://loremflickr.com/1600/900/plc,panel,electrical?lock=1026',
        27 => 'https://loremflickr.com/1600/900/mcc,panel,power?lock=1027',
        28 => 'https://loremflickr.com/1600/900/industrial,motor,electric?lock=1028',
        29 => 'https://loremflickr.com/1600/900/industrial,fan,ventilation?lock=1029',
        30 => 'https://loremflickr.com/1600/900/industrial,filter,system?lock=1030',
        31 => 'https://loremflickr.com/1600/900/industrial,winch,lifting?lock=1031',
        32 => 'https://loremflickr.com/1600/900/packaging,machine,industrial?lock=1032',
        33 => 'https://loremflickr.com/1600/900/fem,analysis,cad,engineering?lock=1033',
        34 => 'https://loremflickr.com/1600/900/plant,layout,process,flow?lock=1034',
        35 => 'https://loremflickr.com/1600/900/engineering,brochure,catalog?lock=1035',
    ];

    $normalized = max(1, min(35, $index));
    return $lockedUrls[$normalized] ?? $lockedUrls[10];
}

function content_img(string $content, ?int $fallbackIndex = null): string
{
    $text = strtolower($content);
    $keywordMap = [
        1 => ['aerospace', 'aircraft', 'aviation', 'aerospaziale'],
        2 => ['automotive', 'car', 'vehicle', 'auto'],
        3 => ['automation', 'automazione', 'robot', 'plc'],
        4 => ['electrical', 'elettrico', 'panel', 'control'],
        5 => ['energy', 'energia', 'power', 'turbine'],
        6 => ['mechanical', 'meccanic', 'machinery', 'workshop'],
        7 => ['manufacturing', 'factory', 'production', 'produzione'],
        8 => ['mining', 'mine', 'minerals', 'miniere'],
        9 => ['oil', 'gas', 'petroleum', 'refinery'],
        10 => ['technology', 'innovation', 'digital'],
        11 => ['cad', 'design', 'modeling', 'modelling'],
        12 => ['team', 'office', 'staff', 'uffici'],
        13 => ['concept', 'execution', 'timeline'],
        14 => ['service mechanical', 'mechanical service'],
        15 => ['service electrical', 'automation service'],
        16 => ['software', 'website', 'web', 'app', 'application', 'code', 'digital workflow'],
        17 => ['prototype', 'prototip'],
        18 => ['tool', 'jig', 'fixture'],
        19 => ['quality', 'inspection', 'controllo'],
        20 => ['apqp', 'documentation', 'documentazione'],
        21 => ['cost', 'risk', 'feasibility', 'costi'],
        22 => ['valve', 'valvole'],
        23 => ['pump', 'pompe'],
        24 => ['conveyor', 'nastro'],
        25 => ['bucket elevator', 'elevatore'],
        26 => ['plc panel', 'quadro plc'],
        27 => ['mcc panel', 'quadro mcc'],
        28 => ['motor', 'motori'],
        29 => ['fan', 'ventilator', 'ventilatori'],
        30 => ['filter', 'filtri'],
        31 => ['winch', 'argano'],
        32 => ['big bag', 'packaging machine'],
        33 => ['analysis', 'fem', 'reverse engineering'],
        34 => ['workflow', 'layout', 'process flow'],
        35 => ['brochure', 'catalog', 'download'],
    ];

    foreach ($keywordMap as $index => $keywords) {
        foreach ($keywords as $keyword) {
            if (strpos($text, $keyword) !== false) {
                return img($index);
            }
        }
    }

    return img($fallbackIndex ?? 10);
}

$industries = [
    ['name' => 'Aerospace', 'img' => content_img('Aerospace industry engineering aircraft systems', 1)],
    ['name' => 'Automotive', 'img' => content_img('Automotive industry vehicle engineering production', 2)],
    ['name' => 'Automation', 'img' => content_img('Automation industrial control robotics systems', 3)],
    ['name' => 'Electrical', 'img' => content_img('Electrical industry panels control power systems', 4)],
    ['name' => 'Energy', 'img' => content_img('Energy and power plant engineering systems', 5)],
    ['name' => 'Mechanical', 'img' => content_img('Mechanical engineering machinery design', 6)],
    ['name' => 'Manufacturing & Technology', 'img' => content_img('Manufacturing technology factory process engineering', 7)],
    ['name' => 'Mining & Critical Minerals', 'img' => content_img('Mining critical minerals industry heavy equipment', 8)],
    ['name' => 'Oil & Gas', 'img' => content_img('Oil and gas refinery process industry', 9)],
];

$services = [
    ['title' => 'Mechanical', 'icon' => "\u{2699}", 'img' => content_img('Mechanical Design, modeling, validation, and production-focused mechanical engineering support.', 14), 'desc' => 'Design, modeling, validation, and production-focused mechanical engineering support.'],
    ['title' => 'Electrical & Automation', 'icon' => "\u{26A1}", 'img' => content_img('Electrical & Automation PLC/MCC planning, control systems integration, and industrial automation support.', 15), 'desc' => 'PLC/MCC planning, control systems integration, and industrial automation support.'],
    ['title' => 'Software', 'icon' => "\u{1F4BB}", 'img' => content_img('Software Engineering software support, digital workflows, and process data integration.', 16), 'desc' => 'Engineering software support, digital workflows, and process data integration.'],
    ['title' => 'Prototype Development', 'icon' => "\u{1F9EA}", 'img' => content_img('Prototype Development Rapid prototyping and validation support from concept to pilot readiness.', 17), 'desc' => 'Rapid prototyping and validation support from concept to pilot readiness.'],
    ['title' => 'Tool & Jig Development', 'icon' => "\u{1F6E0}", 'img' => content_img('Tool & Jig Development Tooling, jigs, fixtures, and manufacturing support systems for production lines.', 18), 'desc' => 'Tooling, jigs, fixtures, and manufacturing support systems for production lines.'],
    ['title' => 'Quality Control', 'icon' => "\u{2705}", 'img' => content_img('Quality Control Inspection planning, quality checkpoints, and documentation-aligned control processes.', 19), 'desc' => 'Inspection planning, quality checkpoints, and documentation-aligned control processes.'],
    ['title' => 'APQP Documentation', 'icon' => "\u{1F4C4}", 'img' => content_img('APQP Documentation Structured APQP deliverables, control plans, and quality documentation workflows.', 20), 'desc' => 'Structured APQP deliverables, control plans, and quality documentation workflows.'],
    ['title' => 'Costing & Risk Analysis', 'icon' => "\u{1F4CA}", 'img' => content_img('Costing & Risk Analysis Budgeting, feasibility, costing, and project risk assessment for execution readiness.', 21), 'desc' => 'Budgeting, feasibility, costing, and project risk assessment for execution readiness.'],
];

$designAnalysis = [
    'CAD / CAE Services',
    '2D Drawings with Tolerance',
    '3D Modeling',
    'FEM Analysis',
    'Reverse Engineering',
    'Plant Layout',
    'Production Process Flow',
];

$products = [
    'Industrial Valves', 'Pumps', 'Belt Conveyor', 'Bucket Elevator', 'PLC Panels', 'MCC Panels',
    'Electrical Motors', 'Industrial Fans', 'Industrial Filters', 'Winch', 'Big Bag Machine'
];

function h(string $value): string { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }

function image_debug_enabled(): bool
{
    return isset($_GET['imgdebug']) && $_GET['imgdebug'] === '1';
}

function image_debug_log(string $message): void
{
    if (!image_debug_enabled()) {
        return;
    }
    error_log('[MSIX image-debug] ' . $message);
}

if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'it'], true)) {
    $_SESSION['lang'] = $_GET['lang'];
}
$lang = $_SESSION['lang'] ?? 'en';

$i18n = [
    'en' => [
        'nav.home' => 'Home',
        'nav.about' => 'About Us',
        'nav.industries' => 'Industries',
        'nav.services' => 'Services',
        'nav.products' => 'Products',
        'nav.contact' => 'Contact',
        'standards.eu' => 'European Standards',
        'standards.india' => 'Make in India Manufacturing',
        'footer.company' => 'Company',
        'footer.industries' => 'Industries',
        'footer.services' => 'Services',
        'footer.products' => 'Products',
        'footer.contact' => 'Contact',
        'footer.tagline' => 'Engineering Excellence | Global Standards | Sustainable Future',
        'footer.about_link' => 'About Us',
        'footer.global_presence' => 'Global Presence',
        'footer.privacy' => 'Privacy Policy',
        'footer.terms' => 'Terms and Conditions',
        'common.explore' => 'Explore',
        'common.learn_more' => 'Learn More',
        'common.request_quote' => 'Request Quote',
        'common.download_brochure' => 'Download Brochure',
        'common.request_consultation' => 'Request Consultation',
        'contact.email_label' => 'Email',
        'contact.name' => 'Name',
        'contact.phone' => 'Phone',
        'contact.message' => 'Message',
        'contact.send' => 'Send Inquiry',
        'contact.thankyou' => 'Thank you. Your inquiry has been received (demo form).',
        'page.home' => 'Home',
        'page.about' => 'About Us',
        'page.industries' => 'Industries',
        'page.services' => 'Services',
        'page.products' => 'Products',
        'page.contact' => 'Contact',
    ],
    'it' => [
        'nav.home' => 'Home',
        'nav.about' => 'Chi Siamo',
        'nav.industries' => 'Settori',
        'nav.services' => 'Servizi',
        'nav.products' => 'Prodotti',
        'nav.contact' => 'Contatti',
        'standards.eu' => 'Standard Europei',
        'standards.india' => 'Produzione Make in India',
        'footer.company' => 'Azienda',
        'footer.industries' => 'Settori',
        'footer.services' => 'Servizi',
        'footer.products' => 'Prodotti',
        'footer.contact' => 'Contatti',
        'footer.tagline' => 'Eccellenza Ingegneristica | Standard Globali | Futuro Sostenibile',
        'footer.about_link' => 'Chi Siamo',
        'footer.global_presence' => 'Presenza Globale',
        'footer.privacy' => 'Informativa sulla Privacy',
        'footer.terms' => 'Termini e Condizioni',
        'common.explore' => 'Esplora',
        'common.learn_more' => 'Scopri di Più',
        'common.request_quote' => 'Richiedi Preventivo',
        'common.download_brochure' => 'Scarica Brochure',
        'common.request_consultation' => 'Richiedi Consulenza',
        'contact.email_label' => 'Email',
        'contact.name' => 'Nome',
        'contact.phone' => 'Telefono',
        'contact.message' => 'Messaggio',
        'contact.send' => 'Invia Richiesta',
        'contact.thankyou' => 'Grazie. La tua richiesta è stata ricevuta (modulo demo).',
        'page.home' => 'Home',
        'page.about' => 'Chi Siamo',
        'page.industries' => 'Settori',
        'page.services' => 'Servizi',
        'page.products' => 'Prodotti',
        'page.contact' => 'Contatti',
    ],
];

function t(string $key): string
{
    global $i18n, $lang;
    return $i18n[$lang][$key] ?? $i18n['en'][$key] ?? $key;
}

if ($lang === 'it') {
    $industries = [
        ['name' => 'Aerospaziale', 'img' => content_img('Aerospaziale settore ingegneria aerospaziale sistemi aircraft', 1)],
        ['name' => 'Automotive', 'img' => content_img('Automotive settore veicoli ingegneria produzione', 2)],
        ['name' => 'Automazione', 'img' => content_img('Automazione industriale robotica controllo processi', 3)],
        ['name' => 'Elettrico', 'img' => content_img('Elettrico settore quadri controllo sistemi di potenza', 4)],
        ['name' => 'Energia', 'img' => content_img('Energia power plant ingegneria sistemi', 5)],
        ['name' => 'Meccanico', 'img' => content_img('Ingegneria meccanica macchinari progettazione', 6)],
        ['name' => 'Produzione e Tecnologia', 'img' => content_img('Produzione tecnologia fabbrica processi industriali', 7)],
        ['name' => 'Miniere e Minerali Critici', 'img' => content_img('Miniere minerali critici industria attrezzature pesanti', 8)],
        ['name' => 'Oil & Gas', 'img' => content_img('Oil gas refinery industria di processo', 9)],
    ];

    $services = [
        ['title' => 'Meccanica', 'icon' => "\u{2699}", 'img' => content_img('Meccanica Supporto di ingegneria meccanica per progettazione, modellazione, validazione e produzione.', 14), 'desc' => 'Supporto di ingegneria meccanica per progettazione, modellazione, validazione e produzione.'],
        ['title' => 'Elettrico e Automazione', 'icon' => "\u{26A1}", 'img' => content_img('Elettrico e Automazione Pianificazione PLC/MCC, integrazione controlli e supporto all\'automazione industriale.', 15), 'desc' => 'Pianificazione PLC/MCC, integrazione controlli e supporto all\'automazione industriale.'],
        ['title' => 'Software', 'icon' => "\u{1F4BB}", 'img' => content_img('Software Supporto software per ingegneria, flussi digitali e integrazione dati di processo.', 16), 'desc' => 'Supporto software per ingegneria, flussi digitali e integrazione dati di processo.'],
        ['title' => 'Sviluppo Prototipi', 'icon' => "\u{1F9EA}", 'img' => content_img('Sviluppo Prototipi Prototipazione rapida e validazione dal concetto alla fase pilota.', 17), 'desc' => 'Prototipazione rapida e validazione dal concetto alla fase pilota.'],
        ['title' => 'Sviluppo Tool e Jig', 'icon' => "\u{1F6E0}", 'img' => content_img('Sviluppo Tool e Jig Attrezzature, dime e sistemi di supporto per linee produttive.', 18), 'desc' => 'Attrezzature, dime e sistemi di supporto per linee produttive.'],
        ['title' => 'Controllo Qualità', 'icon' => "\u{2705}", 'img' => content_img('Controllo Qualità piani di ispezione, punti di controllo qualità e processi documentati.', 19), 'desc' => 'Piani di ispezione, punti di controllo qualità e processi di controllo documentati.'],
        ['title' => 'Documentazione APQP', 'icon' => "\u{1F4C4}", 'img' => content_img('Documentazione APQP deliverable APQP, piani di controllo e flussi documentali qualità.', 20), 'desc' => 'Deliverable APQP, piani di controllo e flussi documentali per la qualità.'],
        ['title' => 'Analisi Costi e Rischi', 'icon' => "\u{1F4CA}", 'img' => content_img('Analisi Costi e Rischi budget, fattibilità, analisi costi e valutazione rischi di progetto.', 21), 'desc' => 'Budget, fattibilità, analisi costi e valutazione dei rischi per la prontezza del progetto.'],
    ];

    $designAnalysis = [
        'Servizi CAD / CAE',
        'Disegni 2D con Tolleranze',
        'Modellazione 3D',
        'Analisi FEM',
        'Reverse Engineering',
        'Layout di Impianto',
        'Flusso di Processo Produttivo',
    ];

    $products = [
        'Valvole Industriali', 'Pompe', 'Nastro Trasportatore', 'Elevatore a Tazze', 'Quadri PLC', 'Quadri MCC',
        'Motori Elettrici', 'Ventilatori Industriali', 'Filtri Industriali', 'Argano', 'Macchina Big Bag'
    ];
}

function current_page_with_lang(string $targetLang): string
{
    $script = $_SERVER['SCRIPT_NAME'] ?? '/index.php';
    $path = basename($script);
    if ($path === '' || $path === '\\' || $path === '/') {
        $path = 'index.php';
    }
    return $path . '?lang=' . rawurlencode($targetLang);
}

function render_header(string $title, string $active): void {
    global $site, $nav, $lang;
    ?>
<!DOCTYPE html>
<html lang="<?= h($lang) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h($title) ?> | <?= h($site['company']) ?></title>
    <meta property="og:image" content="<?= h($site['image_url']) ?>">
    <meta name="twitter:image" content="<?= h($site['image_url']) ?>">
    <link rel="stylesheet" href="<?= h(asset('assets/css/style.css')) ?>">
    <script defer src="<?= h(asset('assets/js/site.js')) ?>"></script>
</head>
<body>
<header class="site-header" id="siteHeader">
    <div class="navbar-wrap">
        <div class="header-shell navbar-inner">
            <a class="brand" href="index.php">
                <img src="<?= h($site['image_url']) ?>" alt="MSIX Engineering & Design Solution logo">
            </a>
            <nav aria-label="Primary">
                <ul class="nav-list">
                    <?php foreach ($nav as $item): ?>
                        <li><a class="<?= $item['key'] === $active ? 'active' : '' ?>" href="<?= h($item['href']) ?>"><?= h(t('nav.' . $item['key'])) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <div class="nav-flags" aria-label="Regions">
                <a class="flag-chip flag-it <?= $lang === 'it' ? 'is-lang-active' : '' ?>" href="<?= h(current_page_with_lang('it')) ?>" title="Italiano" aria-label="Italiano">&#127470;&#127481;</a>
                <a class="flag-chip flag-en <?= $lang === 'en' ? 'is-lang-active' : '' ?>" href="<?= h(current_page_with_lang('en')) ?>" title="English" aria-label="English">&#127470;&#127475;</a>
            </div>
        </div>
        <div class="standards-strip">
            <div class="header-shell standards-strip-inner">
                <span><?= h(t('standards.eu')) ?></span>
                <span class="sep">|</span>
                <span><?= h(t('standards.india')) ?></span>
            </div>
        </div>
    </div>
</header>
<main>
    <?php
}

function render_footer(): void {
    global $site, $nav, $industries, $services, $products, $lang;
    ?>
</main>
<a
    class="chat-float"
    href="<?= h($site['whatsapp_link']) ?>"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Open WhatsApp chat"
    style="position:fixed;right:max(.9rem,env(safe-area-inset-right));bottom:max(.9rem,env(safe-area-inset-bottom));z-index:9999;"
>
    <svg viewBox="0 0 32 32" aria-hidden="true" focusable="false">
        <path d="M16.02 3.2C9 3.2 3.3 8.9 3.3 15.9c0 2.4.7 4.8 2 6.8L3 29l6.5-2.1c1.9 1 4.1 1.6 6.5 1.6 7 0 12.7-5.7 12.7-12.7S23 3.2 16 3.2h.02zm0 22.9c-2 0-3.9-.5-5.6-1.5l-.4-.2-3.9 1.3 1.3-3.8-.3-.4c-1.1-1.7-1.7-3.7-1.7-5.7 0-5.8 4.8-10.6 10.6-10.6s10.6 4.8 10.6 10.6-4.7 10.3-10.5 10.3zm5.8-7.9c-.3-.2-1.8-.9-2-1s-.4-.2-.6.2-.7 1-.8 1.2-.3.2-.6.1-1.2-.4-2.3-1.4c-.8-.7-1.4-1.7-1.6-2-.2-.3 0-.4.1-.6s.3-.3.4-.5.2-.3.3-.5 0-.4 0-.6-.6-1.5-.9-2c-.3-.5-.5-.4-.6-.4h-.5c-.2 0-.6.1-.9.4-.3.3-1.1 1-1.1 2.5s1.1 2.8 1.2 3c.2.2 2.1 3.2 5 4.4.7.3 1.3.5 1.7.6.7.2 1.3.1 1.8.1.6-.1 1.8-.7 2-1.4.3-.7.3-1.3.2-1.4 0-.1-.2-.2-.5-.4z"/>
    </svg>
</a>
<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <h4><?= h(t('footer.company')) ?></h4>
            <a href="about.php"><?= h(t('footer.about_link')) ?></a>
            <a href="contact.php"><?= h(t('nav.contact')) ?></a>
            <a href="index.php#global"><?= h(t('footer.global_presence')) ?></a>
            <a href="privacy.php"><?= h(t('footer.privacy')) ?></a>
            <a href="terms.php"><?= h(t('footer.terms')) ?></a>
        </div>
        <div>
            <h4><?= h(t('footer.industries')) ?></h4>
            <?php foreach (array_slice($industries, 0, 5) as $item): ?>
                <a href="industries.php"><?= h($item['name']) ?></a>
            <?php endforeach; ?>
        </div>
        <div>
            <h4><?= h(t('footer.services')) ?></h4>
            <?php foreach (array_slice($services, 0, 5) as $item): ?>
                <a href="services.php"><?= h($item['title']) ?></a>
            <?php endforeach; ?>
        </div>
        <div>
            <h4><?= h(t('footer.products')) ?></h4>
            <?php foreach (array_slice($products, 0, 5) as $item): ?>
                <a href="products.php"><?= h($item) ?></a>
            <?php endforeach; ?>
        </div>
        <div>
            <h4><?= h(t('footer.contact')) ?></h4>
            <a href="mailto:<?= h($site['email']) ?>"><?= h($site['email']) ?></a>
            <span>Milan, Italy</span>
            <span>Delhi, India</span>
            <span>Kolkata, India</span>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container footer-bottom-inner">
            <span>&copy; <?= date('Y') ?> <?= h($site['company']) ?></span>
            <span>designed by <a href="https://mithilasoftech.com/" target="_blank" rel="noopener noreferrer">https://mithilasoftech.com/</a></span>
        </div>
    </div>
</footer>
</body>
</html>
    <?php
}



