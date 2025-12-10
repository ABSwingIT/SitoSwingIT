<?php 
$path = "../";      // Siamo dentro una cartella, dobbiamo salire di un livello per trovare css e images
$page = "finanziamenti";    // Questo farà illuminare "Finanziamenti" nel menu
include '../includes/header_it.php'; // Notare ../ prima di includes
?>
        <section class="inner-hero fade-in">
          <div class="breadcrumb"><a href="../index.php">Home</a> / Finanziamenti</div>
          <h1 class="inner-title">Finanziamenti</h1>
          <p class="inner-subtitle">
            Supporto alla partecipazione a bandi nazionali ed europei e gestione
            di progetti co‑finanziati in ambito digitale e XR.
          </p>
        </section>

        <section class="content">
            <div>
              <p>
                Diamo Vita alle tue Idee.
              </p>
              <p style="text-align: justify;">Realizziamo per te il design del tuo progetto e ricerchiamo le fonti di finanziamento più adatte per realizzarlo.</p>
              <p>Ecco i nostri servizi:</p>
              <ul>
                <li>Progettazione Tecnica e Amministrativa;</li>
                <li>Progettazione Esecutiva;</li>
                <li>Project Management Tecnico;</li>
                <li>Project Management Amministrativo</li>
              </ul>
              <p style="text-align: center;"><img src="../images/Horizon2020.jpg" alt="Horizon2020" width="400px"/></p>
              <p style="text-align: center;"><img src="../images/logo_pon.jpg" alt="PON" width="400px"/></p>
              <p style="text-align: center;"><img src="../images/fesr_sicilia_2014_2020_N.jpg" alt="POFESR 2014-20" width="400px"/></p>
            </div>
        </section>
<?php include '../includes/footer_it.php'; ?>