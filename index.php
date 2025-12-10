<?php 
$path = "./";       // Siamo nella root, quindi il percorso è corrente
$page = "home";     // Nome della pagina per attivare la classe 'active' nel menu
include 'includes/header_it.php'; 
?>
        <!-- HERO -->
        <section class="hero fade-in">
          <div>
            <div class="hero-badge">
              <span class="hero-dot"></span>
              <span>XR · AI · Cloud · Big Data</span>
            </div>
            <h1 class="hero-title">
              Tecnologie immersive per
              <span>esperienze realmente connesse</span>
            </h1>
            <p class="hero-text" style="text-align:justify;">
              Swing:IT – Software Engineering Italia SRL progetta e integra
              soluzioni di realtà virtuale ed estesa, Intelligenza Artificiale e
              piattaforme cloud per trasformare processi industriali, formazione
              e ricerca.
            </p>
            <p class="hero-sub" style="text-align:justify;">
              Innovazione, visualizzazione e tecnologia al servizio
              dell’esperienza utente.
            </p>
            <div class="hero-actions">
              <a href="<?php echo $path; ?>IT/chi-siamo.php" class="btn btn-primary"
                >About</a
              >
              <a href="<?php echo $path; ?>IT/contatti.php" class="btn btn-secondary"
                >Contatti</a
              >
            </div>
          </div>

          <div class="hero-visual">
            <img src="<?php echo $path; ?>images/logo-light.png" alt="Swing:IT logo" width="400px"/>
          </div>
        </section>

        <!-- AREE DI ATTIVITÀ -->
        <section class="section fade-in">
          <div class="section-header">
            <div>
              <h2 class="section-title">Aree di attività</h2>
              <p class="section-subtitle" style="text-align:justify;">
                Dalla progettazione di ambienti immersivi alla gestione di
                infrastrutture cloud e analisi dei dati, accompagniamo enti
                pubblici, aziende e centri di ricerca.
              </p>
            </div>
          </div>

          <div class="grid-4">
            <article class="card">
              <a href="<?php echo $path; ?>IT/tecnologie.php" class="no-highlight">
              <div class="card-icon">XR</div>
              <h3>XR Technologies</h3>
              <p style="text-align:justify;">
                Soluzioni di realtà virtuale ed estesa per training, simulazione
                e digital twin.
              </p>
              </a>
            </article>
            <article class="card">
              <a href="<?php echo $path; ?>IT/tecnologie.php" class="no-highlight">
              <div class="card-icon">AI</div>
              <h3>AI Solutions</h3>
              <p style="text-align:justify;">
                Intelligenza Artificiale integrata nei workflow di
                visualizzazione e nei processi decisionali.
              </p>
              </a>
            </article>
            <article class="card">
              <a href="<?php echo $path; ?>IT/tecnologie.php" class="no-highlight">
              <div class="card-icon">3D</div>
              <h3>3D Modeling</h3>
              <p style="text-align:justify;">
                Pipeline 3D per dati complessi, point cloud, modelli CAD e
                scenari urbani.
              </p>
              </a>
            </article>
            <article class="card">
              <a href="<?php echo $path; ?>IT/tecnologie.php" class="no-highlight">
              <div class="card-icon">☁</div>
              <h3>Cloud &amp; Big Data</h3>
              <p style="text-align:justify;">
                Infrastrutture scalabili per streaming, archiviazione e analisi
                di grandi volumi di dati.
              </p>
              </a>
            </article>
          </div>
        </section>

        <!-- PROGETTI -->
        <section class="section fade-in">
          <div class="section-header">
            <div>
              <h2 class="section-title">Progetti e ricerca</h2>
              <p class="section-subtitle" style="text-align:justify;">
                Una selezione di progetti che integrano XR, AI, 3D e tecnologie
                cloud in ambito sanitario, industriale e culturale.
              </p>
            </div>
          </div>

          <div class="grid-3">
            <!-- ripeti schema card progetto per tutti i nomi richiesti -->
            <article class="card">
              <h3>AgeSense-AI</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/AGESENSEAI.png" alt="AGESENSEAI logo" width="300px"/></p>
              <p style="text-align:justify;">
                Progetto di ricerca su AI e realtà virtuale per la valutazione e
                il supporto delle capacità cognitive.
              </p>
              <div class="card-footer">
                <span class="link-inline">Ricerca XR / AI</span>
                <a href="<?php echo $path; ?>IT/agesense-ai.php" class="link-inline"
                  >Scopri di più</a
                >
              </div>
            </article>

            <article class="card">
              <h3>ISIPHUR</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/ISIPHUR.png" alt="ISIPHUR logo" width="300px"/></p>
              <p style="text-align:justify;">
                Ambiente immersivo per la simulazione di scenari complessi e
                l’analisi di dati eterogenei.
              </p>
              <div class="card-footer">
                <span class="link-inline">XR · Data</span>
                <a href="<?php echo $path; ?>IT/isiphur.php" class="link-inline"
                  >Scopri di più</a
                >
              </div>
            </article>

            <article class="card">
              <h3>CAT-Lab</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/CATLAB.png" alt="CATLAB logo" width="300px"/></p>
              <p style="text-align:justify;">
                Laboratorio virtuale per la sperimentazione di nuove interfacce
                uomo‑macchina e flussi 3D.
              </p>
              <div class="card-footer">
                <span class="link-inline">XR Lab</span>
                <a href="<?php echo $path; ?>IT/cat-lab.php" class="link-inline"
                  >Scopri di più</a
                >
              </div>
            </article>

            <article class="card">
              <h3>Eureka3D-XR</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/EUREKA3DXR.png" alt="EUREKA3DXR logo" width="300px"/></p>
              <p style="text-align:justify;">
                Infrastruttura XR per la valorizzazione di beni culturali e
                dataset geografici tridimensionali.
              </p>
              <div class="card-footer">
                <span class="link-inline">Cultura 3D</span>
                <a href="<?php echo $path; ?>IT/eureka3d-xr.php" class="link-inline"
                  >Scopri di più</a
                >
              </div>
            </article>

            <article class="card">
              <h3>VESPA 2.0</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/VESPA2.png" alt="VESPA2 logo" width="300px"/></p>
              <p style="text-align:justify;">
                Sistema VR 3D ad alta immersione dedicato alla valutazione e
                riabilitazione delle funzioni cognitive.
              </p>
              <div class="card-footer">
                <span class="link-inline">Health XR</span>
                <a href="<?php echo $path; ?>IT/vespa-2-0.php" class="link-inline"
                  >Scopri di più</a
                >
              </div>
            </article>

            <article class="card">
              <h3>3DLAB</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/3DLAB.png" alt="3DLAB logo" width="300px"/></p>
              <p style="text-align:justify;">
                Piattaforma per la gestione e visualizzazione collaborativa di
                modelli 3D scientifici e industriali.
              </p>
              <div class="card-footer">
                <span class="link-inline">3D Platform</span>
                <a href="<?php echo $path; ?>IT/3dlab-sicilia.php" class="link-inline"
                  >Scopri di più</a
                >
              </div>
            </article>

            <article class="card">
              <h3>SECESTA VIASAFE</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/SECESTA.png" alt="SECESTA logo" width="300px"/></p>
              <p style="text-align:justify;">
                Soluzioni immersive per la sicurezza degli operatori e la
                gestione di scenari critici.
              </p>
              <div class="card-footer">
                <span class="link-inline">Safety XR</span>
                <a href="<?php echo $path; ?>IT/secesta-viasafe.php" class="link-inline"
                  >Scopri di più</a
                >
              </div>
            </article>

            <article class="card">
              <h3>GRIDCORE</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/GRIDCORE.png" alt="GRIDCORE logo" width="300px"/></p>
              <p style="text-align:justify;">
                Ambiente data‑driven per l’analisi di infrastrutture complesse e
                gemelli digitali.
              </p>
              <div class="card-footer">
                <span class="link-inline">Digital Twin</span>
                <a href="<?php echo $path; ?>IT/gridcore.php" class="link-inline"
                  >Scopri di più</a
                >
              </div>
            </article>

            <article class="card">
              <h3>EMSO-DEV</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/EMSODEV.png" alt="EMSODEV logo" width="300px"/></p>
              <p style="text-align:justify;">
                Strumenti di visualizzazione 3D e servizi cloud per dati
                ambientali e marini su larga scala.
              </p>
              <div class="card-footer">
                <span class="link-inline">Env Data</span>
                <a href="<?php echo $path; ?>IT/emsodev.php" class="link-inline"
                  >Scopri di più</a
                >
              </div>
            </article>

            <article class="card">
              <h3>M3 Milano</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/METROMI.png" alt="M3MILANO logo" width="300px"/></p>
              <p style="text-align:justify;">
                Televideocontrollo guida senza conducente per la linea 3 di Milano.
              </p>
              <div class="card-footer">
                <span class="link-inline">Smart City</span>
                <a href="<?php echo $path; ?>IT/metromi.php" class="link-inline"
                  >Scopri di più</a
                >
              </div>
            </article>

            <article class="card">
              <h3>EarthServer</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/EARTHSERVER.png" alt="EARTHSERVER logo" width="300px"/></p>
              <p style="text-align:justify;">
                Tecnologie cloud‑native per interrogare e visualizzare grandi
                archivi di dati geospaziali in 3D.
              </p>
              <div class="card-footer">
                <span class="link-inline">GeoCloud</span>
                <a href="<?php echo $path; ?>IT/earth-server.php" class="link-inline"
                  >Scopri di più</a
                >
              </div>
            </article>

            <article class="card">
              <h3>VESPA</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/VESPA.png" alt="VESPA logo" width="300px"/></p>
              <p style="text-align:justify;">
                Piattaforma VR per protocolli clinici e sperimentazioni
                avanzate in ambito neuroscientifico.
              </p>
              <div class="card-footer">
                <span class="link-inline">Clinical VR</span>
                <a href="<?php echo $path; ?>IT/progetto-vespa.php" class="link-inline"
                  >Scopri di più</a
                >
              </div>
            </article>
          </div>
        </section>

        <!-- TECNOLOGIE IN EVIDENZA -->
        <section class="section fade-in">
          <div class="section-header">
            <div>
              <h2 class="section-title">Tecnologie in evidenza</h2>
              <p class="section-subtitle" style="text-align:justify;">
                Un ecosistema integrato che combina tecnologie XR, web, AI e
                cloud per costruire esperienze coerenti, sicure e scalabili.
              </p>
            </div>
          </div>

          <div class="tech-strip">
            <span class="tech-chip">XR</span>
            <span class="tech-chip">VR / AR</span>
            <span class="tech-chip">AI &amp; Machine Learning</span>
            <span class="tech-chip">Web &amp; API</span>
            <span class="tech-chip">Big Data</span>
            <span class="tech-chip">Cloud Computing</span>
            <span class="tech-chip">3D Modeling</span>
          </div>

          <div class="cta">
            <p>
              Vuoi discutere un caso d’uso specifico o una collaborazione di
              ricerca con Swing:IT?
            </p>
            <a href="<?php echo $path; ?>IT/contatti.php" class="btn btn-secondary"
              >Parla con il team</a
            >
          </div>
        </section>
      
<?php include 'includes/footer_it.php'; ?>