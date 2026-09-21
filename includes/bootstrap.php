<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

$site = [
    'company' => 'MSIX Engineering & Design Solution Pvt. Ltd.',
    'short_company' => 'MSIX',
    'tagline' => 'Engineering, sourcing and market access for European companies working in India',
    'email' => 'info@m6eds.com',
    'phone' => '+39-351-9715596',
    'contact_name' => 'Raghav Kumar',
    'contact_role' => 'Founder & Director',
    'experience_years' => '15+',
    'whatsapp_link' => 'https://wa.me/393519715596',
    'locations' => ['Milan, Italy', 'Delhi, India', 'Kolkata, India'],
];

if (!function_exists('base_path')) {
    function base_path(): string
    {
        static $base = null;
        if ($base !== null) {
            return $base;
        }
        $scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '/index.php');
        $dir = rtrim(str_replace('\\', '/', dirname($scriptName)), '/');
        $base = ($dir === '.' || $dir === '') ? '' : $dir;
        return $base;
    }
}

if (!function_exists('asset')) {
    function asset(string $path): string
    {
        return base_path() . '/' . ltrim($path, '/');
    }
}

if (!function_exists('site_origin')) {
    function site_origin(): string
    {
        $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
            || (($_SERVER['SERVER_PORT'] ?? '') === '443');
        $scheme = $isHttps ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
        return $scheme . '://' . $host;
    }
}

if (!function_exists('absolute_asset')) {
    function absolute_asset(string $path): string
    {
        return site_origin() . asset($path);
    }
}

if (!function_exists('flag_italy')) {
    function flag_italy(int $width = 20, int $height = 14): string {
        return '<svg class="flag-svg flag-it" viewBox="0 0 640 480" width="' . $width . '" height="' . $height . '" style="display:inline-block;vertical-align:-2px;border-radius:2px;box-shadow:0 0 1px rgba(0,0,0,0.5);margin-right:3px;" aria-label="Italy Flag"><g fill-rule="evenodd"><path fill="#009246" d="M0 0h213.3v480H0z"/><path fill="#ffffff" d="M213.3 0h213.4v480H213.3z"/><path fill="#ce2b37" d="M426.7 0H640v480H426.7z"/></g></svg>';
    }
}

if (!function_exists('flag_india')) {
    function flag_india(int $width = 20, int $height = 14): string {
        return '<svg class="flag-svg flag-in" viewBox="0 0 640 480" width="' . $width . '" height="' . $height . '" style="display:inline-block;vertical-align:-2px;border-radius:2px;box-shadow:0 0 1px rgba(0,0,0,0.5);margin-right:3px;" aria-label="India Flag"><path fill="#FF9933" d="M0 0h640v160H0z"/><path fill="#FFFFFF" d="M0 160h640v160H0z"/><path fill="#138808" d="M0 320h640v160H0z"/><circle cx="320" cy="240" r="54" fill="none" stroke="#000080" stroke-width="6"/><circle cx="320" cy="240" r="9" fill="#000080"/><g stroke="#000080" stroke-width="2.5"><line x1="320" y1="186" x2="320" y2="294"/><line x1="266" y1="240" x2="374" y2="240"/><line x1="282" y1="202" x2="358" y2="278"/><line x1="282" y1="278" x2="358" y2="202"/><line x1="299" y1="188" x2="341" y2="292"/><line x1="341" y1="188" x2="299" y2="292"/><line x1="268" y1="219" x2="372" y2="261"/><line x1="268" y1="261" x2="372" y2="219"/></g></svg>';
    }
}

if (!function_exists('flag_uk')) {
    function flag_uk(int $width = 20, int $height = 14): string {
        return '<svg class="flag-svg flag-gb" viewBox="0 0 640 480" width="' . $width . '" height="' . $height . '" style="display:inline-block;vertical-align:-2px;border-radius:2px;box-shadow:0 0 1px rgba(0,0,0,0.5);margin-right:3px;" aria-label="UK Flag"><path fill="#012169" d="M0 0h640v480H0z"/><path fill="#FFF" d="m75 0 245 180L565 0h75v60L435 240l205 180v60h-75L320 300 75 480H0v-60l205-180L0 60V0h75z"/><path fill="#C8102E" d="m424 288 216 156v36h-48L376 324l48-36zM640 0v12L464 144l48 36L640 48V0zm-424 192L0 36V0h48l216 156-48 36zm-48 96L0 444v36h48l168-120-48-36z"/><path fill="#FFF" d="M240 0h160v480H240zM0 160h640v160H0z"/><path fill="#C8102E" d="M267 0h106v480H267zM0 187h640v106H0z"/></svg>';
    }
}

