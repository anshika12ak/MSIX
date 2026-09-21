<?php
require_once __DIR__ . '/includes/bootstrap.php';
$it = $lang === 'it';
render_header(t('page.about'), 'about');
?>

<!-- Page Hero Banner -->
<section class="page-hero-banner">
    <div class="container reveal-item">
        <span class="eyebrow-pill dark-gold">🇮🇹 <?= $it ? 'Direzione Europea' : 'European Leadership' ?> ⇄ 🇮🇳 <?= $it ? 'Produzione in India' : 'Indian Scale' ?></span>
        <h1><?= h($it ? 'Perché Scegliere MSIX' : 'Why Choose MSIX') ?></h1>
        <p><?= h($it ? 'Il partner operativo con sede a Milano che unisce la precisione dell’ingegneria europea con la capacità manifatturiera e le opportunità di mercato dell’India.' : 'Your trusted engineering and operating partner bridging European technical precision with Indian industrial manufacturing scale and market opportunities.') ?></p>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="section-pad section-surface" id="mission-vision">
    <div class="container">
        <div class="section-head-wrap text-center reveal-item">
            <span class="eyebrow-pill blue"><?= $it ? 'Scopo & Direzione Strategica' : 'Our Purpose & Strategic Direction' ?></span>
            <h2><?= $it ? 'La Nostra Missione e Visione' : 'Our Mission & Vision' ?></h2>
            <p><?= $it ? 'Un mandato chiaro e rigoroso per connettere la precisione dell’ingegneria europea con la capacità produttiva dell’India.' : 'A clear, uncompromising mandate to connect European precision engineering with Indian industrial scale.' ?></p>
        </div>

        <div class="mission-vision-grid">
            <!-- Mission Card -->
            <div class="mv-card mission-card reveal-item">
                <div class="mv-icon-badge">🎯</div>
                <h3><?= $it ? 'La Nostra Missione' : 'Our Mission' ?></h3>
                <p>
                    <?= $it ? 'Consentire alle aziende industriali e manifatturiere europee di cogliere appieno le opportunità offerte dall’India — nell’outsourcing ingegneristico, nella fornitura di componenti meccanici e nelle gare pubbliche/private — eliminando ogni rischio tecnico, linguistico, qualitativo o procedurale.' : 'To empower European industrial enterprises with seamless, risk-free access to India’s world-class engineering talent, audited manufacturing supply chains, and multi-billion dollar tender opportunities — governed by strict European standards, rigorous quality control, and zero communication barriers.' ?>
                </p>
                <ul class="mv-feature-list">
                    <li>
                        <span class="mv-check">✓</span>
                        <span><?= $it ? 'Rigorosa aderenza agli standard qualitativi ISO, EN e tolleranze GD&T' : 'Strict adherence to European ISO/EN norms & precision GD&T tolerances' ?></span>
                    </li>
                    <li>
                        <span class="mv-check">✓</span>
                        <span><?= $it ? 'Protezione totale dei disegni CAD e del know-how tramite accordi NDA europei' : 'Guaranteed European-standard NDA intellectual property (IP) protection' ?></span>
                    </li>
                    <li>
                        <span class="mv-check">✓</span>
                        <span><?= $it ? 'Supervisione continua in fabbrica e tracciabilità con certificati EN 10204 3.1' : 'Milestone-based shop-floor audits with traceable EN 10204 3.1 certificates' ?></span>
                    </li>
                    <li>
                        <span class="mv-check">✓</span>
                        <span><?= $it ? 'Riduzione del 35-50% dei costi di sviluppo e produzione senza compromessi qualitativi' : '35–50% cost optimization without compromising mechanical reliability' ?></span>
                    </li>
                </ul>
            </div>

            <!-- Vision Card -->
            <div class="mv-card vision-card reveal-item">
                <div class="mv-icon-badge">🔭</div>
                <h3><?= $it ? 'La Nostra Visione' : 'Our Vision' ?></h3>
                <p>
                    <?= $it ? 'Diventare il punto di riferimento primario e il partner di fiducia più autorevole per l’interscambio ingegneristico e industriale tra Europa e India, stabilendo un nuovo standard di eccellenza, trasparenza e integrità tecnica cross-border.' : 'To be the premier, most trusted cross-border engineering bridge between Europe and India — pioneering transparent milestone-driven technical collaboration, localized technology deployment, and audited industrial manufacturing.' ?>
                </p>
                <ul class="mv-feature-list">
                    <li>
                        <span class="mv-check">✓</span>
                        <span><?= $it ? 'Creare una rete integrata di poli ingegneristici e produttivi di altissimo livello' : 'Cultivating an elite, vetted network of audited manufacturers and specialized design hubs' ?></span>
                    </li>
                    <li>
                        <span class="mv-check">✓</span>
                        <span><?= $it ? 'Digitalizzare e rendere trasparenti i controlli dimensionali e i collaudi fisici' : 'Pioneering transparent digital inspection reports and 3D CMM validation logs' ?></span>
                    </li>
                    <li>
                        <span class="mv-check">✓</span>
                        <span><?= $it ? 'Accelerare il trasferimento tecnologico europeo e la produzione localizzata in India' : 'Accelerating European technology transfer and localized industrial deployment in India' ?></span>
                    </li>
                    <li>
                        <span class="mv-check">✓</span>
                        <span><?= $it ? 'Garantire una partnership a lungo termine fondata su risultati misurabili e affidabilità' : 'Fostering long-term industrial partnerships founded on measurable reliability' ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Main Founder & Leadership Profile -->
