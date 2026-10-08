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
        <p><?= h($it ? 'Il partner operativo con sede a Milano che unisce la precisione dell’ingegneria europea con la capacità manifatturiera e le opportunità di mercato dell’India.' : 'The Milan-based operating partner that combines the precision of European engineering with the manufacturing capabilities and market opportunities of India.') ?></p>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="section-pad section-surface" id="mission-vision">
    <div class="container">
        <div class="section-head-wrap text-center reveal-item">
            <span class="eyebrow-pill blue"><?= $it ? 'Scopo & Direzione Strategica' : 'Our Purpose & Strategic Direction' ?></span>
            <h2><?= $it ? 'La Nostra Missione e Visione' : 'Our Mission & Vision' ?></h2>
            <p><?= $it ? 'Un mandato chiaro e rigoroso per connettere la precisione dell’ingegneria europea con la capacità produttiva dell’India.' : 'A clear, uncompromising mandate to connect European precision engineering with Indian industrial manufacturing capabilities.' ?></p>
        </div>

        <div class="mission-vision-grid">
            <!-- Mission Card -->
            <div class="mv-card mission-card reveal-item">
                <div class="mv-icon-badge">🎯</div>
                <h3><?= $it ? 'La Nostra Missione' : 'Our Mission' ?></h3>
                <p>
                    <?= $it ? 'Consentire alle imprese industriali europee un accesso continuo e privo di rischi ai talenti ingegneristici Indiani di livello mondiale, a catene di fornitura produttive controllate e a opportunità di gare d’appalto multimiliardarie, regolate da rigorosi standard europei, rigorosi controlli di qualità e zero barriere di comunicazione.' : 'To empower European industrial enterprises with seamless, risk-free access to India’s world-class engineering talent, audited manufacturing supply chains, and multi-billion dollar tender opportunities — governed by strict European standards, rigorous quality control, and zero communication barriers.' ?>
                </p>
                <ul class="mv-feature-list">
                    <li>
                        <span class="mv-check">✓</span>
                        <span><?= $it ? 'Rigoroso rispetto delle norme europee ISO/EN e delle tolleranze di precisione GD&T' : 'Strict adherence to European ISO/EN norms & precision GD&T tolerances' ?></span>
                    </li>
                    <li>
                        <span class="mv-check">✓</span>
                        <span><?= $it ? 'Accordo di non divulgazione (NDA) conforme agli standard europei – protezione della proprietà intellettuale (IP)' : 'Guaranteed European-standard NDA - intellectual property (IP) protection' ?></span>
                    </li>
                    <li>
                        <span class="mv-check">✓</span>
                        <span><?= $it ? 'Audit in officina basati su tappe fondamentali con certificati EN 10204 3.1 tracciabili' : 'Milestone-based shop-floor audits with traceable EN 10204 3.1 certificates' ?></span>
                    </li>
                    <li>
                        <span class="mv-check">✓</span>
                        <span><?= $it ? 'Ottimizzazione dei costi non inferiore al 35–50% senza compromettere l’affidabilità meccanica' : 'Not less than 35–50% cost optimization without compromising mechanical reliability' ?></span>
                    </li>
                </ul>
            </div>

            <!-- Vision Card -->
            <div class="mv-card vision-card reveal-item">
                <div class="mv-icon-badge">🔭</div>
                <h3><?= $it ? 'La Nostra Visione' : 'Our Vision' ?></h3>
                <p>
                    <?= $it ? 'Essere il principale e più affidabile ponte ingegneristico transfrontaliero tra Europa e India, pioniere di una collaborazione tecnica trasparente basata su traguardi, di un\'implementazione tecnologica localizzata e di una produzione industriale certificata.' : 'To be the premier, most trusted cross-border engineering bridge between Europe and India — pioneering transparent milestone-driven technical collaboration, localized technology deployment, and audited industrial manufacturing.' ?>
                </p>
                <ul class="mv-feature-list">
                    <li>
                        <span class="mv-check">✓</span>
                        <span><?= $it ? 'Creazione di una rete d’élite, accuratamente selezionata, di produttori sottoposti a revisione e centri di progettazione specializzati' : 'Cultivating an elite, vetted network of audited manufacturers and specialized design hubs' ?></span>
                    </li>
                    <li>
                        <span class="mv-check">✓</span>
                        <span><?= $it ? 'Introduzione di rapporti di ispezione digitali trasparenti e registri di convalida 3D CMM' : 'Pioneering transparent digital inspection reports and 3D CMM validation logs' ?></span>
                    </li>
                    <li>
                        <span class="mv-check">✓</span>
                        <span><?= $it ? 'Accelerazione del trasferimento tecnologico europeo e dell’implementazione industriale localizzata in India' : 'Accelerating European technology transfer and localized industrial deployment in India' ?></span>
                    </li>
                    <li>
                        <span class="mv-check">✓</span>
                        <span><?= $it ? 'Promozione di partnership industriali a lungo termine fondate su un’affidabilità misurabile' : 'Fostering long-term industrial partnerships founded on measurable reliability' ?></span>
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
                <span><?= $it ? 'Fondatore e Direttore (ubicato a Milano, Italia) • Con oltre 15 anni di esperienza nel settore industriale' : 'Founder & Director • Milan, Italy • 15+ Years Industrial Experience' ?></span>
            </div>
        </div>
        <div class="founder-info-column reveal-item">
            <span class="eyebrow-pill gold"><?= h($it ? 'Leadership e filosofia ingegneristica' : 'Leadership & Engineering Philosophy') ?></span>
            <h2><?= h($it ? 'Una governance diretta dall’Italia con profonde radici sul territorio indiano' : 'Direct Governance from Italy with Deep Roots on the Ground in India') ?></h2>
            <p class="lead-quote">
                <?= h($it ? '“MSIX è stata creata per eliminare i rischi tecnici, operativi e culturali che le imprese industriali europee devono affrontare quando si espandono o si riforniscono in India.”' : '“MSIX was built to eliminate the technical, operational, and cultural risks European industrial enterprises face when expanding or sourcing in India.”') ?>
            </p>
            <p>
                <?= h($it ? 'Raghav Kumar, fondatore e amministratore delegato di MSIX, è un ingegnere meccanico indiano laureato presso il Politecnico di Milano. Con sede a Milano, in Italia, vanta oltre 15 anni di esperienza sul campo nella progettazione meccanica, nell’ingegneria pesante, nella gestione di progetti transnazionali e nelle vendite tecniche in Europa e in India. Grazie alla sua vasta esperienza di collaborazione con OEM europei e con le principali catene di fornitura manifatturiere indiane, Raghav garantisce che ogni progetto soddisfi rigorosi standard internazionali in materia di qualità, tolleranze e tempi di consegna.' : 'Raghav Kumar, MSIX founder and CEO, is an Indian mechanical engineer with a degree from the Polytechnic University of Milan. Based in Milan, Italy, he has over 15 years of hands-on experience in mechanical design, heavy engineering, cross-border project management, and technical sales in Europe and India. Thanks to his extensive experience working with European OEMs and major Indian manufacturing supply chains, Raghav ensures that each project meets rigorous international standards for quality, tolerances, and delivery times.') ?>
            </p>
            <p>
                <?= h($it ? 'Ogni progetto MSIX prende il via in un ambito tecnico concordato, responsabilità basate su milestone, controlli certificati dei fornitori, una rigorosa protezione della proprietà intellettuale (IP) in ambito europeo e rapporti periodici sullo stato di avanzamento corredati da documentazione di test certificata.' : 'Every MSIX engagement begins with an agreed technical scope, milestone-driven accountability, audited supplier checks, strict European IP protection, and regular progress reporting with certified test documentation.') ?>
            </p>
            <div class="hub-strip-bar">
                <strong><?= $it ? 'Centri operativi strategici' : 'Operating Presence' ?>:</strong>
                <span><?= $it ? 'Milano (Direzione europea) • Delhi (Gare d\'appalto) • Calcutta (Ingegneria e controllo qualità)' : 'Milan (European Direction) • Delhi (Tenders & Government) • Kolkata (CAD/FEM & Factory Quality)' ?></span>
            </div>
            <div class="button-duo-row" style="margin-top:1.5rem;">
                <a class="btn btn-primary btn-lg" href="contact.php"><?= h($it ? 'Fissa una chiamata preliminare' : 'Schedule Scoping Call') ?> &rarr;</a>
                <a class="btn btn-outline-dark btn-lg" href="services.php"><?= h($it ? 'Scopri i nostri servizi' : 'Explore Our Services') ?></a>
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
            <p><?= $it ? 'Standard inderogabili di integrità ingegneristica, trasparenza e governance che sono alla base di ogni rapporto con i clienti.' : 'Non-negotiable standards of engineering integrity, transparency, and governance that underpin every client engagement.' ?></p>
        </div>

        <div class="values-quad-grid">
            <div class="value-pillar-card reveal-item">
                <div class="value-icon-box">🎯</div>
                <h3><?= $it ? 'Integrità Tecnica' : 'Technical Integrity' ?></h3>
                <p><?= $it ? 'Nessun compromesso su tolleranze dimensionali, calcoli FEM, specifiche dei materiali e norme europee di sicurezza e producibilità.' : 'Zero tolerance for dimensional inaccuracies or substandard materials. Every drawing and part undergoes rigorous engineering validation.' ?></p>
            </div>

            <div class="value-pillar-card reveal-item">
                <div class="value-icon-box">🔍</div>
                <h3><?= $it ? 'Trasparenza totale' : 'Radical Transparency' ?></h3>
                <p><?= $it ? 'Governance basata su traguardi con comunicazione aperta, controlli fotografici in tempo reale in officina e rapporti di ispezione tracciabili.' : 'Milestone-based governance with open communication, real-time photographic shop-floor audits, and traceable inspection reports.' ?></p>
            </div>

            <div class="value-pillar-card reveal-item">
                <div class="value-icon-box">🛡️</div>
                <h3><?= $it ? 'Protezione IP & NDA' : 'IP Protection & NDA' ?></h3>
                <p><?= $it ? 'I vostri modelli CAD, le vostre formulazioni e i vostri progetti esclusivi sono tutelati da accordi di riservatezza (NDA) rigorosi e applicabili a livello europeo e da protocolli di sicurezza dei dati.' : 'Your proprietary CAD models, formulations, and designs are safeguarded under strict European-enforceable NDAs and secure data protocols.' ?></p>
            </div>

            <div class="value-pillar-card reveal-item">
                <div class="value-icon-box">⚡</div>
                <h3><?= $it ? 'Velocità e monitoraggio dei costi' : 'Speed & Cost Scale' ?></h3>
                <p><?= $it ? 'Accesso diretto a ecosistemi produttivi verificati e a team di ingegneri specializzati, che consentono di ridurre i tempi di consegna e ottimizzare il costo totale.' : 'Direct access to vetted manufacturing ecosystems and specialized engineering teams, compressing lead times and optimizing total cost.' ?></p>
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
            <p><?= h($it ? 'Un ponte solido e consolidato nel tempo tra l’Europa e l’India, in grado di eliminare gli attriti transfrontalieri, i ritardi nella comunicazione e i punti ciechi operativi.' : 'A robust, time-tested bridge between Europe and India eliminating cross-border friction, communication delays, and operational blind spots.') ?></p>
        </div>

        <!-- Interactive Animated Hub Flow Visualizer -->
        <div class="hub-flow-visualizer reveal-item">
            <div class="hub-flow-node">
                <div class="hub-flow-badge"><?= flag_italy(22, 15) ?> <span>Milan, Italy</span></div>
                <div class="hub-flow-desc"><?= $it ? 'Direzione Europea & Definizione degli Obiettivi' : 'European Direction & Scoping' ?></div>
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
                <div class="hub-flow-desc"><?= $it ? 'Ingegneria CAD/FEM & Verifica della Qualità' : 'CAD/FEM & Factory Quality' ?></div>
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
                    <strong>⚙️ <?= $it ? 'Controlli NDT & Controlli di Pressione' : 'NDT & Pressure Testing' ?></strong>
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
                <h3><?= $it ? 'Oltre 15 Anni di Esperienza' : '15+ Years Experience' ?></h3>
                <p><?= $it ? 'Ingegneri meccanici senior che comprendono tolleranze, carichi strutturali e metodologie di lavorazione.' : 'Senior mechanical engineering leadership that thoroughly understands tolerances, structural loads, and manufacturability.' ?></p>
            </div>
            <div class="step-card-modern reveal-item">
                <div class="step-card-badge">02</div>
                <h3><?= $it ? 'Comunicazione senza barriere' : 'Zero Communication Gap' ?></h3>
                <p><?= $it ? 'Comunicazione europea fluida in italiano o in inglese con team operativi indiani in loco composti da madrelingua.' : 'Seamless European communication in Italian or English with native on-ground Indian execution teams.' ?></p>
            </div>
            <div class="step-card-modern reveal-item">
                <div class="step-card-badge">03</div>
                <h3><?= $it ? 'Fornitori sottoposti a verifica' : 'Audited Suppliers' ?></h3>
                <p><?= $it ? 'Collaboriamo esclusivamente con stabilimenti di produzione sottoposti a verifica per quanto riguarda le capacità dei macchinari, l’attrezzatura e la conformità alle norme ISO.' : 'We work exclusively with vetted production facilities audited for machine capabilities, tooling, and ISO compliance.' ?></p>
            </div>
            <div class="step-card-modern reveal-item">
                <div class="step-card-badge">04</div>
                <h3><?= $it ? 'Gestione delle tappe fondamentali' : 'Milestone Governance' ?></h3>
                <p><?= $it ? 'Monitoraggio chiaro delle tappe fondamentali con rapporti di ispezione, certificati dei materiali e approvazioni formali relative alla qualità.' : 'Clear milestone tracking with inspection reports, material certificates, and formal quality sign-offs.' ?></p>
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
            <p><?= $it ? 'Risposte rapide alle domande più frequenti sul nostro modello di collaborazione, sulla sicurezza della proprietà intellettuale e sui controlli di qualità.' : 'Quick answers to common questions about our engagement model, IP security, and quality controls.' ?></p>
        </div>

        <div class="faq-accordion-wrap reveal-item">
            <div class="faq-accordion-item is-active">
                <button type="button" class="faq-accordion-btn" aria-expanded="true">
                    <span><?= $it ? 'Come viene tutelata la nostra proprietà intellettuale (disegni CAD e specifiche tecniche)?' : 'How do you protect our intellectual property (CAD drawings and technical specifications)?' ?></span>
                    <span class="faq-icon-indicator">−</span>
                </button>
                <div class="faq-accordion-content" style="max-height:200px;opacity:1;padding-bottom:1.4rem;">
                    <p><?= $it ? 'Tutti i documenti tecnici, i modelli 3D e le specifiche proprietarie sono soggetti a rigorosi accordi di riservatezza (NDA) europei. I dati vengono crittografati e condivisi esclusivamente con ingegneri selezionati e fornitori certificati, vincolati da identici impegni di riservatezza.' : 'All technical documents, 3D models, and proprietary specifications are governed by strict European Non-Disclosure Agreements (NDAs). Data is encrypted and shared only with vetted engineers and certified suppliers bound by identical confidentiality covenants.' ?></p>
                </div>
            </div>

            <div class="faq-accordion-item">
                <button type="button" class="faq-accordion-btn" aria-expanded="false">
                    <span><?= $it ? 'Chi sarà il nostro referente diretto per tutta la durata del progetto?' : 'Who will be our direct point of contact throughout the project?' ?></span>
                    <span class="faq-icon-indicator">+</span>
                </button>
                <div class="faq-accordion-content">
                    <p><?= $it ? 'Il vostro referente tecnico e commerciale principale è Raghav Kumar, fondatore e direttore, con sede a Milano, in Italia. Interagirete con un ingegnere senior nel vostro fuso orario europeo che gestisce direttamente le operazioni sul campo in India.' : 'Your primary technical and commercial interface is Raghav Kumar, Founder & Director, based in Milan, Italy. You interact with a senior engineer in your European timezone who directly manages on-ground operations in India.' ?></p>
                </div>
            </div>

            <div class="faq-accordion-item">
                <button type="button" class="faq-accordion-btn" aria-expanded="false">
                    <span><?= $it ? 'Come viene verificata la qualità prima che i componenti o i macchinari vengano spediti in Europa?' : 'How is quality verified before components or machinery are shipped to Europe?' ?></span>
                    <span class="faq-icon-indicator">+</span>
                </button>
                <div class="faq-accordion-content">
                    <p><?= $it ? 'Il nostro team tecnico di Calcutta effettua controlli in loco presso lo stabilimento in corrispondenza di fasi prestabilite: verifica dimensionale con CMM 3D, collaudo delle materie prime secondo la norma EN 10204 3.1, valutazioni non distruttive e prove idrostatiche/operative, con documentazione completa tramite foto e video.' : 'Our Kolkata technical team performs on-site factory audits at defined milestones: 3D CMM dimensional verification, raw material EN 10204 3.1 testing, non-destructive evaluations, and hydrostatic/operational trial runs with full photographic and video logs.' ?></p>
                </div>
            </div>

            <div class="faq-accordion-item">
                <button type="button" class="faq-accordion-btn" aria-expanded="false">
                    <span><?= $it ? 'Quali modelli commerciali e di collaborazione offrite?' : 'What commercial and engagement models do you offer?' ?></span>
                    <span class="faq-icon-indicator">+</span>
                </button>
                <div class="faq-accordion-content">
                    <p><?= $it ? 'Offriamo contratti a tappe fisse per pacchetti di ingegneria ben definiti o incarichi di approvvigionamento, contratti mensili di assistenza tecnica dedicata e modelli strutturati basati su commissioni in caso di successo o di agenzia per la rappresentanza nelle gare d’appalto.' : 'We provide fixed-milestone contracts for well-defined engineering packages or sourcing assignments, monthly dedicated engineering retainers, and structured success-fee/agency models for tender representation.' ?></p>
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
                <span class="eyebrow-pill dark-gold"><?= $it ? 'MSIX • Sede a Milano' : 'MSIX • Milan HQ' ?></span>
                <h2><?= h($it ? 'Siete pronti a discutere il Vostro Progetto in India?' : 'Ready to Discuss Your Project in India?') ?></h2>
                <p><?= h($it ? 'Parla direttamente con Raghav Kumar, fondatore e direttore, con sede a Milano, in Italia. Esamineremo le tue esigenze tecniche e ti forniremo indicazioni chiare e concrete.' : 'Speak directly with Raghav Kumar, Founder & Director, based in Milan, Italy. We will review your technical requirements and provide clear, actionable guidance.') ?></p>
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