$site['image_url'] = absolute_asset('assets/images/msixlogo.png');

$nav = [
    ['key' => 'home', 'label' => 'Home', 'href' => 'index.php'],
    ['key' => 'about', 'label' => 'Why MSIX', 'href' => 'about.php'],
    ['key' => 'services', 'label' => 'What We Offer', 'href' => 'services.php'],
    ['key' => 'how_we_work', 'label' => 'How We Work', 'href' => 'how-we-work.php'],
    ['key' => 'contact', 'label' => 'Contact', 'href' => 'contact.php'],
];

$services = [
    [
        'title' => 'Market Access & Tenders in India',
        'icon' => '🌐',
        'img' => asset('assets/images/service-market-access.jpg'),
        'desc' => 'End-to-end guidance for European industrial companies participating in public/private tenders and commercial expansion in India.',
        'details' => [
            'Tender identification and qualification filing',
            'Partner, distributor and supplier capability checks',
            'Local coordination, commercial navigation & procedural support',
        ]
    ],
    [
        'title' => 'Engineering & Technical Outsourcing',
        'icon' => '⚙️',
        'img' => asset('assets/images/service-cad-fem.jpg'),
        'desc' => 'Precision mechanical design, CAD/CAE modeling, FEM stress analysis, electrical automation, and APQP quality governance.',
        'details' => [
            'CAD/CAE, 2D production drawings with GD&T tolerances & 3D modeling',
            'FEM structural analysis, reverse engineering & plant layouts',
            'Electrical, PLC/MCC automation, tooling, jigs & quality documentation',
        ]
    ],
    [
        'title' => 'Technology & Product Transfer',
        'icon' => '🔄',
        'img' => asset('assets/images/service-tech-transfer.jpg'),
        'desc' => 'Conduit for European technology deployment in India and rigorous audited manufacturing & sourcing for European buyers.',
        'details' => [
            'Technical feasibility, cost modeling & localisation assessment',
            'Audited supplier sourcing & ISO/PPAP quality verification',
            'International logistics, delivery coordination',
        ]
    ],
];

if (!function_exists('h')) {
    function h(string $value): string { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
}

if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'it'], true)) {
    $_SESSION['lang'] = $_GET['lang'];
}
$lang = $_SESSION['lang'] ?? 'en';