<section class="section-pad">
    <div class="container two-col-showcase">
        <div class="founder-portrait-card reveal-item">
            <img src="<?= h(asset('assets/images/raghav-kumar.jpg')) ?>" alt="Raghav Kumar - Founder & Director MSIX">
            <div class="founder-glass-caption">
                <strong>Raghav Kumar</strong>
                <span>Founder &amp; Director &bull; Milan, Italy &bull; 15+ Years Industrial Experience</span>
            </div>
        </div>
        <div class="founder-info-column reveal-item">
            <span class="eyebrow-pill gold"><?= h($it ? 'Profilo Fondatore & Visione' : 'Leadership & Engineering Philosophy') ?></span>
            <h2><?= h($it ? 'Coordinamento Diretto dall’Italia con Presidio Operativo in India' : 'Direct Governance from Italy with Deep Roots on the Ground in India') ?></h2>
            <p class="lead-quote">
                <?= h($it ? '“MSIX nasce per eliminare i rischi tecnici, culturali e logistici che le aziende europee affrontano quando operano sul mercato industriale indiano.”' : '“MSIX was built to eliminate the technical, operational, and cultural risks European industrial enterprises face when expanding or sourcing in India.”') ?>
            </p>
            <p>
                <?= h($it ? 'Raghav Kumar, Founder & Director, è un ingegnere meccanico con sede a Milano, Italia, con oltre 15 anni di esperienza maturata nella progettazione meccanica, gestione di progetti complessi e vendite tecniche internazionali. Avendo collaborato a lungo sia con OEM europei che con i principali distretti produttivi indiani, Raghav conosce a fondo gli standard qualitativi ISO/EN, le tolleranze geometriche GD&T e le dinamiche operative necessarie per garantire risultati certi.' : 'Raghav Kumar, Founder & Director, is a mechanical engineer based in Milan, Italy, with over 15 years of hands-on experience in mechanical design, heavy engineering, cross-border project management, and technical sales across Europe and India. Having worked extensively with European OEMs and premier Indian manufacturing supply chains, Raghav ensures every project satisfies strict international quality, tolerance, and delivery standards.') ?>
            </p>
            <p>
                <?= h($it ? 'Ogni progetto gestito da MSIX è regolato da contratti chiari, milestone tecniche verificabili, rigorosa protezione della proprietà intellettuale (IP) e aggiornamenti periodici dettagliati con report fotografici e certificati di collaudo.' : 'Every MSIX engagement begins with an agreed technical scope, milestone-driven accountability, audited supplier checks, strict European IP protection, and regular progress reporting with certified test documentation.') ?>
            </p>
            <div class="hub-strip-bar">
                <strong><?= $it ? 'I Nostri Presidi' : 'Operating Presence' ?>:</strong>
                <span>Milan (European Direction) &bull; Delhi (Tenders &amp; Government) &bull; Kolkata (CAD/FEM &amp; Factory Quality)</span>
            </div>
            <div class="button-duo-row" style="margin-top:1.5rem;">
                <a class="btn btn-primary btn-lg" href="contact.php"><?= h($it ? 'Parliamo della Vostra Esigenza' : 'Schedule Scoping Call') ?> &rarr;</a>
                <a class="btn btn-outline-dark btn-lg" href="services.php"><?= h($it ? 'Scopri Cosa Offriamo' : 'Explore Our Services') ?></a>
            </div>
        </div>
    </div>
