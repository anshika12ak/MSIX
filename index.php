<?php
require __DIR__ . '/includes/bootstrap.php';
render_header(t('page.home'), 'home');
?>
<section class="hero-section" id="home">
    <div class="hero-banner-bg">
        <img src="<?= h(content_img('industrial engineering technology background', 10)) ?>" alt="Industrial engineering background">
        <div class="hero-banner-overlay"></div>
        <div class="hero-wave"></div>
    </div>
    <div class="header-shell hero-grid hero-grid-banner">
        <div class="hero-copy-panel hero-copy-banner">
            <h1><?= h('Innovating Today for a Smarter Tomorrow') ?></h1>
            <p class="hero-line"><?= h('Mechanical | Electrical | Energy Engineering') ?></p>
            <p class="hero-subline hero-subline-em"><?= h('From Conceptual Design to Project Execution') ?></p>
            <div class="hero-actions hero-actions-banner">
                <a class="btn btn-primary hero-btn" href="services.php"><?= h($lang === 'it' ? 'Esplora i Servizi' : 'Explore Services') ?></a>
                <a class="btn btn-outline-light hero-btn" href="contact.php"><?= h($lang === 'it' ? 'Contattaci' : 'Contact Us') ?></a>
            </div>
        </div>
        <div class="hero-visual hero-monitor">
            <div class="hero-image-wrap hero-monitor-frame">
                <img src="<?= h(content_img('mechanical cad design modeling', 11)) ?>" alt="Mechanical CAD model on screen">
                <div class="hero-blue-overlay hero-monitor-glow"></div>
            </div>
        </div>
    </div>
    <div class="hero-bottom-strip">
        <div class="header-shell strip-items">
            <span><?= h($lang === 'it' ? 'Eccellenza Ingegneristica' : 'Engineering Excellence') ?></span>
            <span><?= h($lang === 'it' ? 'Standard Globali' : 'Global Standards') ?></span>
            <span><?= h($lang === 'it' ? 'Futuro Sostenibile' : 'Sustainable Future') ?></span>
        </div>
    </div>
</section>

<section class="about-preview section-soft" id="about-preview">
    <div class="container two-col">
        <div class="media-card">
            <img src="<?= h(content_img('precision engineering global perspective mechanical cad on screen', 11)) ?>" alt="Precision engineering with global perspective visual">
        </div>
        <div class="content-card">
            <p class="eyebrow dark"><?= h($lang === 'it' ? 'Chi è MSIX Engineering & Design Solution Pvt. Ltd.' : 'About MSIX Engineering & Design Solution Pvt. Ltd.') ?></p>
            <h2><?= h($lang === 'it' ? 'Ingegneria di Precisione con Prospettiva Globale' : 'Precision Engineering with Global Perspective') ?></h2>
            <p><?= h($lang === 'it' ? 'MSIX è una società multidisciplinare di ingegneria e design che offre soluzioni meccaniche, elettriche ed energetiche per le esigenze dell\'industria moderna. Uniamo eccellenza tecnica, esecuzione pratica e visione sostenibile in ogni progetto.' : 'MSIX is a multidisciplinary engineering and design company delivering mechanical, electrical, and energy solutions tailored to modern industry needs. We combine technical excellence, practical execution, and sustainable thinking across every project.') ?></p>
            <p><?= h($lang === 'it' ? 'Dallo sviluppo concettuale al supporto produttivo e alla preparazione al commissioning, il nostro team allinea prestazioni, qualità ed efficienza dei costi per clienti in India e in Europa.' : 'From concept development to manufacturing support and commissioning readiness, our team aligns performance, quality, and cost efficiency for clients in India and Europe.') ?></p>
            <a class="btn btn-primary" href="about.php"><?= h(t('common.learn_more')) ?></a>
        </div>
    </div>
</section>