$i18n = [
    'en' => [
        'nav.home' => 'Home',
        'nav.about' => 'Why MSIX',
        'nav.services' => 'What We Offer',
        'nav.how_we_work' => 'How We Work',
        'nav.contact' => 'Contact',
        'nav.industries' => 'Industries',
        'nav.products' => 'Products',
        'standards.exp' => '15+ Years Industrial Experience',
        'standards.eu_india' => '🇮🇹 European Standards ⇄ 🇮🇳 Indian Scale',
        'footer.company' => 'Company',
        'footer.services' => 'Services',
        'footer.contact' => 'Contact',
        'footer.tagline' => 'Engineering, sourcing and market access for European companies working in India. Coordinated from Italy.',
        'footer.about_link' => 'Why MSIX',
        'footer.privacy' => 'Privacy Policy',
        'footer.terms' => 'Terms & Conditions',
        'common.learn_more' => 'Learn More',
        'common.request_quote' => 'Request Quote',
        'common.talk_to_us' => 'Talk to Us',
        'common.see_offer' => 'See What We Offer',
        'contact.email_label' => 'Email',
        'contact.name' => 'Full Name',
        'contact.company' => 'Company Name',
        'contact.country' => 'Country',
        'contact.phone' => 'Phone (Optional)',
        'contact.requirement' => 'Requirement Area',
        'contact.message' => 'Project Outline / Message',
        'contact.send' => 'Send Enquiry',
        'page.home' => 'Home',
        'page.about' => 'Why MSIX',
        'page.services' => 'What We Offer',
        'page.how_we_work' => 'How We Work',
        'page.contact' => 'Contact',
        'page.industries' => 'Industries',
        'page.products' => 'Products',
    ],
    'it' => [
        'nav.home' => 'Home',
        'nav.about' => 'Perché MSIX',
        'nav.services' => 'Cosa Offriamo',
        'nav.how_we_work' => 'Come Lavoriamo',
        'nav.contact' => 'Contatti',
        'nav.industries' => 'Settori',
        'nav.products' => 'Prodotti',
        'standards.exp' => '15+ Anni di Esperienza Industriale',
        'standards.eu_india' => '🇮🇹 Standard Europei ⇄ 🇮🇳 Produzione in India',
        'footer.company' => 'Azienda',
        'footer.services' => 'Servizi',
        'footer.contact' => 'Contatti',
        'footer.tagline' => 'Ingegneria, sourcing e accesso al mercato per aziende europee in India. Coordinato dall’Italia.',
        'footer.about_link' => 'Perché MSIX',
        'footer.privacy' => 'Informativa sulla Privacy',
        'footer.terms' => 'Termini e Condizioni',
        'common.learn_more' => 'Scopri di Più',
        'common.request_quote' => 'Richiedi Preventivo',
        'common.talk_to_us' => 'Parliamo',
        'common.see_offer' => 'Cosa Offriamo',
        'contact.email_label' => 'Email',
        'contact.name' => 'Nome e Cognome',
        'contact.company' => 'Nome Azienda',
        'contact.country' => 'Paese',
        'contact.phone' => 'Telefono (Facoltativo)',
        'contact.requirement' => 'Area di Esigenza',
        'contact.message' => 'Descrizione del Progetto / Messaggio',
        'contact.send' => 'Invia Richiesta',
        'page.home' => 'Home',
        'page.about' => 'Perché MSIX',
        'page.services' => 'Cosa Offriamo',
        'page.how_we_work' => 'Come Lavoriamo',
        'page.contact' => 'Contatti',
        'page.industries' => 'Settori',
        'page.products' => 'Prodotti',
    ],
];

if (!function_exists('t')) {
    function t(string $key): string
    {
        global $i18n, $lang;
        return $i18n[$lang][$key] ?? $i18n['en'][$key] ?? $key;
    }
}

if (!function_exists('current_page_with_lang')) {
    function current_page_with_lang(string $targetLang): string
    {
        $script = $_SERVER['SCRIPT_NAME'] ?? '/index.php';
        $path = basename($script);
        if ($path === '' || $path === '\\' || $path === '/') {
            $path = 'index.php';
        }
        return $path . '?lang=' . rawurlencode($targetLang);
    }
}