</section>

<!-- Core Values & Engineering Pillars -->
<section class="section-pad section-surface">
    <div class="container">
        <div class="section-head-wrap text-center reveal-item">
            <span class="eyebrow-pill blue"><?= $it ? 'I Nostri Valori Fondamentali' : 'Our Guiding Principles' ?></span>
            <h2><?= $it ? 'I Quattro Pilastri del Metodo MSIX' : 'The Four Pillars of the MSIX Operating Model' ?></h2>
            <p><?= $it ? 'Principi inderogabili di integrità ingegneristica, trasparenza e qualità su cui poggia ogni nostro incarico.' : 'Non-negotiable standards of engineering integrity, transparency, and governance that underpin every client engagement.' ?></p>
        </div>

        <div class="values-quad-grid">
            <div class="value-pillar-card reveal-item">
                <div class="value-icon-box">🎯</div>
                <h3><?= $it ? 'Integrità Tecnica' : 'Technical Integrity' ?></h3>
                <p><?= $it ? 'Nessun compromesso su tolleranze dimensionali, calcoli FEM, specifiche dei materiali e norme europee di sicurezza e producibilità.' : 'Zero tolerance for dimensional inaccuracies or substandard materials. Every drawing and part undergoes rigorous engineering validation.' ?></p>
            </div>

            <div class="value-pillar-card reveal-item">
                <div class="value-icon-box">🔍</div>
                <h3><?= $it ? 'Trasparenza Totale' : 'Radical Transparency' ?></h3>
                <p><?= $it ? 'Milestone concordate con roadmap chiare, report fotografici di avanzamento fabbrica e certificati di prova 3.1 tracciabili.' : 'Milestone-based governance with open communication, real-time photographic shop-floor audits, and traceable inspection reports.' ?></p>
            </div>

            <div class="value-pillar-card reveal-item">
                <div class="value-icon-box">🛡️</div>
                <h3><?= $it ? 'Protezione IP & NDA' : 'IP Protection & NDA' ?></h3>
                <p><?= $it ? 'Trattamento rigoroso dei disegni CAD e dei segreti industriali sotto accordi di non divulgazione (NDA) validi in Europa.' : 'Your proprietary CAD models, formulations, and designs are safeguarded under strict European-enforceable NDAs and secure data protocols.' ?></p>
            </div>

            <div class="value-pillar-card reveal-item">
                <div class="value-icon-box">⚡</div>
                <h3><?= $it ? 'Efficienza & Velocità' : 'Speed & Cost Scale' ?></h3>
                <p><?= $it ? 'Accesso immediato a team di ingegneri specializzati e fornitori auditati per ridurre tempi di sviluppo e costi di produzione.' : 'Direct access to vetted manufacturing ecosystems and specialized engineering teams, compressing lead times and optimizing total cost.' ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Strategic Hubs Section -->