<section class="industries-section" id="industries">
    <div class="container">
        <div class="section-heading">
            <p class="eyebrow"><?= h($lang === 'it' ? 'I Nostri Settori' : 'Our Industries') ?></p>
            <h2><?= h($lang === 'it' ? 'Competenza Multidisciplinare nei Settori Critici' : 'Multidisciplinary Expertise Across Critical Sectors') ?></h2>
        </div>
        <div class="industries-feature-image">
            <img src="<?= h(content_img('multidisciplinary expertise across critical sectors industrial engineering', 8)) ?>" alt="Multidisciplinary expertise across critical sectors">
        </div>
        <div class="industry-grid">
            <?php foreach ($industries as $industry): ?>
                <a class="industry-card" href="industries.php" style="--bg:url('<?= h($industry['img']) ?>')">
                    <div class="industry-overlay"></div>
                    <div class="industry-content">
                        <h3><?= h($industry['name']) ?></h3>
                        <span><?= h(t('common.explore')) ?> -></span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="services-section" id="services">
    <div class="container">
        <div class="section-heading">
            <p class="eyebrow dark"><?= h($lang === 'it' ? 'I Nostri Servizi' : 'Our Services') ?></p>
            <h2><?= h($lang === 'it' ? 'Servizi e Soluzioni di Ingegneria' : 'Engineering Services & Solutions') ?></h2>
        </div>
        <div class="services-feature-image">
            <img src="<?= h(content_img('engineering services and solutions mechanical electrical automation', 15)) ?>" alt="Engineering services and solutions visual">
        </div>
        <div class="services-grid">
            <?php foreach ($services as $service): ?>
                <article class="service-card">
                    <img class="service-thumb" src="<?= h($service['img'] ?? content_img($service['title'] . ' ' . $service['desc'], 14)) ?>" alt="<?= h($service['title']) ?>">
                    <div class="service-icon" aria-hidden="true"><?= h($service['icon']) ?></div>
                    <h3><?= h($service['title']) ?></h3>
                    <p><?= h($service['desc']) ?></p>
                    <div class="service-expand"><?= h($lang === 'it' ? 'Scopri di più su' : 'Learn more about') ?> <?= h($service['title']) ?> -></div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="design-analysis" id="expertise">
    <div class="container">
        <div class="analysis-row">
            <article class="analysis-combined-card">
                <div class="analysis-image"><img src="<?= h(content_img('design analysis fem reverse engineering', 33)) ?>" alt="Design and analysis expertise"></div>
                <div class="analysis-content">
                    <p class="eyebrow"><?= h($lang === 'it' ? 'Competenze di Progettazione e Analisi' : 'Design & Analysis Expertise') ?></p>
                    <h2><?= h($lang === 'it' ? 'Profondità Ingegneristica per un\'Esecuzione Affidabile' : 'Engineering Depth for Reliable Execution') ?></h2>
                    <ul class="feature-list">
                        <?php foreach ($designAnalysis as $item): ?>
                            <li><?= h($item) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </article>
        </div>
        <div class="analysis-row reverse">
            <div class="analysis-image"><img src="<?= h(content_img('production process flow plant layout workflow', 34)) ?>" alt="Production and execution workflow visual"></div>
            <div class="analysis-content">
                <p class="eyebrow"><?= h($lang === 'it' ? 'Prontezza all\'Esecuzione' : 'Execution Readiness') ?></p>
                <h2><?= h($lang === 'it' ? 'Dai Disegni al Flusso di Processo e Layout di Impianto' : 'From Drawings to Process Flow and Plant Layout') ?></h2>
                <p><?= h($lang === 'it' ? 'Allineiamo gli output ingegneristici con producibilità, validazione e pianificazione del processo produttivo. L\'obiettivo è semplice: ridurre ritardi, migliorare la qualità e accelerare l\'esecuzione del progetto.' : 'We align engineering outputs with manufacturability, validation, and production process planning. The goal is simple: reduce delays, improve quality outcomes, and accelerate project execution.') ?></p>
                <p><?= h($lang === 'it' ? 'Il nostro approccio integrato supporta fattibilità, definizione del flusso di processo, ottimizzazione del layout e coordinamento cross-funzionale.' : 'Our integrated approach supports feasibility, process flow definition, layout optimization, and cross-functional coordination.') ?></p>
            </div>
        </div>
    </div>
</section>

