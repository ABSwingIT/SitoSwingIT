<?php 
$path = "../";      // Siamo dentro una cartella, dobbiamo salire di un livello per trovare css e images
$page = "ricerca";    // Questo farà illuminare "R&I" nel menu
include '../includes/header_it.php'; // Notare ../ prima di includes
?>
        <section class="inner-hero fade-in">
          <div class="breadcrumb"><a href="<?php echo $path; ?>index.php">Home</a> / Ricerca e Innovazione</div>
          <h1 class="inner-title">Ricerca e Innovazione</h1>
          <p class="inner-subtitle">
            Progetti di R&amp;S che connettono XR, AI, 3D e infrastrutture
            cloud, in collaborazione con partner nazionali e internazionali.
          </p>
        </section>

        <section class="content">
            <div>
              <p style="text-align: justify;">Swing:It ha reinvestito in Ricerca e Sviluppo oltre il 95% dei propri proventi. Tali investimenti consentono di tracciare la giusta strada per l’Innovazione. Per tale ragione Swing:It valuta favorevolmente la partecipazione a progetti di innovazione.</p>
              <p style="text-align: justify;">Swing:It offre ai propri Clienti e Partner soluzioni efficaci volte a promuovere il cambiamento, con servizi di Project Management, Ingegneria, Software Design e Development, Formazione, per il successo di qualunque progetto di Ricerca e Sviluppo. I nuovi paradigmi offerti da Swing:It garantiscono il trasferimento tecnologico verso i nostri Partner e l’arricchimento di conoscenze e competenze per l’intero team di progetto.</p>
              <p style="text-align: justify;">Software Engineering Italia, sin dalla sua nascita ha preso parte, a vario titolo, a diversi Progetti di Ricerca e Sviluppo nel settore ICT, della tele-medicina e delle Scienze della Terra.</p>
              <p>Tra questi:</p>
            </div>
          <div class="grid-3">
            <!-- ripeti schema card progetto per tutti i nomi richiesti -->
            <article class="card">
              <h3>AgeSense-AI</h3>
              <p style="text-align:center;"><img src="../images/AGESENSEAI.png" alt="AGESENSEAI logo" width="300px"/></p>
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
              <p style="text-align:center;"><img src="../images/ISIPHUR.png" alt="ISIPHUR logo" width="300px"/></p>
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
              <p style="text-align:center;"><img src="../images/CATLAB.png" alt="CATLAB logo" width="300px"/></p>
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
              <p style="text-align:center;"><img src="../images/EUREKA3DXR.png" alt="EUREKA3DXR logo" width="300px"/></p>
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
              <p style="text-align:center;"><img src="../images/VESPA2.png" alt="VESPA2 logo" width="300px"/></p>
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
              <p style="text-align:center;"><img src="../images/3DLAB.png" alt="3DLAB logo" width="300px"/></p>
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
              <p style="text-align:center;"><img src="../images/SECESTA.png" alt="SECESTA logo" width="300px"/></p>
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
              <p style="text-align:center;"><img src="../images/GRIDCORE.png" alt="GRIDCORE logo" width="300px"/></p>
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
              <p style="text-align:center;"><img src="../images/EMSODEV.png" alt="EMSODEV logo" width="300px"/></p>
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
              <p style="text-align:center;"><img src="../images/METROMI.png" alt="M3MILANO logo" width="300px"/></p>
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
              <p style="text-align:center;"><img src="../images/EARTHSERVER.png" alt="EARTHSERVER logo" width="300px"/></p>
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
              <p style="text-align:center;"><img src="../images/VESPA.png" alt="VESPA logo" width="300px"/></p>
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
        
<?php include '../includes/footer_it.php'; ?>