if (!function_exists('render_header')) {
    function render_header(string $title, string $active): void {
        global $site, $nav, $lang;
        $it = $lang === 'it';
        ?>
<!DOCTYPE html>
<html lang="<?= h($lang) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h($title) ?> | <?= h($site['company']) ?></title>
    <meta name="description" content="MSIX Engineering & Design Solution: 15+ years of engineering, sourcing and market access for European companies working in India. Coordinated from Italy.">
    <meta property="og:title" content="<?= h($title) ?> | MSIX Engineering & Design Solution">
    <meta property="og:image" content="<?= h($site['image_url']) ?>">
    <link rel="icon" type="image/png" href="<?= h(asset('assets/images/msixlogo.png')) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= h(asset('assets/css/style.css')) ?>?v=<?= filemtime(__DIR__ . '/../assets/css/style.css') ?>">
    <script defer src="<?= h(asset('assets/js/site.js')) ?>?v=<?= filemtime(__DIR__ . '/../assets/js/site.js') ?>"></script>
</head>
<body class="lang-<?= h($lang) ?>">
<header class="site-header" id="siteHeader">
    <!-- Top Utility Bar -->
    <div class="top-bar">
        <div class="header-shell top-bar-inner">
            <div class="top-bar-left">
                <div class="top-bar-pill">
                    <?= flag_italy(16, 11) ?> <span class="top-pill-label"><?= $it ? 'Standard Europei' : 'European Standards' ?></span>
                    <span class="top-pill-arrow">⇄</span>
                    <?= flag_india(16, 11) ?> <span class="top-pill-label"><?= $it ? 'Produzione in India' : 'Indian Scale' ?></span>
                </div>
                <div class="top-bar-live-badge">
                    <span class="live-pulse-dot"></span>
                    <span><?= $it ? 'Hub Operativo Attivo' : 'Active EU–IN Bridge' ?></span>
                </div>
            </div>
            <div class="top-bar-right">
                <a href="mailto:<?= h($site['email']) ?>" class="top-link" data-copy="<?= h($site['email']) ?>" title="<?= $it ? 'Clicca per copiare l’email' : 'Click to copy email' ?>">
                    <span class="top-link-icon">✉</span> <span><?= h($site['email']) ?></span>
                </a>
                <span class="top-divider">•</span>
                <a href="<?= h($site['whatsapp_link']) ?>" target="_blank" rel="noopener noreferrer" class="top-link top-link-wa">
                    <span class="top-link-icon">💬</span> <span>+39 351 971 5596</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Main Navigation Bar -->
    <div class="main-navbar">
        <div class="header-shell navbar-content">
            <a class="brand-logo" href="index.php" title="<?= h($site['company']) ?>">
                <img src="<?= h(asset('assets/images/msixlogo.png')) ?>" alt="MSIX Logo" class="brand-logo-img" width="44" height="44" style="height:44px;width:auto;max-height:44px;object-fit:contain;">
                <div class="brand-text">
                    <span class="brand-name"><?= h($site['short_company']) ?></span>
                    <span class="brand-sub">Engineering &amp; Design Solution</span>
                </div>
            </a>
            <nav class="desktop-nav" aria-label="Primary Navigation">
                <ul class="nav-menu">
                    <?php foreach ($nav as $item): ?>
                        <li>
                            <a class="<?= $item['key'] === $active ? 'active' : '' ?>" href="<?= h($item['href']) ?>">
                                <span><?= h(t('nav.' . $item['key'])) ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <div class="header-actions">
                <div class="lang-switch-pill" aria-label="Language Selector">
                    <a class="lang-pill-btn <?= $lang === 'it' ? 'active' : '' ?>" href="<?= h(current_page_with_lang('it')) ?>" title="Italiano"><?= flag_italy(16, 11) ?> <span>IT</span></a>
                    <a class="lang-pill-btn <?= $lang === 'en' ? 'active' : '' ?>" href="<?= h(current_page_with_lang('en')) ?>" title="English"><?= flag_india(16, 11) ?> <span>EN</span></a>
                </div>
                <a class="btn-header-cta" href="contact.php" title="<?= h(t('common.talk_to_us')) ?>">
                    <span class="header-cta-dot"></span>
                    <span><?= h(t('common.talk_to_us')) ?> &rarr;</span>
                </a>
                <button class="mobile-nav-toggle" id="mobileMenuBtn" aria-label="Toggle navigation menu" aria-expanded="false">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </div>
</header>
<!-- Standalone Mobile Navigation Drawer -->
<div class="nav-backdrop" id="navBackdrop" aria-hidden="true"></div>
<aside class="mobile-drawer" id="mobileDrawer" aria-label="Mobile Navigation" aria-hidden="true">
    <div class="mobile-drawer-header">
        <a class="drawer-brand" href="index.php">
            <img src="<?= h(asset('assets/images/msixlogo.png')) ?>" alt="MSIX Logo" class="drawer-logo-img" width="36" height="36" style="height:36px;width:auto;max-height:36px;object-fit:contain;">
            <div class="drawer-brand-text">
                <span class="drawer-brand-name"><?= h($site['short_company']) ?></span>
                <span class="drawer-brand-sub">Engineering &amp; Design</span>
            </div>
        </a>
        <button class="mobile-drawer-close" id="mobileDrawerClose" aria-label="<?= $it ? 'Chiudi menu' : 'Close menu' ?>">&times;</button>
    </div>
    <ul class="drawer-nav-menu">
        <?php foreach ($nav as $item): ?>
            <li>
                <a class="<?= $item['key'] === $active ? 'active' : '' ?>" href="<?= h($item['href']) ?>">
                    <span><?= h(t('nav.' . $item['key'])) ?></span>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="mobile-drawer-footer">
        <div class="mobile-drawer-lang-switch">
            <span class="drawer-section-label"><?= $it ? 'Lingua / Language:' : 'Select Language:' ?></span>
            <div class="lang-switch-pill">
                <a class="lang-pill-btn <?= $lang === 'it' ? 'active' : '' ?>" href="<?= h(current_page_with_lang('it')) ?>" title="Italiano"><?= flag_italy(16, 11) ?> <span>Italiano</span></a>
                <a class="lang-pill-btn <?= $lang === 'en' ? 'active' : '' ?>" href="<?= h(current_page_with_lang('en')) ?>" title="English"><?= flag_india(16, 11) ?> <span>English</span></a>
            </div>
        </div>
        <a class="btn btn-primary btn-block drawer-cta-btn" href="contact.php">
            <span><?= h(t('common.talk_to_us')) ?> &rarr;</span>
        </a>
    </div>
</aside>
<main>
    <?php
    }
}