<section class="section-pad" id="presence">
    <div class="container">
        <div class="section-head-wrap text-center reveal-item">
            <span class="eyebrow-pill blue"><?= h($it ? 'Presenza Globale & Operativa' : 'Operational Footprint') ?></span>
            <h2><?= h($it ? 'I Nostri Tre Hub Strategici Integrati' : 'Our Three Integrated Operating Hubs') ?></h2>
            <p><?= h($it ? 'Un ponte continuativo e collaudato tra Italia e India che azzera le distanze, i fusi orari e le complessità operative.' : 'A robust, time-tested bridge between Europe and India eliminating cross-border friction, communication delays, and operational blind spots.') ?></p>
        </div>

        <!-- Interactive Animated Hub Flow Visualizer -->
        <div class="hub-flow-visualizer reveal-item">
            <div class="hub-flow-node">
                <div class="hub-flow-badge"><?= flag_italy(22, 15) ?> <span>Milan, Italy</span></div>
                <div class="hub-flow-desc"><?= $it ? 'Direzione Europea & Scoping' : 'European Direction & Scoping' ?></div>
            </div>
            <div class="hub-flow-connector">
                <span class="hub-connector-line"></span>
                <span class="hub-connector-pulse"></span>
                <span class="hub-connector-label"><?= $it ? 'Ponte Operativo ⇄' : 'Direct Bridge ⇄' ?></span>
            </div>
            <div class="hub-flow-node">
                <div class="hub-flow-badge"><?= flag_india(22, 15) ?> <span>Delhi (NCR), India</span></div>
                <div class="hub-flow-desc"><?= $it ? 'Gare & Presidio Normativo' : 'Tenders & Regulatory Gateway' ?></div>
            </div>
            <div class="hub-flow-connector">
                <span class="hub-connector-line"></span>
                <span class="hub-connector-pulse"></span>
                <span class="hub-connector-label"><?= $it ? 'Audit Qualità ⇄' : 'Field Audits ⇄' ?></span>
            </div>
            <div class="hub-flow-node">
                <div class="hub-flow-badge"><?= flag_india(22, 15) ?> <span>Kolkata, India</span></div>
                <div class="hub-flow-desc"><?= $it ? 'Ingegneria CAD/FEM & Ispezioni' : 'CAD/FEM & Factory Quality' ?></div>
            </div>
        </div>

        <div class="presence-tri-grid">
            <div class="hub-card reveal-item">
                <div class="hub-flag-icon"><?= flag_italy(36, 24) ?></div>
                <h3>Milan, Italy</h3>
                <span class="hub-role-badge"><?= $it ? 'Sede di Coordinamento & Direzione' : 'European HQ & Direction' ?></span>
                <p><?= $it ? 'Punto di contatto primario per clienti europei. Gestione contrattuale, definizione tecnica dei requisiti, accordi NDA e allineamento commerciale.' : 'Primary client interface for European enterprises. Project scoping, technical requirements definition, contract governance, and commercial alignment.' ?></p>
                <ul class="hub-list">
                    <li><?= $it ? 'Fuso orario europeo e disponibilità diretta' : 'European timezone & immediate availability' ?></li>
                    <li><?= $it ? 'Supervisione tecnica di Raghav Kumar' : 'Direct technical oversight by Raghav Kumar' ?></li>
                    <li><?= $it ? 'Contratti e fatturazione conforme alle normative comunitarie' : 'European-compliant commercial and contractual governance' ?></li>
                </ul>
            </div>

            <div class="hub-card reveal-item">
                <div class="hub-flag-icon"><?= flag_india(36, 24) ?></div>
                <h3>Delhi (NCR), India</h3>
                <span class="hub-role-badge"><?= $it ? 'Hub Gare & Relazioni Istituzionali' : 'Tenders & Regulatory Gateway' ?></span>
                <p><?= $it ? 'Presidio strategico per gare pubbliche e private in India, relazioni con ministeri, enti certificatori e grandi committenti industriali del Nord.' : 'Strategic presence for public and private industrial tenders, regulatory certifications, and liaison with major Northern industrial corridors.' ?></p>
                <ul class="hub-list">
                    <li><?= $it ? 'Identificazione tempestiva bandi e gare d’appalto' : 'Early tender identification & qualification filing' ?></li>
                    <li><?= $it ? 'Supporto burocratico, consorzi e partnership locali' : 'Local procedural, consortium & joint-venture support' ?></li>
                    <li><?= $it ? 'Rete consolidata con istituzioni e parchi industriali' : 'Established ties with regulatory bodies and utility boards' ?></li>
                </ul>
            </div>

            <div class="hub-card reveal-item">
                <div class="hub-flag-icon"><?= flag_india(36, 24) ?></div>
                <h3>Kolkata, India</h3>
                <span class="hub-role-badge"><?= $it ? 'Hub Ingegneria, Fornitori & Qualità' : 'Engineering, Sourcing & Quality' ?></span>
                <p><?= $it ? 'Centro operativo per il coordinamento dei team CAD/FEM, verifica e ispezione fisica dei fornitori e controllo qualità per macchinari e carpenterie.' : 'Operational base for CAD/FEM engineering teams, precision vendor audits, heavy machinery fabrication oversight, and APQP quality inspections.' ?></p>
                <ul class="hub-list">
                    <li><?= $it ? 'Verifica diretta in fabbrica, collaudi CMM e NDT' : 'On-site factory inspections, CMM audits & NDT testing' ?></li>
                    <li><?= $it ? 'Rete qualificata di costruttori meccanici e fonderie' : 'Vetted precision manufacturing supplier network' ?></li>
                    <li><?= $it ? 'Supporto logistico e spedizione container' : 'Export packaging, customs clearance & logistics handling' ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Quality Assurance & Governance Framework -->
