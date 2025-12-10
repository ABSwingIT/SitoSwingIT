<?php 
$path = "../";      // Siamo dentro una cartella, dobbiamo salire di un livello per trovare css e images
$page = "engineering";    // Questo farà illuminare "Engineering" nel menu
include '../includes/header_de.php'; // Notare ../ prima di includes
?>
        <section class="inner-hero fade-in">
          <div class="breadcrumb"><a href="../index_de.php">Home</a> / Engineering</div>
          <h1 class="inner-title">Engineering</h1>
          <p class="inner-subtitle">
            Wir planen und entwickeln Softwarelösungen und digitale Infrastrukturen, die XR, KI, Web und Cloud kombinieren, und begleiten den gesamten Lebenszyklus des Projekts.
          </p>
          <p style="text-align: center;"><img src="../images/engineering.png" alt="engineering" width="400px" /></p>
        </section>

        <section class="content fade-in">
          <div class="content-grid">
            <div>
              <p style="text-align: justify;">
                Swing:IT bietet Dienstleistungen für industrielle Automatisierung wie Manufacturing Intelligence, App Factory Automation, SCADA-Systeme sowie SECS & GEM-Lösungen für die Halbleiterindustrie sowie für die Automobilindustrie, pharmazeutische Unternehmen und Biomedizin. Swing:IT unterstützt Produktionsanlagen auf Basis von Fließbändern, Hängebahnen usw. mit Anwendungen, Web 2.0-Lösungen und mobilen Lösungen (Android OS). Die Lösungen basieren auf den Modellen und Ansätzen von ErgoTech Systems, Los Alamos – NM – USA. Weitere Details finden Sie unter [www.ergotech.com](https://www.ergotech.com). Das Unternehmen ist im Bereich nachhaltige Mobilität tätig und bietet Lösungen für U-Bahnen und Monorails. Besonderen Fokus legt Swing:IT auf fahrerlose Systeme, Überwachungs- und Steuerungslösungen für Strecken, Signale und Fernüberwachung. Das Unternehmen hat das TVCC-System und die Fahrerassistenz für die Linie 3 der Mailänder U-Bahn entwickelt.
              </p>
            </div>

            <aside class="sidebar-card">
              <h2>So arbeiten wir</h2>
              <ul>
                <li>Agile Methoden und iterative Prototypzyklen.</li>
                <li>Einbindung der Stakeholder durch regelmäßige Demos und Pilotumgebungen.</li>
                <li>Technische Dokumentation und operative Handbücher zur Unterstützung interner Teams.</li>
              </ul>
            </aside>
          </div>
        </section>
<?php include '../includes/footer_de.php'; ?>