<section class="products-section" id="products">
    <div class="container">
        <div class="section-heading">
            <p class="eyebrow dark"><?= h($lang === 'it' ? 'Sezione Prodotti' : 'Products Section') ?></p>
            <h2><?= h($lang === 'it' ? 'Griglia Prodotti Industriali' : 'Industrial Products Grid') ?></h2>
        </div>
        <div class="product-grid">
            <?php foreach ($products as $idx => $product): ?>
                <article class="product-card">
                    <img src="<?= h(content_img($product, 22 + $idx)) ?>" alt="<?= h($product) ?>">
                    <div class="product-body">
                        <h3><?= h($product) ?></h3>
                        <p><?= h($lang === 'it' ? 'Supporto per soluzioni industriali con selezione tecnica e pianificazione dell\'esecuzione.' : 'Industrial-grade solution support with engineering-backed selection and execution planning.') ?></p>
                        <a class="btn btn-small btn-outline-dark" href="contact.php"><?= h(t('common.request_quote')) ?></a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="concept-execution" id="execution">
    <div class="container center-wrap">
        <p class="eyebrow"><?= h($lang === 'it' ? 'Dal Concetto all\'Esecuzione' : 'From Concept To Execution') ?></p>
        <h2><?= h($lang === 'it' ? 'Dalla Progettazione Concettuale all\'Esecuzione del Progetto' : 'From Conceptual Design to Project Execution') ?></h2>
        <div class="page-media">
            <img src="<?= h(content_img('from conceptual design to project execution', 13)) ?>" alt="From Conceptual Design to Project Execution">
        </div>
        <div class="timeline" aria-label="Project lifecycle timeline">
            <div class="timeline-line"></div>
            <div class="timeline-step"><?= h($lang === 'it' ? 'Sviluppo Concetto' : 'Concept Development') ?></div>
            <div class="timeline-step"><?= h($lang === 'it' ? 'Progettazione di Dettaglio' : 'Detailed Design') ?></div>
            <div class="timeline-step"><?= h($lang === 'it' ? 'Simulazione' : 'Simulation') ?></div>
            <div class="timeline-step"><?= h($lang === 'it' ? 'Prototipazione e Installazione' : 'Prototyping and Installation') ?></div>
            <div class="timeline-step"><?= h($lang === 'it' ? 'Commissioning' : 'Commissioning') ?></div>
        </div>
    </div>
</section>

<section class="global-presence" id="global">
    <div class="map-bg"></div>
    <div class="container">
        <div class="section-heading light">
            <p class="eyebrow"><?= h($lang === 'it' ? 'Presenza Globale' : 'Global Presence') ?></p>
            <h2><?= h($lang === 'it' ? 'Supporto Ingegneristico tra Europa e India' : 'Engineering Support Across Europe and India') ?></h2>
        </div>
        <div class="pins-grid">
            <div class="pin-card"><span class="pin" aria-hidden="true">&#128205;</span><div><strong><?= h($lang === 'it' ? 'Milano, Italia' : 'Milan, Italy') ?></strong><p><?= h($lang === 'it' ? 'Coordinamento ingegneristico e supporto clienti' : 'Engineering coordination and client support') ?></p></div></div>
            <div class="pin-card"><span class="pin" aria-hidden="true">&#128205;</span><div><strong>Delhi, India</strong><p><?= h($lang === 'it' ? 'Pianificazione esecuzione e supporto ingegneristico' : 'Execution planning and engineering support') ?></p></div></div>
            <div class="pin-card"><span class="pin" aria-hidden="true">&#128205;</span><div><strong>Kolkata, India</strong><p><?= h($lang === 'it' ? 'Supporto a progettazione e delivery' : 'Design and delivery support operations') ?></p></div></div>
        </div>
    </div>
</section>

<section class="cta-section" id="cta">
    <div class="container cta-panel">
        <div>
            <p class="eyebrow dark"><?= h($lang === 'it' ? 'Invito all\'Azione' : 'Call To Action') ?></p>
            <h2><?= h($lang === 'it' ? 'Pronto a Costruire il Futuro con Noi?' : 'Ready to Build the Future with Us?') ?></h2>
            <p><?= h($lang === 'it' ? 'Parliamo delle tue esigenze di ingegneria, design, automazione o prodotti industriali e definiamo il giusto percorso di esecuzione.' : 'Let\'s discuss your engineering, design, automation, or industrial product requirements and define the right execution path.') ?></p>
        </div>
        <div class="cta-buttons">
            <a class="btn btn-primary" href="contact.php"><?= h(t('common.request_consultation')) ?></a>
            <a class="btn btn-outline-dark" href="<?= h(content_img('brochure download', 35)) ?>" download><?= h(t('common.download_brochure')) ?></a>
        </div>
    </div>
</section>
<?php render_footer(); ?>