<section class="section-pad section-surface">
    <div class="container">
        <div class="qa-framework-panel reveal-item">
            <span class="eyebrow-pill dark-gold">ISO &bull; APQP &bull; EN 10204</span>
            <h2 style="font-family:var(--font-heading);font-size:clamp(1.8rem, 3vw, 2.4rem);margin-bottom:0.8rem;color:#ffffff;"><?= $it ? 'Protocollo di Controllo Qualità & Certificazioni' : 'Quality Assurance & Technical Governance Protocol' ?></h2>
            <p style="max-width:760px;color:#cbd5e1;font-size:1.02rem;line-height:1.6;"><?= $it ? 'Ogni componente e fornitura gestita da MSIX è soggetta a verifiche dimensionali e metallurgiche rigorose prima dell’approvazione per la spedizione internazionale.' : 'Every engineered drawing, fabricated component, and outsourced assembly overseen by MSIX undergoes rigorous inspection protocols prior to international export release.' ?></p>

            <div class="qa-badges-grid">
                <div class="qa-badge-item">
                    <strong>📋 <?= $it ? 'PPAP & APQP' : 'PPAP & APQP Governance' ?></strong>
                    <span><?= $it ? 'Piani di controllo produzione, FMEA e documentazione PPAP Livello 1-5.' : 'Production Part Approval Process, Control Plans, and Design/Process FMEA.' ?></span>
                </div>
                <div class="qa-badge-item">
                    <strong>🔬 <?= $it ? 'Certificati 3.1 & CMM' : '3.1 Material & CMM Audits' ?></strong>
                    <span><?= $it ? 'Analisi chimiche e meccaniche EN 10204 3.1 e rilievi dimensionali 3D.' : 'EN 10204 3.1 chemical/tensile certificates and 3D CMM coordinate dimensional logs.' ?></span>
                </div>
                <div class="qa-badge-item">
                    <strong>⚙️ <?= $it ? 'Controlli NDT & Pressione' : 'NDT & Pressure Testing' ?></strong>
                    <span><?= $it ? 'Ispezioni ultrasuoni, liquidi penetranti e prove idrostatiche ad alta pressione.' : 'Ultrasonic, radiographic, magnetic particle tests, and hydrostatic pressure verification.' ?></span>
                </div>
                <div class="qa-badge-item">
                    <strong>🇪🇺 <?= $it ? 'Conformità Norme CE' : 'CE & European Standards' ?></strong>
                    <span><?= $it ? 'Direttiva Macchine, PED, ATEX e conformità ai requisiti tecnici comunitari.' : 'Machinery Directive, PED, ATEX, and complete harmonized European standard compliance.' ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The MSIX Advantage Grid -->
