<?php 
$path = "./";       // Siamo nella root, quindi il percorso è corrente
$page = "home";     // Nome della pagina per attivare la classe 'active' nel menu
include 'includes/header_de.php'; 
?>
        <!-- HERO -->
        <section class="hero fade-in">
          <div>
            <div class="hero-badge">
              <span class="hero-dot"></span>
              <span>XR · KI · Cloud · Big Data</span>
            </div>
            <h1 class="hero-title">
              Immersive Technologien für
              <span>wirklich vernetzte Erlebnisse</span>
            </h1>
            <p class="hero-text" style="text-align:justify;">
              Swing:IT – Software Engineering Italia SRL entwickelt und integriert Lösungen für virtuelle und erweiterte Realität, Künstliche Intelligenz und Cloud-Plattformen, um industrielle Prozesse, Ausbildung und Forschung zu transformieren.
            </p>
            <p class="hero-sub" style="text-align:justify;">
              Innovation, Visualisierung und Technologie im Dienst der Nutzererfahrung.
            </p>
            <div class="hero-actions">
              <a href="<?php echo $path; ?>DE/chi-siamo_de.php" class="btn btn-primary">Über</a>
              <a href="<?php echo $path; ?>DE/contatti_de.php" class="btn btn-secondary">Kontakt</a>
            </div>
          </div>

          <div class="hero-visual">
            <img src="<?php echo $path; ?>images/logo-light.png" alt="Swing:IT logo" width="400px"/>
          </div>
        </section>

        <!-- BEREICHE DER AKTIVITÄT -->
        <section class="section fade-in">
          <div class="section-header">
            <div>
              <h2 class="section-title">Bereiche der Aktivität</h2>
              <p class="section-subtitle" style="text-align:justify;">
                Von der Gestaltung immersiver Umgebungen bis zur Verwaltung von Cloud-Infrastrukturen und Datenanalyse begleiten wir öffentliche Einrichtungen, Unternehmen und Forschungszentren.
              </p>
            </div>
          </div>

          <div class="grid-4">
            <article class="card">
              <a href="<?php echo $path; ?>DE/tecnologie_de.php" class="no-highlight">
              <div class="card-icon">XR</div>
              <h3>XR-Technologien</h3>
              <p style="text-align:justify;">
                Lösungen für virtuelle und erweiterte Realität für Training, Simulation und digitale Zwillinge.
              </p>
              </a>
            </article>
            <article class="card">
              <a href="<?php echo $path; ?>DE/tecnologie_de.php" class="no-highlight">
              <div class="card-icon">KI</div>
              <h3>KI-Lösungen</h3>
              <p style="text-align:justify;">
                Künstliche Intelligenz integriert in Visualisierungsworkflows und Entscheidungsprozesse.
              </p>
              </a>
            </article>
            <article class="card">
              <a href="<?php echo $path; ?>DE/tecnologie_de.php" class="no-highlight">
              <div class="card-icon">3D</div>
              <h3>3D-Modellierung</h3>
              <p style="text-align:justify;">
                3D-Pipeline für komplexe Daten, Punktwolken, CAD-Modelle und städtische Szenarien.
              </p>
              </a>
            </article>
            <article class="card">
              <a href="<?php echo $path; ?>DE/tecnologie_de.php" class="no-highlight">
              <div class="card-icon">☁</div>
              <h3>Cloud &amp; Big Data</h3>
              <p style="text-align:justify;">
                Skalierbare Infrastrukturen für Streaming, Speicherung und Analyse großer Datenmengen.
              </p>
              </a>
            </article>
          </div>
        </section>

        <!-- PROJEKTE -->
        <section class="section fade-in">
          <div class="section-header">
            <div>
              <h2 class="section-title">Projekte und Forschung</h2>
              <p class="section-subtitle" style="text-align:justify;">
                Eine Auswahl an Projekten, die XR, KI, 3D und Cloud-Technologien im Gesundheits-, Industrie- und Kulturbereich integrieren.
              </p>
            </div>
          </div>

          <div class="grid-3">
            <article class="card">
              <h3>AgeSense-AI</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/AGESENSEAI.png" alt="AGESENSEAI logo" width="300px"/></p>
              <p style="text-align:justify;">
                Forschungsprojekt zu KI und virtueller Realität zur Bewertung und Unterstützung kognitiver Fähigkeiten.
              </p>
              <div class="card-footer">
                <span class="link-inline">XR-Forschung / KI</span>
                <a href="<?php echo $path; ?>DE/agesense-ai_de.php" class="link-inline">Mehr erfahren</a>
              </div>
            </article>

            <article class="card">
              <h3>ISIPHUR</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/ISIPHUR.png" alt="ISIPHUR logo" width="300px"/></p>
              <p style="text-align:justify;">
                Immersive Umgebung zur Simulation komplexer Szenarien und Analyse heterogener Daten.
              </p>
              <div class="card-footer">
                <span class="link-inline">XR · Daten</span>
                <a href="<?php echo $path; ?>DE/isiphur_de.php" class="link-inline">Mehr erfahren</a>
              </div>
            </article>

            <article class="card">
              <h3>CAT-Lab</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/CATLAB.png" alt="CATLAB logo" width="300px"/></p>
              <p style="text-align:justify;">
                Virtuelles Labor zur Experimentierung mit neuen Mensch-Maschine-Schnittstellen und 3D-Workflows.
              </p>
              <div class="card-footer">
                <span class="link-inline">XR-Labor</span>
                <a href="<?php echo $path; ?>DE/cat-lab_de.php" class="link-inline">Mehr erfahren</a>
              </div>
            </article>

            <article class="card">
              <h3>Eureka3D-XR</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/EUREKA3DXR.png" alt="EUREKA3DXR logo" width="300px"/></p>
              <p style="text-align:justify;">
                XR-Infrastruktur zur Wertschöpfung kultureller Güter und geografischer 3D-Datensätze.
              </p>
              <div class="card-footer">
                <span class="link-inline">Kultur 3D</span>
                <a href="<?php echo $path; ?>DE/eureka3d-xr_de.php" class="link-inline">Mehr erfahren</a>
              </div>
            </article>

            <article class="card">
              <h3>VESPA 2.0</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/VESPA2.png" alt="VESPA2 logo" width="300px"/></p>
              <p style="text-align:justify;">
                Hochimmersive VR-System zur Bewertung und Rehabilitation kognitiver Funktionen.
              </p>
              <div class="card-footer">
                <span class="link-inline">Health XR</span>
                <a href="<?php echo $path; ?>DE/vespa-2-0_de.php" class="link-inline">Mehr erfahren</a>
              </div>
            </article>

            <article class="card">
              <h3>3DLAB</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/3DLAB.png" alt="3DLAB logo" width="300px"/></p>
              <p style="text-align:justify;">
                Plattform zur Verwaltung und kollaborativen Visualisierung wissenschaftlicher und industrieller 3D-Modelle.
              </p>
              <div class="card-footer">
                <span class="link-inline">3D-Plattform</span>
                <a href="<?php echo $path; ?>DE/3dlab-sicilia_de.php" class="link-inline">Mehr erfahren</a>
              </div>
            </article>

            <article class="card">
              <h3>SECESTA VIASAFE</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/SECESTA.png" alt="SECESTA logo" width="300px"/></p>
              <p style="text-align:justify;">
                Immersive Lösungen für die Sicherheit von Mitarbeitern und das Management kritischer Szenarien.
              </p>
              <div class="card-footer">
                <span class="link-inline">Safety XR</span>
                <a href="<?php echo $path; ?>DE/secesta-viasafe_de.php" class="link-inline">Mehr erfahren</a>
              </div>
            </article>

            <article class="card">
              <h3>GRIDCORE</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/GRIDCORE.png" alt="GRIDCORE logo" width="300px"/></p>
              <p style="text-align:justify;">
                Datengetriebene Umgebung zur Analyse komplexer Infrastrukturen und digitaler Zwillinge.
              </p>
              <div class="card-footer">
                <span class="link-inline">Digital Twin</span>
                <a href="<?php echo $path; ?>DE/gridcore_de.php" class="link-inline">Mehr erfahren</a>
              </div>
            </article>

            <article class="card">
              <h3>EMSO-DEV</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/EMSODEV.png" alt="EMSODEV logo" width="300px"/></p>
              <p style="text-align:justify;">
                3D-Visualisierungswerkzeuge und Cloud-Services für großflächige Umwelt- und Meeresdaten.
              </p>
              <div class="card-footer">
                <span class="link-inline">Umweltdaten</span>
                <a href="<?php echo $path; ?>DE/emsodev_de.php" class="link-inline">Mehr erfahren</a>
              </div>
            </article>

            <article class="card">
              <h3>M3 Milano</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/METROMI.png" alt="M3MILANO logo" width="300px"/></p>
              <p style="text-align:justify;">
                Fahrerlose Videoüberwachung für Mailands Linie 3.
              </p>
              <div class="card-footer">
                <span class="link-inline">Smart City</span>
                <a href="<?php echo $path; ?>DE/metromi_de.php" class="link-inline">Mehr erfahren</a>
              </div>
            </article>

            <article class="card">
              <h3>EarthServer</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/EARTHSERVER.png" alt="EARTHSERVER logo" width="300px"/></p>
              <p style="text-align:justify;">
                Cloud-native Technologien zum Abfragen und Visualisieren großer Geodatenarchive in 3D.
              </p>
              <div class="card-footer">
                <span class="link-inline">GeoCloud</span>
                <a href="<?php echo $path; ?>DE/earth-server_de.php" class="link-inline">Mehr erfahren</a>
              </div>
            </article>

            <article class="card">
              <h3>VESPA</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/VESPA.png" alt="VESPA logo" width="300px"/></p>
              <p style="text-align:justify;">
                VR-Plattform für klinische Protokolle und fortgeschrittene Experimente im Bereich der Neurowissenschaften.
              </p>
              <div class="card-footer">
                <span class="link-inline">Klinisches VR</span>
                <a href="<?php echo $path; ?>DE/progetto-vespa_de.php" class="link-inline">Mehr erfahren</a>
              </div>
            </article>
          </div>
        </section>

        <!-- TECHNOLOGIEN IM FOKUS -->
        <section class="section fade-in">
          <div class="section-header">
            <div>
              <h2 class="section-title">Technologien im Fokus</h2>
              <p class="section-subtitle" style="text-align:justify;">
                Ein integriertes Ökosystem, das XR-, Web-, KI- und Cloud-Technologien kombiniert, um konsistente, sichere und skalierbare Erlebnisse zu schaffen.
              </p>
            </div>
          </div>

          <div class="tech-strip">
            <span class="tech-chip">XR</span>
            <span class="tech-chip">VR / AR</span>
            <span class="tech-chip">KI &amp; Machine Learning</span>
            <span class="tech-chip">Web &amp; API</span>
            <span class="tech-chip">Big Data</span>
            <span class="tech-chip">Cloud Computing</span>
            <span class="tech-chip">3D-Modellierung</span>
          </div>

          <div class="cta">
            <p>
              Möchten Sie einen spezifischen Anwendungsfall oder eine Forschungskooperation mit Swing:IT besprechen?
            </p>
            <a href="<?php echo $path; ?>DE/contatti_de.php" class="btn btn-secondary">Sprechen Sie mit dem Team</a>
          </div>
        </section>
      
<?php include 'includes/footer_de.php'; ?>