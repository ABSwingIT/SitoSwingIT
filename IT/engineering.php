<?php 
$path = "../";      // Siamo dentro una cartella, dobbiamo salire di un livello per trovare css e images
$page = "Engineering";    // Questo farà illuminare "Engineering" nel menu
include '../includes/header_it.php'; // Notare ../ prima di includes
?>
        <section class="inner-hero fade-in">
          <div class="breadcrumb"><a href="../index.php">Home</a> / Engineering</div>
          <h1 class="inner-title">Engineering</h1>
          <p class="inner-subtitle">
            Progettiamo e sviluppiamo soluzioni software e infrastrutture
            digitali che uniscono XR, AI, web e cloud, seguendo l’intero ciclo
            di vita del progetto.
          </p>
          <p style="text-align: center;"><img src="../images/engineering.png" alt="engineering" width="400px" /></p>
        </section>

        <section class="content fade-in">
          <div class="content-grid">
            <div>
              <p style="text-align: justify;">
                Swing:it offre servizi di automazione industriale quali Manufacturing Intelligence, App Factory Automation, Sistemi SCADA, soluzioni SECS & GEM per le industrie dei Semiconduttori così come per l’Automotive, per le aziende farmaceutiche e industrie della bio-medicina.
                Swing:It offre supporto a impianti di produzione basati su catene di montaggio, trasporto sospeso, etc attraverso applicazioni, soluzioni web 2.0 e anche in mobilità (Android OS).
                Le soluzioni sono basate sui modelli e le soluzioni di ErgoTech Systems, Los Alamos – NM – USA. Visita www.ergotech.com per maggiori dettagli.
                L’azienda opera per la mobilità sostenibile e offre soluzioni per Ferrovie Metropolitane e monorotaie. Particolare risalto rivestono le soluzioni driverless, di monitoraggio e controllo delle linee, del segnalamento e del telerilevamento. L’azienda ha sviluppato il servizio TVCC e supporto alla guida della linea 3 della Metropolitana di Milano.
              </p>
            </div>

            <aside class="sidebar-card">
              <h2>Come lavoriamo</h2>
              <ul>
                <li>Metodologie agili e cicli iterativi di prototipazione.</li>
                <li>
                  Coinvolgimento degli stakeholder con demo periodiche e
                  ambienti pilota.
                </li>
                <li>
                  Documentazione tecnica e operative handbook a supporto dei
                  team interni.
                </li>
              </ul>
            </aside>
          </div>
        </section>
<?php include '../includes/footer_it.php'; ?>