<section class="section-pad">
    <div class="container">
        <div class="section-head-wrap text-center reveal-item">
            <span class="eyebrow-pill gold"><?= h($it ? 'I Vantaggi MSIX' : 'The MSIX Advantage') ?></span>
            <h2><?= h($it ? 'Perché le Industrie Europee Scelgono MSIX' : 'Why Industrial Companies Partner with Us') ?></h2>
            <p><?= h($it ? 'Garanzie concrete di precisione, tempi certi e responsabilità diretta su ogni fornitura.' : 'Concrete assurances of precision, cost control, and single-source accountability across every milestone.') ?></p>
        </div>

        <div class="steps-quad-grid">
            <div class="step-card-modern reveal-item">
                <div class="step-card-badge">01</div>
                <h3><?= $it ? '15+ Anni di Esperienza' : '15+ Years Experience' ?></h3>
                <p><?= $it ? 'Ingegneri meccanici senior che comprendono tolleranze, carichi strutturali e metodologie di lavorazione.' : 'Senior mechanical engineering leadership that thoroughly understands tolerances, structural loads, and manufacturability.' ?></p>
            </div>
            <div class="step-card-modern reveal-item">
                <div class="step-card-badge">02</div>
                <h3><?= $it ? 'Zero Attriti Linguistici' : 'Zero Communication Gap' ?></h3>
                <p><?= $it ? 'Interlocuzione diretta in Europa, eliminando incomprensioni tecniche, fusi orari e ritardi operativi.' : 'Seamless European communication in Italian or English with native on-ground Indian execution teams.' ?></p>
            </div>
            <div class="step-card-modern reveal-item">
                <div class="step-card-badge">03</div>
                <h3><?= $it ? 'Fornitori Auditati' : 'Audited Suppliers' ?></h3>
                <p><?= $it ? 'Collaboriamo solo con stabilimenti produttivi verificati per capacità tecnica, macchinari CNC e qualità.' : 'We work exclusively with vetted production facilities audited for machine capabilities, tooling, and ISO compliance.' ?></p>
            </div>
            <div class="step-card-modern reveal-item">
                <div class="step-card-badge">04</div>
                <h3><?= $it ? 'Milestone Trasparenti' : 'Milestone Governance' ?></h3>
                <p><?= $it ? 'Stato di avanzamento chiaro a ogni fase con report fotografici, certificati di prova e collaudi finali.' : 'Clear milestone tracking with inspection reports, material certificates, and formal quality sign-offs.' ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions Accordion -->