if (!function_exists('render_footer')) {
    function render_footer(): void {
        global $site, $nav, $services, $lang;
        $it = $lang === 'it';
        ?>
</main>
<!-- Floating WhatsApp Contact Button -->
<a
    class="whatsapp-floating-btn"
    href="<?= h($site['whatsapp_link']) ?>"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="WhatsApp"
    title="WhatsApp"
>
    <svg viewBox="0 0 32 32" width="28" height="28" fill="#ffffff" aria-hidden="true">
        <path d="M16.02 3.2C9 3.2 3.3 8.9 3.3 15.9c0 2.4.7 4.8 2 6.8L3 29l6.5-2.1c1.9 1 4.1 1.6 6.5 1.6 7 0 12.7-5.7 12.7-12.7S23 3.2 16 3.2h.02zm0 22.9c-2 0-3.9-.5-5.6-1.5l-.4-.2-3.9 1.3 1.3-3.8-.3-.4c-1.1-1.7-1.7-3.7-1.7-5.7 0-5.8 4.8-10.6 10.6-10.6s10.6 4.8 10.6 10.6-4.7 10.3-10.5 10.3zm5.8-7.9c-.3-.2-1.8-.9-2-1s-.4-.2-.6.2-.7 1-.8 1.2-.3.2-.6.1-1.2-.4-2.3-1.4c-.8-.7-1.4-1.7-1.6-2-.2-.3 0-.4.1-.6s.3-.3.4-.5.2-.3.3-.5 0-.4 0-.6-.6-1.5-.9-2c-.3-.5-.5-.4-.6-.4h-.5c-.2 0-.6.1-.9.4-.3.3-1.1 1-1.1 2.5s1.1 2.8 1.2 3c.2.2 2.1 3.2 5 4.4.7.3 1.3.5 1.7.6.7.2 1.3.1 1.8.1.6-.1 1.8-.7 2-1.4.3-.7.3-1.3.2-1.4 0-.1-.2-.2-.5-.4z"/>
    </svg>
</a>

<footer class="site-footer">
    <div class="container footer-quad-grid">
        <div class="footer-col">
            <div class="footer-brand-logo">
                <a href="index.php" class="footer-brand-link" title="<?= h($site['company']) ?>">
                    <img src="<?= h(asset('assets/images/msixlogo.png')) ?>" alt="MSIX Logo">
                    <div class="footer-brand-text">
                        <span class="footer-brand-name"><?= h($site['short_company']) ?></span>
                        <span class="footer-brand-sub">Engineering &amp; Design Solution</span>
                    </div>
                </a>
            </div>
            <p class="footer-about-text"><?= h(t('footer.tagline')) ?></p>
        </div>
        <div class="footer-col">
            <h4><?= h(t('footer.company')) ?></h4>
            <ul class="footer-link-list">
                <li><a href="about.php"><?= h(t('footer.about_link')) ?></a></li>
                <li><a href="how-we-work.php"><?= h(t('nav.how_we_work')) ?></a></li>
                <li><a href="contact.php"><?= h(t('nav.contact')) ?></a></li>
                <li><a href="privacy.php"><?= h(t('footer.privacy')) ?></a></li>
                <li><a href="terms.php"><?= h(t('footer.terms')) ?></a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4><?= h(t('footer.services')) ?></h4>
            <ul class="footer-link-list">
                <li><a href="services.php#service-1"><?= $it ? 'Accesso al Mercato e Gare' : 'Market Access & Tenders' ?></a></li>
                <li><a href="services.php#service-2"><?= $it ? 'Outsourcing Tecnico' : 'Engineering Outsourcing' ?></a></li>
                <li><a href="services.php#service-3"><?= $it ? 'Trasferimento Tecnologico' : 'Technology Transfer' ?></a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4><?= h(t('footer.contact')) ?></h4>
            <p style="font-size:0.88rem;color:#ffffff;margin-bottom:0.2rem;"><strong><?= h($site['contact_name']) ?></strong></p>
            <p style="font-size:0.8rem;color:#94a3b8;margin-bottom:0.5rem;"><?= h($site['contact_role']) ?> (<?= $it ? 'Sede in Italia' : 'Based in Italy' ?>)</p>
            <p><a href="mailto:<?= h($site['email']) ?>" style="color:#93c5fd;font-size:0.84rem;display:block;margin-bottom:0.2rem;"><?= h($site['email']) ?></a></p>
            <p><a href="<?= h($site['whatsapp_link']) ?>" target="_blank" rel="noopener noreferrer" style="color:#4ade80;font-size:0.84rem;display:block;margin-bottom:0.6rem;">WhatsApp: +39 351 971 5596</a></p>
            <p style="font-size:0.78rem;color:#cbd5e1;">📍 Milan · Delhi · Kolkata</p>
        </div>
    </div>
    <div class="footer-bottom-bar">
        <div class="container footer-bottom-flex">
            <span>&copy; <?= date('Y') ?> <?= h($site['company']) ?>. <?= $it ? 'Tutti i diritti riservati.' : 'All rights reserved.' ?></span>
            <div class="footer-lang-switch" style="display:inline-flex;align-items:center;gap:0.5rem;">
                <span style="font-size:0.8rem;color:#94a3b8;"><?= $it ? 'Lingua:' : 'Language:' ?></span>
                <a class="footer-lang-link <?= $lang === 'it' ? 'active' : '' ?>" href="<?= h(current_page_with_lang('it')) ?>" style="display:inline-flex;align-items:center;gap:4px;color:<?= $lang === 'it' ? '#38bdf8' : '#94a3b8' ?>;font-weight:<?= $lang === 'it' ? '700' : '500' ?>;text-decoration:none;"><?= flag_italy(16, 11) ?> IT</a>
                <span style="color:#475569;">|</span>
                <a class="footer-lang-link <?= $lang === 'en' ? 'active' : '' ?>" href="<?= h(current_page_with_lang('en')) ?>" style="display:inline-flex;align-items:center;gap:4px;color:<?= $lang === 'en' ? '#38bdf8' : '#94a3b8' ?>;font-weight:<?= $lang === 'en' ? '700' : '500' ?>;text-decoration:none;"><?= flag_india(16, 11) ?> EN</a>
            </div>
            <span>Designed &amp; Developed by <a href="https://mithilasoftech.com/" target="_blank" rel="noopener noreferrer">Mithila Softech</a></span>
        </div>
    </div>
</footer>

<!-- Floating Scroll To Top Button with Circular Progress -->
<button class="scroll-top-btn" id="scrollTopBtn" aria-label="<?= $it ? 'Torna all’inizio' : 'Scroll to top' ?>" title="<?= $it ? 'Torna all’inizio' : 'Scroll to top' ?>">
    <svg class="progress-ring" width="44" height="44" viewBox="0 0 44 44">
        <circle class="progress-ring-bg" stroke="rgba(255, 255, 255, 0.15)" stroke-width="3" fill="transparent" r="18" cx="22" cy="22"/>
        <circle class="progress-ring-fill" id="scrollProgressCircle" stroke="#38bdf8" stroke-width="3" stroke-dasharray="113.1" stroke-dashoffset="113.1" stroke-linecap="round" fill="transparent" r="18" cx="22" cy="22"/>
    </svg>
    <span class="scroll-arrow">↑</span>
</button>

<!-- Interactive Floating Toast Container -->
<div id="siteToast" class="site-toast" role="status" aria-live="polite"></div>
</body>
</html>
<?php
    }
}