<section class="section-pad section-surface">
    <div class="container" style="max-width:900px;">
        <div class="section-head-wrap text-center reveal-item">
            <span class="eyebrow-pill blue"><?= $it ? 'Domande Frequenti' : 'FAQ' ?></span>
            <h2><?= $it ? 'Domande Frequenti su MSIX' : 'Frequently Asked Questions' ?></h2>
            <p><?= $it ? 'Risposte rapide ai principali quesiti di aziende europee che collaborano con noi.' : 'Quick answers to common questions about our engagement model, IP security, and quality controls.' ?></p>
        </div>

        <div class="faq-accordion-wrap reveal-item">
            <div class="faq-accordion-item is-active">
                <button type="button" class="faq-accordion-btn" aria-expanded="true">
                    <span><?= $it ? 'Come viene tutelata la nostra proprietà intellettuale (disegni CAD e specifiche)?' : 'How do you protect our intellectual property (CAD drawings and technical specifications)?' ?></span>
                    <span class="faq-icon-indicator">−</span>
                </button>
                <div class="faq-accordion-content" style="max-height:200px;opacity:1;padding-bottom:1.4rem;">
                    <p><?= $it ? 'Tutte le informazioni, disegni 3D e specifiche tecniche vengono gestiti sotto rigorosi accordi di non divulgazione (NDA) stipulati secondo la legislazione europea. I file sono condivisi solo con personale auditato e vincolato da clausole di massima riservatezza.' : 'All technical documents, 3D models, and proprietary specifications are governed by strict European Non-Disclosure Agreements (NDAs). Data is encrypted and shared only with vetted engineers and certified suppliers bound by identical confidentiality covenants.' ?></p>
                </div>
            </div>

            <div class="faq-accordion-item">
                <button type="button" class="faq-accordion-btn" aria-expanded="false">
                    <span><?= $it ? 'Chi sarà il nostro punto di contatto durante il progetto?' : 'Who will be our direct point of contact throughout the project?' ?></span>
                    <span class="faq-icon-indicator">+</span>
                </button>
                <div class="faq-accordion-content">
                    <p><?= $it ? 'Il vostro referente primario sarà direttamente Raghav Kumar, Founder & Director, basato a Milano. Avrete un unico interlocutore nel vostro fuso orario, che coordina operativamente i team e i fornitori in India.' : 'Your primary technical and commercial interface is Raghav Kumar, Founder & Director, based in Milan, Italy. You interact with a senior engineer in your European timezone who directly manages on-ground operations in India.' ?></p>
                </div>
            </div>

            <div class="faq-accordion-item">
                <button type="button" class="faq-accordion-btn" aria-expanded="false">
                    <span><?= $it ? 'Come verificate la qualità prima che le merci vengano spedite in Europa?' : 'How is quality verified before components or machinery are shipped to Europe?' ?></span>
                    <span class="faq-icon-indicator">+</span>
                </button>
                <div class="faq-accordion-content">
                    <p><?= $it ? 'Il nostro team tecnico a Kolkata effettua ispezioni fisiche in fabbrica a ogni milestone critica: controlli dimensionali con CMM, prove NDT non distruttive, analisi chimico-meccaniche con certificati EN 10204 3.1 e collaudi a secco o in pressione.' : 'Our Kolkata technical team performs on-site factory audits at defined milestones: 3D CMM dimensional verification, raw material EN 10204 3.1 testing, non-destructive evaluations, and hydrostatic/operational trial runs with full photographic and video logs.' ?></p>
                </div>
            </div>

            <div class="faq-accordion-item">
                <button type="button" class="faq-accordion-btn" aria-expanded="false">
                    <span><?= $it ? 'Quali modelli contrattuali e di collaborazione offrite?' : 'What commercial and engagement models do you offer?' ?></span>
                    <span class="faq-icon-indicator">+</span>
                </button>
                <div class="faq-accordion-content">
                    <p><?= $it ? 'Offriamo contratti a milestone fissa per progetti specifici di ingegneria o sourcing, contratti di supporto continuativo su base oraria/mensile, oppure accordi di rappresentanza tecnica e commerciale per gare d’appalto in India.' : 'We provide fixed-milestone contracts for well-defined engineering packages or sourcing assignments, monthly dedicated engineering retainers, and structured success-fee/agency models for tender representation.' ?></p>
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
                <span class="eyebrow-pill dark-gold"><?= h($site['short_company']) ?> &bull; <?= $it ? 'Sede a Milano' : 'Milan HQ' ?></span>
                <h2><?= h($it ? 'Pronti a Discutere il Vostro Progetto in India?' : 'Ready to Discuss Your Project in India?') ?></h2>
                <p><?= h($it ? 'Fissate un colloquio preliminare con Raghav Kumar per analizzare le vostre specifiche tecniche e valutare la fattibilità operativa.' : 'Speak directly with Raghav Kumar, Founder & Director, based in Milan, Italy. We will review your technical requirements and provide clear, actionable guidance.') ?></p>
                <div class="cta-chips-list">
                    <span class="cta-chip-item">✉️ <?= h($site['email']) ?></span>
                    <span class="cta-chip-item">💬 <?= h($site['phone']) ?></span>
                    <span class="cta-chip-item">📍 Milan · Delhi · Kolkata</span>
                </div>
            </div>
            <div class="cta-btn-col">
                <a class="btn btn-primary btn-lg" href="contact.php">
                    <span><?= h($it ? 'Richiedi un Colloquio' : 'Talk to Us') ?></span>
                    <span>&rarr;</span>
                </a>
                <a class="btn btn-outline-white" href="<?= h($site['whatsapp_link']) ?>" target="_blank" rel="noopener noreferrer">
                    <span><?= h($it ? 'Chat WhatsApp Diretta' : 'Direct WhatsApp Chat') ?></span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php render_footer(); ?>
